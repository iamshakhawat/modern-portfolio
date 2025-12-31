<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certification;
use Illuminate\Support\Facades\Storage;

class CertificationController extends Controller
{
    public function certifications()
    {
        $certifications = Certification::paginate(10);
        return view('admin.certifications.index', compact('certifications'));
    }
    public function createCertification()
    {
        return view('admin.certifications.create');
    }
    public function storeCertification(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'date_obtained' => 'required|date',
            'score' => 'nullable|string|max:255',
            'certificate_path' => 'required|max:255',
            'status' => 'boolean',
        ]);

        $certification = new Certification();
        $certification->name = $request->name;
        $certification->institution = $request->institution;
        $certification->date_obtained = $request->date_obtained;
        $certification->score = $request->score;
        if($request->hasFile('certificate_path')){
            $file = $request->file('certificate_path');
            $filepath = $file->store('certificates','public');
            $certification->certificate_path = $filepath;
        }
        $certification->status = $request->status ? true : false;
        $certification->featured = $request->featured ? true : false;
        $certification->save();

        return redirect()->route('admin.certifications')->with('success', 'Certification created successfully.');
    }
    public function editCertification($id)
    {
        $certification = Certification::findOrFail($id);
        return view('admin.certifications.edit', compact('certification'));
    }
    public function updateCertification(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'date_obtained' => 'required|date',
            'score' => 'nullable|string|max:255',
            'certificate_path' => 'nullable|string|max:255',
            'status' => 'boolean',
        ]);

        $certification = Certification::findOrFail($id);
        $certification->name = $request->name;
        $certification->institution = $request->institution;
        $certification->date_obtained = $request->date_obtained;
        $certification->score = $request->score;
        if($request->hasFile('certificate_path')){
            $file = $request->file('certificate_path');
            $filepath = $file->store('certificates','public');
            $certification->certificate_path = $filepath;
        }
        $certification->status = $request->status ? true : false;
        $certification->featured = $request->featured ? true : false;
        $certification->save();
        return redirect()->route('admin.certifications')->with('success', 'Certification updated successfully.');

    }
    public function deleteCertification($id)
    {
        $certification = Certification::findOrFail($id);
        // delete the certification
        if ($certification->certificate_path) {
            Storage::disk('public')->delete($certification->certificate_path);
        }
        $certification->delete();
        return redirect()->route('admin.certifications')->with('success', 'Certification deleted successfully.');
    }

}
