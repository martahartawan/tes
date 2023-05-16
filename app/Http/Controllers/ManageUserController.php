<?php

namespace App\Http\Controllers;

use App\Models\Jawaban_soal1;
use App\Models\Jawaban_soal2;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = "Manajemen User";
        if ($request->filled('search')) {
            $data = User::search($request->search)->paginate(10);
        } else {
            $data = User::paginate(10);
        }
        return view('mimin.managemenuser', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah User";
        return view('mimin.tambahmanageuser', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'required' => 'Kolom Wajib Diisi!',
        ];
        $validasi = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'admin_status' => 'required',
            'password' => 'required|min:6'
        ], $message);
        $this->hashPassword($validasi);
        return redirect('user')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function hashPassword(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'admin_status' => $data['admin_status'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit User";
        $user = User::find($id);
        return view('mimin.editmanageuser', compact('title', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message = [
            'required' => 'Kolom Wajib Diisi!',
        ];
        $validasi = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'admin_status' => 'required',
            'password' => 'required|min:6'
        ], $message);
        $validasi['password'] = Hash::make($validasi['password']);
        User::where('id', $id)->update($validasi);
        return redirect('user')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect('user')->with('success', 'Data Berhasil DiHapus');
    }
}
