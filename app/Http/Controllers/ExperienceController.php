<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function experiences()
    {
        $experiences = Experience::all();
        return view('admin.experiences.index', compact('experiences'));
    }

    public function createExperience()
    {
        return view('admin.experiences.create');
    }

    public function storeExperience(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $experience = new Experience();
        $experience->title = $request->input('title');
        $experience->company = $request->input('company');
        $experience->duration = $request->input('duration');
        $experience->icon = $request->input('icon');
        $experience->description = $request->input('description');
        $experience->save();

        return redirect()->route('admin.experiences')->with('success', 'Experience created successfully.');
    }

    public function editExperience($id)
    {
        $experience = Experience::findOrFail($id);
        return view('admin.experiences.edit', compact('experience'));
    }

    public function updateExperience(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $experience = Experience::findOrFail($id);
        
        $experience->title = $request->input('title');
        $experience->company = $request->input('company');
        $experience->duration = $request->input('duration');
        $experience->icon = $request->input('icon');
        $experience->description = $request->input('description');
        $experience->save();

        
        return redirect()->route('admin.experiences')->with('success', 'Experience updated successfully.');
    }

    public function deleteExperience($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();

        return redirect()->route('admin.experiences')->with('success', 'Experience deleted successfully.');
    }
}
