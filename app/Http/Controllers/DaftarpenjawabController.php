<?php

namespace App\Http\Controllers;

use App\Models\Jawaban_soal1;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarpenjawabController extends Controller
{
    public function index(Request $request)
    {
        $title = "Daftar Penjawab Soal Sesi 1";
        if ($request->filled('search')) {
            $user = Jawaban_soal1::search($request->search)->paginate(10);
        } else {
            $user = DB::table('users')->select('*')->join('jawaban_soal1s', 'users.id', '=', 'jawaban_soal1s.user_id')->paginate(10);
        }
        return view('mimin.daftarpenjawab', compact('title', 'user'));
    }

    public function search()
    {
    }
}
