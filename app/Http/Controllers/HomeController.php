<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\Hero;
use App\Models\About;
use App\Models\Brand;
use App\Models\Skill;
use App\Models\Social;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use App\Models\Category;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Achievement;
use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Certification;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $about = About::first();
        $skills = Skill::where('status', 1)->get();
        $projects = Project::where('status', 1)->where('is_featured', 1)->limit(6)->get();
        $educations = Education::all();
        $experiences = Experience::all();
        $certifications = Certification::where('status', 1)->where('featured', 1)->latest()->limit(6)->get();
        $services = Service::where('status', 1)->where('featured', 1)->get();
        $testimonials = Testimonial::where('status', 1)->get();
        $achievements = Achievement::where('status', 1)->latest()->limit(4)->get();
        $brands = Brand::where('status', 1)->get();
        $socials = Social::where('status', 1)->get();

        return view('home', compact('hero', 'about', 'skills', 'projects', 'educations', 'experiences', 'services', 'testimonials', 'achievements', 'brands', 'certifications', 'socials'));
    }

    public function showProject($slug)
    {
        $project = Project::with('skills', 'categories', 'images', 'user')->where('slug', $slug)->first();


        return view('project-details', compact('project'));
    }

    public function allprojects(Request $request)
    {
        $categories = Category::where('status', 1)->get();
        $skills = Skill::where('status', 1)->orderBy('name')->get();

        $query = Project::query()->where('status', 1);

        // Sort
        if ($request->filled('sort')) {
            if ($request->sort === 'latest') {
                $query->latest();
            } elseif ($request->sort === 'oldest') {
                $query->oldest();
            }
        }

        // Filter by Category by slug
        if ($request->filled('category')) {
            $categoryId = $request->input('category');
            $query->whereHas('categories', function ($q) use ($categoryId) {
                $q->where('categories.id', $categoryId);
            });
        }

        // Filter by Skill by id
        if ($request->filled('skill')) {
            $skillId = $request->input('skill');
            $query->whereHas('skills', function ($q) use ($skillId) {
                $q->where('skills.id', $skillId);
            });
        }

        $projects = $query->limit(6)->get();

        return view('projects', compact('projects', 'categories', 'skills'));
    }
    public function loadmore(Request $request)
    {
        if ($request->ajax()) {

            $offset = (int) $request->skip ?? 0;
            $limit  = 6;

            $query = Project::query()->where('status', 1);

            // Sort
            if ($request->filled('sort')) {
                if ($request->sort === 'latest') {
                    $query->latest();
                } elseif ($request->sort === 'oldest') {
                    $query->oldest();
                }
            }

            // Filter by Category by slug
            if ($request->filled('category')) {
                $categoryId = $request->input('category');
                $query->whereHas('categories', function ($q) use ($categoryId) {
                    $q->where('categories.id', $categoryId);
                });
            }

            // Filter by Skill by id
            if ($request->filled('skill')) {
                $skillId = $request->input('skill');
                $query->whereHas('skills', function ($q) use ($skillId) {
                    $q->where('skills.id', $skillId);
                });
            }

            /* 🔹 Pagination logic */
            $projects = $query
                ->skip($offset)
                ->take($limit)
                ->get();

            if ($projects->isEmpty()) {
                return response('');
            }

            $html = '';
            foreach ($projects as $project) {
                $html .= view('partials.project-card', compact('project'))->render();
            }

            return response($html);
        }

        return response('');
    }
    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('success', 'Your message has been sent successfully!')->withFragment('contact');
    }

    // download CV
    public function downloadCV()
    {
        $cv = Cv::first();
        if (! $cv) {
            return redirect()->back()->with('error', 'CV not found.');
        } else {
            $filePath = storage_path('app/public/' . $cv->file_path) ?? null;
            return response()->download($filePath);
        }
    }
}
