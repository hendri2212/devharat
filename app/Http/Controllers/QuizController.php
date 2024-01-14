<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Community;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function index()
    {
        return view('layouts/quiz/quiz');
    }

    public function create()
    {
        $communities = Community::all();
        $choice = Quiz::where('user_id', Auth::user()->id)->get();
        return view('layouts/quiz/choice', compact('communities', 'choice'));
        // return $choice;
    }

    public function store(Request $request)
    {
        $save = new Quiz;
        $save->community_id = $request->community_id;
        $save->user_id = Auth::user()->id;
        $save->save();
        
        return response()->json('Success', 200);
    }

    /**
     * Menampilkan 17 subsektor dari database.
     *
     * @return \Illuminate\View\View
     */
    public function showSubsektors()
    {
        $subsektors = DB::table('fun')->pluck('fun_name');

        return view('layouts/quiz/choice', compact('subsektors'));
        // return view('SubsektorSementara.index', compact('subsektors'));
    }

    /**
     * Menanggapi hasil pilihan pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function processUserSelection(Request $request)
    {
        $selectedSubsektor = $request->input('subsektor');

        // Lakukan sesuatu dengan hasil pilihan pengguna
        // Misalnya, simpan ke dalam database atau tampilkan di halaman lain

        return response()->json(['message' => 'Pilihan pengguna: ' . $selectedSubsektor]);
    }
}
