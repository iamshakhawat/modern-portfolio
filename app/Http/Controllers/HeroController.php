<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function hero()
    {
        // Logic to show the hero section
        $hero = Hero::first();
        return view('admin.hero.index', compact('hero'));
    }

    public function edithero()
    {
        // Logic to show the edit hero form
        $hero = Hero::first();
        return view('admin.hero.edit', compact('hero'));
    }

    public function updatehero(Request $request)
    {
        // Logic to update the hero section
        $request->validate([
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'hero_img' => 'nullable|image|max:2048',
        ]);

        $hero = Hero::first();
        if ($request->hasFile('hero_img')) {
            // Delete previous image if exists
            if ($hero && $hero->image && Storage::disk('public')->exists($hero->image)) {
                Storage::disk('public')->delete($hero->image);
            }
            // Store new image
            $imagePath = $request->file('hero_img')->store('hero', 'public');
            $hero->hero_img = $imagePath;
        }
        $hero->title = $request->input('title');
        $hero->subtitle = $request->input('subtitle');
        $hero->save();

        return redirect()->route('admin.hero')->with('success', 'Hero section updated successfully.');
    }
}
