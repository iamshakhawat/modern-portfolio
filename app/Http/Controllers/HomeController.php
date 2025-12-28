<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Category;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $skills = Skill::where('status', 1)->get();
        $projects = Project::where('status', 1)->limit(6)->get();
        $educations = Education::all();
        $experiences = Experience::all();
        return view('home', compact('about', 'skills', 'projects', 'educations', 'experiences'));
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
}
