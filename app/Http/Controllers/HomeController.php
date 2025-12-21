<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $skills = Skill::where('status', 1)->get();
        return view('home', compact('about', 'skills'));
    }

    public function show($id)
    {
        $id = 5;
        return view('project-details', compact('id'));
    }
}
