<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use Nette\Utils\Image;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\ImageProject;
use App\Models\ProjectImage;
use App\Models\ProjectSkill;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;

class ProjectController extends Controller
{
    public function projects()
    {
        $projects = Project::with('categories','skills','images')->latest()->paginate(10);
       return view('admin.project.projects', compact('projects'));
    }

    public function createProject()
    {
        $users = User::all();
        $categories = Category::where('status', true)->get();
        $skills = Skill::where('status', true)->get();
        return view('admin.project.create', compact('users', 'categories', 'skills'));
    }

    public function storeProject(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:projects,title',
            'description' => 'required|string',
            'date' => 'required|date',
            'client' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:5',
            'project_url' => 'required|url',
            'github_url' => 'required|url',
            'user_id' => 'required',
            'status' => 'required',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
            'skills' => 'required|array',
            'skills.*' => 'exists:skills,id',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $project = new Project();
        $project->title = $request->title;
        $project->slug = Str::slug($request->title);
        $project->description = $request->description;
        $project->date = $request->date;
        $project->client = $request->client;
        $project->duration = $request->duration;
        $project->rating = $request->rating;
        $project->url = $request->project_url;
        $project->github_url = $request->github_url;
        $project->user_id = $request->user_id;
        $project->status = $request->status;
        $project->is_featured = $request->is_featured ? true : false;
        $project->save();


        // Add Categories
       $project->categories()->attach($request->categories);

        // Add Skills
        $project->skills()->attach($request->skills);

        // Add Thumbnail
        if ($request->hasFile('thumbnail')) {
            $thumbnailName = uniqid() . "." . $request->file('thumbnail')->getClientOriginalExtension();
            $thumbnailPath = $request->file('thumbnail')->storeAs('/thumbnails', $thumbnailName, 'public');
            $project->thumbnail = $thumbnailPath;
            $project->save();
        }

        // Add Images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->storeAs('/projects', time()."_".$image->getClientOriginalName(), 'public');
                ImageProject::create([
                    'project_id' => $project->id,
                    'image_path' => $imagePath,
                ]);
            }
        }


        return redirect()->route('admin.projects')->with('success', 'Project created successfully.');
    }

    public function editProject($id)
    {
        $project = Project::with('images','categories','skills')->findOrFail($id);
        $users = User::all();
        $allcategories = Category::where('status', true)->get();
        $skills = Skill::where('status', true)->get();
        return view('admin.project.edit', compact('project', 'users', 'allcategories', 'skills'));
    }


    public function updateProject(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255|unique:projects,title,' . $project->id,
            'description' => 'required|string',
            'date' => 'required|date',
            'client' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:5',
            'url' => 'required|url',
            'github_url' => 'required|url',
            'user_id' => 'required',
            'status' => 'required',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
            'skills' => 'required|array',
            'skills.*' => 'exists:skills,id',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $project->title = $request->title;
        $project->slug = Str::slug($request->title);
        $project->description = $request->description;
        $project->date = $request->date;
        $project->client = $request->client;
        $project->duration = $request->duration;
        $project->rating = $request->rating;
        $project->url = $request->url;
        $project->github_url = $request->github_url;
        $project->user_id = $request->user_id;
        $project->status = $request->status;
        $project->save();

        // Sync Categories
        $project->categories()->sync($request->categories);

        // Sync Skills
        $project->skills()->sync($request->skills);

        // Update Thumbnail
        if ($request->hasFile('thumbnail')) {
            // Delete old thumbnail
            if ($project->thumbnail && file_exists(public_path('storage/' . $project->thumbnail))) {
                unlink(public_path('storage/' . $project->thumbnail));
            }
            $thumbnailName = uniqid() . "." . $request->file('thumbnail')->getClientOriginalExtension();
            $thumbnailPath = $request->file('thumbnail')->storeAs('/thumbnails', $thumbnailName, 'public');
            $project->thumbnail = $thumbnailPath;
            $project->save();
        }

        // Add New Images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->storeAs('/projects', time()."_".$image->getClientOriginalName(), 'public');
                ImageProject::create([
                    'project_id' => $project->id,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->route('admin.projects')->with('success', 'Project updated successfully.');
    }

    public function projectImageDelete($id)
    {
        $image = ImageProject::findOrFail($id);

        // Delete image file from storage
        if (file_exists(public_path('storage/' . $image->image_path))) {
            unlink(public_path('storage/' . $image->image_path));
        }

        // Delete image record from database
        $image->delete();

        return redirect()->back()->with('success', 'Project image deleted successfully.');
    }


    public function deleteProject($id)
    {
        $project = Project::findOrFail($id);

        $projectImages = ImageProject::where('project_id', $project->id)->get();
        // Delete all images
        foreach ($projectImages as $image) {
            // Delete image file from storage
            if (file_exists(public_path('storage/' . $image->image_path))) {
                unlink(public_path('storage/' . $image->image_path));
            }
            // Delete image record from database
            $image->delete();
        }

        // Delete thumbnail
        if (file_exists(public_path('storage/' . $project->thumbnail))) {
            unlink(public_path('storage/' . $project->thumbnail));
        }

        // Finally, delete the project
        $project->delete();

        return redirect()->route('admin.projects')->with('success', 'Project deleted successfully.');
    }
}
