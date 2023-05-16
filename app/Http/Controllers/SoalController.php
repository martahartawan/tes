<?php

namespace App\Http\Controllers;

use App\Models\Data_soal1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $data = Data_soal1::search($request->search)->orderBy('no_soal', 'asc')->paginate(10);
        } else {
            $data = DB::table('data_soal1s')->orderBy('no_soal', 'asc')->paginate(10);
        }
        $title = "List Soal Sesi 1";
        return view('mimin.daftarsoal', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Input Soal Sesi 1";
        return view('mimin.tambahdatasoal', compact('title'));
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
            'soal' => 'required',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'e' => 'required',
        ], $message);
        Data_soal1::create($validasi);
        return redirect('daftar-soal')->with('success', 'Data Berhasil Ditambahkan');
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
        $title = "Edit Soal Sesi 1";
        $datasoal1 = Data_soal1::find($id);
        return view('mimin.editdatasoal', compact('title', 'datasoal1'));
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
            'soal' => 'required',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'e' => 'required',
        ], $message);
        Data_soal1::where('id', $id)->update($validasi);
        return redirect('daftar-soal')->with('success', 'Data Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Data_soal1::where('id', $id)->delete();
        return redirect('daftar-soal')->with('success', 'Data Berhasil DiHapus');
    }
}
