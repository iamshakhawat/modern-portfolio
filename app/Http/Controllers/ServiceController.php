<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function services()
    {
        $services = Service::latest()->orderBy('featured', 'desc')->paginate(10);
        return view('admin.service.index', compact('services'));
    }

    public function createService()
    {
        return view('admin.service.create');
    }

    public function storeService(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:services,title',
            'description' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'color' => 'required|string|max:7',
        ]);

        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->color = $request->color;
        $service->status = $request->status ? 1 : 0;
        $service->featured = $request->featured ? 1 : 0;
        $service->save();

        return redirect()->route('admin.services')->with('success', 'Service created successfully.');
    }

    public function editService($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.service.edit', compact('service'));
    }

    public function updateService(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:services,title,' . $id,
            'description' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'color' => 'required|string|max:7',
        ]);

        $service = Service::findOrFail($id);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->icon = $request->icon;
        $service->color = $request->color;
        $service->status = $request->status ? 1 : 0;
        $service->featured = $request->featured ? 1 : 0;
        $service->save();

        return redirect()->route('admin.services')->with('success', 'Service updated successfully.');
    }

    public function deleteService($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('admin.services')->with('success', 'Service deleted successfully.');
    }
}
