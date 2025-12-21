<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function about()
    {
        // Logic to show the about section
        $about = About::first();
        return view('admin.about.about', compact('about'));
    }

    public function editAbout()
    {
        // Logic to show the edit about form
        $about = About::first();
        return view('admin.about.edit', compact('about'));
    }
    public function updateAbout(Request $request)
    {
        // Logic to update the about section
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);
        
        $about = About::first();
        if ($request->hasFile('image')) {
            // Delete previous image if exists
            if ($about && $about->image && Storage::disk('public')->exists($about->image)) {
            Storage::disk('public')->delete($about->image);
            }
            // Store new image
            $imagePath = $request->file('image')->store('about', 'public');
            $data['image'] = $imagePath;
        }
        $about->update($data);


        return redirect()->route('admin.about')->with('success', 'About section updated successfully.');
    }
}
