<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Brand;
use App\Models\Skill;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Achievement;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Certification;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
{
        // Simple Stats
        $stats = [
            'total_projects' => Project::count(),
            'total_skills' => Skill::count(),
            'total_services' => Service::count(),
            'total_contacts' => Contact::count(),
            'total_testimonials' => Testimonial::count(),
            'total_achievements' => Achievement::count(),
            'total_certifications' => Certification::count(),
            'total_experiences' => Experience::count(),
        ];

        // Recent Items
        $recentProjects = Project::latest()->take(5)->get();
        $recentContacts = Contact::latest()->take(8)->get();
        $latestTestimonials = Testimonial::latest()->take(3)->get();
        
        // Additional Data
        $topSkills = Skill::orderBy('percentage', 'desc')->take(6)->get();
        $recentAchievements = Achievement::latest()->take(4)->get();
        $featuredProjects = Project::where('is_featured', true)->latest()->take(3)->get();
        $activeServices = Service::latest()->take(4)->get();

        return view('admin.dashboard', compact(
            'stats',
            'recentProjects',
            'recentContacts',
            'latestTestimonials',
            'topSkills',
            'recentAchievements',
            'featuredProjects',
            'activeServices'
        ));
    }

    public function profile()
    {
        return view('admin.profile.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully.');
    }

    public function changePassword()
    {
        return view('admin.change-password.change-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect()->route('admin.change.password')->with('success', 'Password changed successfully.');
    }
}
