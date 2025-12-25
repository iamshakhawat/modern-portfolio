<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function skills()
    {
        $skills = Skill::latest()->paginate(10);
        return view('admin.skills.skills', compact('skills'));
    }

    public function createSkill()
    {
        return view('admin.skills.create');
    }


    public function storeSkill(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:frontend,backend,programming,tools',
            'icon' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:7',
        ]);

        dd($request->all());

        $skill = new Skill();
        $skill->name = $request->name;
        $skill->category = $request->category;
        $skill->icon = $request->icon;
        $skill->color = $request->color;
        $skill->status = $request->status ? 1 : 0;
        $skill->save();


        return redirect()->route('admin.skills')->with('success', 'Skill created successfully.');
    }

    public function editSkill($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.skills.edit', compact('skill'));
    }

    public function updateSkill(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:frontend,backend,programming,tools',
            'icon' => 'required|string|max:255',
            'color' => 'required|string|max:7',
        ]);

        $skill = Skill::findOrFail($id);
        $skill->name = $request->name;
        $skill->category = $request->category;
        $skill->icon = $request->icon;
        $skill->color = $request->color;
        $skill->status = $request->status ? 1 : 0;
        $skill->save();
        return redirect()->route('admin.skills')->with('success', 'Skill updated successfully.');
    }


    public function deleteSkill($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('admin.skills')->with('success', 'Skill deleted successfully.');
    }
}
