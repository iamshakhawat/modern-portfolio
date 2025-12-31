<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function cv()
    {
        $cv = Cv::first();
        return view('admin.cv.index', compact('cv'));
    }

    public function addCV()
    {
        return view('admin.cv.add');
    }


    public function storeCV(Request $request)
    {
        $request->validate([
            'file_path' => 'required|mimes:pdf|max:5200',
        ]);

        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $fileName = "Shakhawat_Hosen_CV_" . time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('cv', $fileName, 'public');

            Cv::create([
                'file_path' => $filePath,
            ]);

            return redirect()->route('admin.cv')->with('success', 'CV added successfully.');
        }

        return back()->withErrors(['file_path' => 'Failed to upload CV.']);
    }

    public function deleteCV($id)
    {
        $cv = Cv::findOrFail($id);
        // Delete the file from storage
        if (file_exists(storage_path('app/public/' . $cv->file_path))) {
            unlink(storage_path('app/public/' . $cv->file_path));
        }

        $cv->delete();

        return redirect()->route('admin.cv')->with('success', 'CV deleted successfully.');
    }

    // Stream CV PDF
    public function stream(int $id)
    {
        // Stream the CV PDF file
        $cv = Cv::findOrFail($id);
        $filePath = storage_path('app/public/' . $cv->file_path);
        if (file_exists($filePath)) {
            return response()->file($filePath);
        } else {
            abort(404, 'CV file not found.');
        }
        
    }
}
