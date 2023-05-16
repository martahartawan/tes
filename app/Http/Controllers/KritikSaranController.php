<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KritikSaranController extends Controller
{
    public function store(Request $request)
    {
        $login = User::all();
        $token = $request->session()->token();
        $token = csrf_token();
        KritikSaran::create([
            'user_id' => Auth::id(),
            'nama' => $request->nama,
            'email' => $request->email,
            'saran' => $request->saran,
            'remember_token' => $token,
        ]);

        if (isset($login)) {
            return view('landingpage');
        } else {
            return view('user.index');
        }
    }

    public function index(Request $request)
    {
        $title = "Daftar Kritik Saran";
        if ($request->filled('search')) {
            $data = KritikSaran::search($request->search)->paginate(10);
        } else {
            $data = KritikSaran::paginate(10);
        }
        return view('mimin.kritiksaran', compact('title', 'data'));
    }

    public function destroy($id)
    {
        KritikSaran::where('id', $id)->delete();
        return redirect('pesan')->with('success', 'Data Berhasil DiHapus');
    }
}
