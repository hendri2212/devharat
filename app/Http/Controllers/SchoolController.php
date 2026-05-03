<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return view('layouts/idea/sekolah', compact('schools'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'school' => 'required|string|max:255',
        ]);

        School::create([
            'school' => $request->input('school'),
            'status' => 1, // Set default status to 1 (enable)
        ]);

        return redirect()->back()->with('success', 'Sekolah berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'school' => [
                'required',
                'string', 
                'max:255',
                Rule::unique('schools')->ignore($id),
            ],
        ]);

        $school = School::findOrFail($id);
        $school->update([
            'school' => $request->input('school'),
        ]);

        return redirect()->back()->with('success', 'Sekolah berhasil diubah!');
    }

    public function destroy($id)
    {
        $school = School::findOrFail($id);
        $school->delete();
        return redirect()->back()->with('success', 'Sekolah berhasil dihapus!');
    }
}