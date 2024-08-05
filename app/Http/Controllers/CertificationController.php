<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certification;
use Illuminate\Support\Facades\Log;

class CertificationController extends Controller
{
    // Controller method
    public function index(Request $request)
    {
        $certifications = Certification::filter()->get();
        return view('dashboard', compact('certifications'));
    }





    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'credential_id' => 'nullable|string|max:255',
            'credential_url' => 'nullable|url|max:255',
            'date' => 'required|date',
        ]);

        try {
            Certification::create([
                'title' => $request->title,
                'organization' => $request->organization,
                'credential_id' => $request->credential_id,
                'credential_url' => $request->credential_url,
                'date' => $request->date,
            ]);

            return response()->json(['success' => true, 'message' => 'Certification added successfully!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to add certification.']);
        }
    }




    public function show($id)
    {
        $certification = Certification::findOrFail($id);
        return view('certifications.show', compact('certification'));
    }

    public function edit(Certification $certification)
    {
        return view('certifications.edit', compact('certification'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:certifications,id',
            'title' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'credential_id' => 'nullable|string|max:255',
            'credential_url' => 'nullable|url|max:255',
            'date' => 'nullable|date',
        ]);

        try {
            $certification = Certification::find($request->id);
            $certification->title = $request->title;
            $certification->organization = $request->organization;
            $certification->credential_id = $request->credential_id;
            $certification->credential_url = $request->credential_url;
            $certification->date = $request->date;
            $certification->save();

            return redirect()->back()->with('success', 'Certification updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['update_error' => 'Failed to update certification.']);
        }
    }


    public function destroy($id)
    {
        try {
            $certification = Certification::findOrFail($id);
            $certification->delete();

            return redirect()->back()->with('success', 'Certification deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['Failed to delete certification.']);
        }
    }
}
