<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommunityController extends Controller
{
    /**
     * Menampilkan 17 subsektor dari database.
     *
     * @return \Illuminate\View\View
     */
    public function showSubsektors()
    {
        $subsektors = DB::table('fun')->pluck('fun_name');

        return view('choice', compact('subsektors'));
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
