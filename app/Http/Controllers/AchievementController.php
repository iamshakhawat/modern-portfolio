<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function achievements()
    {
        $achievements = Achievement::latest()->paginate(10);
        return view('admin.achievements.index', compact('achievements'));
    }
    public function createAchievement() {
        return view('admin.achievements.create');
    }
    public function storeAchievement(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'color' => 'required|string|max:50',
        ]);

        $achievement = new Achievement();
        $achievement->title = $request->title;
        $achievement->value = $request->value;
        $achievement->icon = $request->icon;
        $achievement->color = $request->color;
        $achievement->status = $request->status ? 1 : 0; // Active by default
        $achievement->save();

        return redirect()->route('admin.achievements')->with('success', 'Achievement created successfully.');
    }

    public function editAchievement($id) {
        $achievement = Achievement::findOrFail($id);
        return view('admin.achievements.edit', compact('achievement'));
    }

    public function updateAchievement(Request $request, $id) {
        $request->validate([
            'title' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'color' => 'required|string|max:50',
        ]);

        $achievement = Achievement::findOrFail($id);
        $achievement->title = $request->title;
        $achievement->value = $request->value;
        $achievement->icon = $request->icon;
        $achievement->color = $request->color;
        $achievement->status = $request->status ? 1 : 0;
        $achievement->save();

        return redirect()->route('admin.achievements')->with('success', 'Achievement updated successfully.');
    }
    public function deleteAchievement($id) {
        $achievement = Achievement::findOrFail($id);
        $achievement->delete();

        return redirect()->route('admin.achievements')->with('success', 'Achievement deleted successfully.');
    }
}
