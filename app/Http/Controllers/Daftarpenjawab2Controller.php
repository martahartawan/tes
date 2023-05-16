<?php

namespace App\Http\Controllers;

use App\Models\Jawaban_soal2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Daftarpenjawab2Controller extends Controller
{
    public function index(Request $request)
    {
        $title = "Daftar Penjawab Soal Sesi 2";
        if ($request->filled('search')) {
            $user = Jawaban_soal2::search($request->search)->paginate(10);
        } else {
            $user = DB::table('users')->select('*')->join('jawaban_soal2s', 'users.id', '=', 'jawaban_soal2s.user_id')->paginate(10);
        }
        return view('mimin.daftarpenjawab2', compact('title', 'user'));
    }
}
