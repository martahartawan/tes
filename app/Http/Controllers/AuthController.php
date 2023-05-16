<?php

namespace App\Http\Controllers;

use App\Models\Data_soal1;
use App\Models\Data_soal2;
use App\Models\Jawaban_soal1;
use App\Models\Jawaban_soal2;
use App\Models\KritikSaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $admin_status = Auth::user()->admin_status;

        if ($admin_status == 1) {
            $title = "Dashboard";
            $jumlahkritik = KritikSaran::all()->count();
            $jumlahuser = User::all()->count();
            $jumlahsoal = Data_soal1::all()->count() + Data_soal2::all()->count();
            $jumlahpenjawab1 = Jawaban_soal1::all()->count();
            $jumlahpenjawab2 = Jawaban_soal2::all()->count();
            return view('mimin.index', compact('title', 'jumlahuser', 'jumlahkritik', 'jumlahsoal'));
        } else {
            return view('user.index');
        }
    }

    public function store()
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
