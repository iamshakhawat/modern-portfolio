<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function educations()
    {
        $educations = Education::all();
        return view('admin.education.educations', compact('educations'));
    }

    public function createEducation()
    {
        return view('admin.education.create');
    }

    public function storeEducation(Request $request)
    {
        $validated = $request->validate([
            'degree' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'years' => 'required|string|max:255',
            'status' => 'nullable|string|max:255',
        ]);

        Education::create($validated);

        return redirect()->route('admin.educations')->with('success', 'Education added successfully.');
    }

    public function editEducation($id)
    {
        $education = Education::findOrFail($id);
        return view('admin.education.edit', compact('education'));
    }

    public function updateEducation(Request $request, $id)
    {
        $validated = $request->validate([
            'degree' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'years' => 'required|string|max:255',
            'status' => 'nullable|string|max:255',
        ]);

        $education = Education::findOrFail($id);
        $education->update($validated);

        return redirect()->route('admin.educations')->with('success', 'Education updated successfully.');
    }

    public function deleteEducation($id)
    {
        $education = Education::findOrFail($id);
        $education->delete();

        return redirect()->route('admin.educations')->with('success', 'Education deleted successfully.');
    }
}
