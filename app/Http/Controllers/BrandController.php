<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function brands()
    {
        $brands = Brand::paginate(10);
        return view('admin.brands.index', compact('brands'));
    }

    public function createBrand()
    {
        return view('admin.brands.create');
    }

    public function storeBrand(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|max:2048',
        ]);

        $path = $request->file('logo')->store('brands', 'public');

        Brand::create([
            'name' => $request->name,
            'logo' => $path,
            'status' => $request->status ? 1 : 0,
        ]);

        return redirect()->route('admin.brands')->with('success', 'Brand created successfully.');
    }
    public function editBrand($id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brands.edit', compact('brand'));
    }

    public function updateBrand(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            // delete old logo if exists
            if ($brand->logo && Storage::disk('public')->exists($brand->logo)) {
                Storage::disk('public')->delete($brand->logo);
            }
            $path = $request->file('logo')->store('brands', 'public');
            $brand->logo = $path;
        }

        $brand->name = $request->name;
        $brand->status = $request->status ? 1 : 0;
        $brand->save();

        return redirect()->route('admin.brands')->with('success', 'Brand updated successfully.');
    }
    public function deleteBrand($id)
    {
        $brand = Brand::findOrFail($id);

        // delete logo if exists
        if ($brand->logo && Storage::disk('public')->exists($brand->logo)) {
            Storage::disk('public')->delete($brand->logo);
        }

        $brand->delete();

        return redirect()->route('admin.brands')->with('success', 'Brand deleted successfully.');
    }
}
