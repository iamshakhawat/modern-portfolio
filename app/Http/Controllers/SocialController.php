<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function socials()
    {
        $socials = Social::latest()->paginate(10);
        return view('admin.socials.index', compact('socials'));
    }

    public function createSocial()
    {
        return view('admin.socials.create');
    }

    public function storeSocial(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'color' => 'required|string|max:7',
            'url' => 'required|url|max:255',
        ]);

        Social::create([
            'name' => $request->name,
            'icon' => $request->icon,
            'color' => $request->color,
            'url' => $request->url,
            'status' => $request->has('status') ? true : false,
        ]);

        return redirect()->route('admin.socials')->with('success', 'Social link added successfully.');
    }

    public function editSocial($id)
    {
        $social = Social::findOrFail($id);
        return view('admin.socials.edit', compact('social'));
    }

    public function updateSocial(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'color' => 'required|string|max:7',
            'url' => 'required|url|max:255',
        ]);

        $social = Social::findOrFail($id);
        $social->update([
            'name' => $request->name,
            'icon' => $request->icon,
            'color' => $request->color,
            'url' => $request->url,
            'status' => $request->has('status') ? true : false,
        ]);

        return redirect()->route('admin.socials')->with('success', 'Social link updated successfully.');
    }

    public function deleteSocial($id)
    {
        $social = Social::findOrFail($id);
        $social->delete();

        return redirect()->route('admin.socials')->with('success', 'Social link deleted successfully.');
    }
}
