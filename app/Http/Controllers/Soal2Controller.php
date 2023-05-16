<?php

namespace App\Http\Controllers;

use App\Models\Data_soal2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Soal2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $data = Data_soal2::search($request->search)->orderBy('no_soal', 'asc')->paginate(10);
        } else {
            $data = DB::table('data_soal2s')->orderBy('no_soal', 'asc')->paginate(10);
        }
        $title = "List Soal Sesi 2";
        return view('mimin.daftarsoal2', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Input Soal Sesi 2";
        return view('mimin.tambahdatasoal2', compact('title'));
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
            'numeric' => 'Kolom Wajib Diisi Dengan Angka!',
        ];
        $validasi = $request->validate([
            'no_soal' => 'required|numeric',
            'kategori' => 'required',
            'soal' => 'required',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'e' => 'required',
            'kunci' => 'required',
            'img' => 'mimes:jpg,png|max:2048'
        ], $message);
        if ($request->file('img') == null) {
            $path = null;
        } else {
            $path = $request->file('img')->store('gambar_soal');
        }
        $validasi['img'] = $path;
        Data_soal2::create($validasi);
        return redirect('daftar-soal2')->with('success', 'Data Berhasil Ditambahkan');
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
        $title = "Edit Soal Sesi 2";
        $datasoal2 = Data_soal2::find($id);
        return view('mimin.editdatasoal2', compact('title', 'datasoal2'));
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
            'numeric' => 'Kolom Wajib Diisi Dengan Angka!',
        ];
        $validasi = $request->validate([
            'no_soal' => 'required|numeric',
            'kategori' => 'required',
            'soal' => 'required',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'e' => 'required',
            'kunci' => 'required',
            'img' => 'max:2048'
        ], $message);
        if ($request->hasFile('img')) {
            $filename = time() . $request->file('img')->getClientOriginalName();
            $path = $request->file('img')->storeAs('gambar_soal', $filename);
            $validasi['img'] = $path;
            $soal2 = Data_soal2::find($id);
            Storage::delete($soal2->img);
        }
        Data_soal2::where('id', $id)->update($validasi);
        return redirect('daftar-soal2')->with('success', 'Data Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Data_soal2::where('id', $id)->delete();
        return redirect('daftar-soal2')->with('success', 'Data Berhasil DiHapus');
    }
}
