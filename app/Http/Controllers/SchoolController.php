<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function school()
    {
        $school = School::all();
        return view('layouts/idea/sekolah', ['school' => $school]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'school' => 'required|string|max:255',
        ]);

        School::create([
            'school' => $request->input('school'),
        ]);

        return redirect()->back()->with('success', 'Sekolah berhasil ditambahkan!');
    }
}
