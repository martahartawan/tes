<?php

namespace App\Http\Controllers;

use App\Models\Data_soal1;
use App\Models\Data_soal2;
use App\Models\Jawaban_soal1;
use App\Models\Jawaban_soal2;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SPKController extends Controller
{
    public $user_id;
    public function soal1()
    {
        $title = "Test Soal Sesi 1";
        $soal1 = Data_soal1::all();
        return view('user.spk', compact('title', 'soal1'));
    }

    public function jawabanSoal1(Request $request)
    {
        $title = "Hasil Sesi 1";
        $skor = collect($request->answer);
        $jmlhskor = $skor->reduce(function ($carry, $item) {
            return $carry + $item;
        });
        $user_id = Auth::id();
        $cek_user = Jawaban_soal1::where('user_id', $user_id)->count();
        if ($cek_user == 0) {
            Jawaban_soal1::create([
                'user_id' => $user_id,
                'skor' => $jmlhskor
            ]);
        } else {
            Jawaban_soal1::where('user_id', $user_id)->update([
                'user_id' => $user_id,
                'skor' => $jmlhskor
            ]);
        }
        return view('user.hasil1', compact('jmlhskor', 'title'));
    }

    public function soalverbal(Request $request)
    {
        $title = "Test Soal Verbal";
        return view('user.spkverbal', compact('title'));
    }

    public function soalnumerik()
    {
        $title = "Test Soal Numerik";
        return view('user.spknumerik', compact('title'));
    }

    public function jawabanSoal2()
    {
        $title = "Hasil Sesi 2";
        $auth = Auth::id();
        $hasil2 = Jawaban_soal2::where('user_id', $auth)->first();
        return view('user.hasil2', compact('title', 'hasil2'));
    }

    public function ahp()
    {
        $title = "AHP Proses";
        $cekakun = Auth::id();
        $jawaban = Jawaban_soal2::where('user_id', $cekakun)->get();
        $selisih = abs($jawaban[0]['verbal'] - $jawaban[0]['numerik']);
        // Perbandingan Kriteria
        $nilaiverbal = 1;
        $nilainumerik = 1;
        if ($jawaban[0]['verbal'] == $jawaban[0]['numerik']) {
            $verbal = 1;
            $numerik = 1;
        } else if ($jawaban[0]['verbal'] > $jawaban[0]['numerik']) {
            if ($selisih <= 4) {
                $verbal = 2;
                $numerik = 1 / 2;
            } else if ($selisih <= 8) {
                $verbal = 3;
                $numerik = 1 / 3;
            } else if ($selisih <= 12) {
                $verbal = 4;
                $numerik = 1 / 4;
            } else if ($selisih <= 16) {
                $verbal = 5;
                $numerik = 1 / 5;
            } else if ($selisih <= 20) {
                $verbal = 6;
                $numerik = 1 / 6;
            } else if ($selisih <= 24) {
                $verbal = 7;
                $numerik = 1 / 7;
            } else if ($selisih <= 28) {
                $verbal = 8;
                $numerik = 1 / 8;
            } else if ($selisih <= 30) {
                $verbal = 9;
                $numerik = 1 / 9;
            } else {
                $verbal = 0;
                $numerik = 0;
            }
        } else if ($jawaban[0]['verbal'] < $jawaban[0]['numerik']) {
            if ($selisih <= 4) {
                $verbal = 1 / 2;
                $numerik = 2;
            } else if ($selisih <= 8) {
                $verbal = 1 / 3;
                $numerik = 3;
            } else if ($selisih <= 12) {
                $verbal = 1 / 4;
                $numerik = 4;
            } else if ($selisih <= 16) {
                $verbal = 1 / 5;
                $numerik = 5;
            } else if ($selisih <= 20) {
                $verbal = 1 / 6;
                $numerik = 6;
            } else if ($selisih <= 24) {
                $verbal = 1 / 7;
                $numerik = 7;
            } else if ($selisih <= 28) {
                $verbal = 1 / 8;
                $numerik = 8;
            } else if ($selisih <= 30) {
                $verbal = 1 / 9;
                $numerik = 9;
            } else {
                $verbal = 0;
                $numerik = 0;
            }
        }
        $jumlahverbal = $nilaiverbal + $numerik;
        $jumlahnumerik = $nilainumerik + $verbal;
        $eligen1 = $nilaiverbal / $jumlahverbal;
        $eligen2 = $numerik / $jumlahverbal;
        $eligen3 = $verbal / $jumlahnumerik;
        $eligen4 = $nilainumerik / $jumlahnumerik;
        $jumlaheligen1 = $eligen1 + $eligen3;
        $jumlaheligen2 = $eligen2 + $eligen4;
        $rata1 = $jumlaheligen1 / 2;
        $rata2 = $jumlaheligen2 / 2;
        $jmlhrata = $rata1 + $rata2;
        $lambdamaximum = ($jumlahverbal * $rata1) + ($jumlahnumerik * $rata2);
        $ci = ($lambdamaximum - 2) / (2 - 1);

        //Perbandingan Alternatif Verbal
        $nilaiadministrasi = 1;
        $nilaiteknik = 1;
        $nilaipariwisata = 1;
        $administrasipariwisata = 1;
        $administrasiteknik = 2;
        $pariwisata = 1;
        $teknikadministrasi = 1 / 2;
        $pariwisatateknik = 5;
        $teknikpariwisata = 1 / 5;
        $jumlahadministrasi = $nilaiadministrasi + $pariwisata + $teknikadministrasi;
        $jumlahpariwisataadmin = $administrasipariwisata + $nilaipariwisata + $teknikpariwisata;
        $jumlahteknikadmin = $pariwisatateknik + $nilaiteknik + $administrasiteknik;
        $eligenadmin1 = $nilaiadministrasi / $jumlahadministrasi;
        $eligenadmin2 = $pariwisata / $jumlahadministrasi;
        $eligenadmin3 = $teknikadministrasi / $jumlahadministrasi;
        $eligenadmin4 = $administrasipariwisata / $jumlahpariwisataadmin;
        $eligenadmin5 = $nilaipariwisata / $jumlahpariwisataadmin;
        $eligenadmin6 = $teknikpariwisata / $jumlahpariwisataadmin;
        $eligenadmin7 = $administrasiteknik / $jumlahteknikadmin;
        $eligenadmin8 = $pariwisatateknik / $jumlahteknikadmin;
        $eligenadmin9 = $nilaiteknik / $jumlahteknikadmin;
        $jumlaheligenadmin1 = $eligenadmin1 + $eligenadmin4 + $eligenadmin7;
        $jumlaheligenadmin2 = $eligenadmin2 + $eligenadmin5 + $eligenadmin8;
        $jumlaheligenadmin3 = $eligenadmin3 + $eligenadmin6 + $eligenadmin9;
        $rataadmin1 = $jumlaheligenadmin1 / 3;
        $rataadmin2 = $jumlaheligenadmin2 / 3;
        $rataadmin3 = $jumlaheligenadmin3 / 3;
        $jumlahrataadmin = $rataadmin1 + $rataadmin2 + $rataadmin3;
        $lambdamaximumadmin = ($jumlahadministrasi * $rataadmin1) + ($jumlahpariwisataadmin * $rataadmin2) + ($jumlahteknikadmin * $rataadmin3);
        $ciadmin = ($lambdamaximumadmin - 3) / (3 - 1);
        $cradmin = $ciadmin / 0.58;

        //Perbandingan Alternatif Numerik
        $nilaiadministrasi1 = 1;
        $nilaiteknik1 = 1;
        $nilaipariwisata1 = 1;
        $administrasipariwisata1 = 2;
        $administrasiteknik1 = 1;
        $pariwisata1 = 1 / 2;
        $teknikadministrasi1 = 1;
        $pariwisatateknik1 = 1 / 5;
        $teknikpariwisata1 = 5;
        $jumlahadministrasi1 = $nilaiadministrasi1 + $pariwisata1 + $teknikadministrasi1;
        $jumlahpariwisataadmin1 = $administrasipariwisata1 + $nilaipariwisata1 + $teknikpariwisata1;
        $jumlahteknikadmin1 = $pariwisatateknik1 + $nilaiteknik1 + $administrasiteknik1;
        $eligenadmin11 = $nilaiadministrasi1 / $jumlahadministrasi1;
        $eligenadmin21 = $pariwisata1 / $jumlahadministrasi1;
        $eligenadmin31 = $teknikadministrasi1 / $jumlahadministrasi1;
        $eligenadmin41 = $administrasipariwisata1 / $jumlahpariwisataadmin1;
        $eligenadmin51 = $nilaipariwisata1 / $jumlahpariwisataadmin1;
        $eligenadmin61 = $teknikpariwisata1 / $jumlahpariwisataadmin1;
        $eligenadmin71 = $administrasiteknik1 / $jumlahteknikadmin1;
        $eligenadmin81 = $pariwisatateknik1 / $jumlahteknikadmin1;
        $eligenadmin91 = $nilaiteknik1 / $jumlahteknikadmin1;
        $jumlaheligenadmin11 = $eligenadmin11 + $eligenadmin41 + $eligenadmin71;
        $jumlaheligenadmin21 = $eligenadmin21 + $eligenadmin51 + $eligenadmin81;
        $jumlaheligenadmin31 = $eligenadmin31 + $eligenadmin61 + $eligenadmin91;
        $rataadmin11 = $jumlaheligenadmin11 / 3;
        $rataadmin21 = $jumlaheligenadmin21 / 3;
        $rataadmin31 = $jumlaheligenadmin31 / 3;
        $jumlahrataadmin1 = $rataadmin11 + $rataadmin21 + $rataadmin31;
        $lambdamaximumadmin1 = ($jumlahadministrasi1 * $rataadmin11) + ($jumlahpariwisataadmin1 * $rataadmin21) + ($jumlahteknikadmin1 * $rataadmin31);
        $ciadmin1 = ($lambdamaximumadmin1 - 3) / (3 - 1);
        $cradmin1 = $ciadmin1 / 0.58;

        //perangkingan
        $hasiladmin = ($rataadmin1 * $rata1) + ($rataadmin11 * $rata2);
        $hasilpari = ($rataadmin2 * $rata1) + ($rataadmin21 * $rata2);
        $hasilteknik = ($rataadmin3 * $rata1) + ($rataadmin31 * $rata2);
        $jumlahhasil = $hasiladmin + $hasilpari + $hasilteknik;


        return view('user.detailhasil2', compact(
            'title',
            'jawaban',
            'verbal',
            'numerik',
            'nilaiverbal',
            'nilainumerik',
            'jumlahverbal',
            'jumlahnumerik',
            'eligen1',
            'eligen2',
            'eligen3',
            'eligen4',
            'jumlaheligen1',
            'jumlaheligen2',
            'rata1',
            'rata2',
            'jmlhrata',
            'lambdamaximum',
            'ci',
            'administrasipariwisata',
            'administrasiteknik',
            'pariwisata',
            'teknikadministrasi',
            'pariwisatateknik',
            'teknikpariwisata',
            'nilaiadministrasi',
            'nilaipariwisata',
            'nilaiteknik',
            'jumlahadministrasi',
            'jumlahpariwisataadmin',
            'jumlahteknikadmin',
            'eligenadmin1',
            'eligenadmin2',
            'eligenadmin3',
            'eligenadmin4',
            'eligenadmin5',
            'eligenadmin6',
            'eligenadmin7',
            'eligenadmin8',
            'eligenadmin9',
            'jumlaheligenadmin1',
            'jumlaheligenadmin2',
            'jumlaheligenadmin3',
            'rataadmin1',
            'rataadmin2',
            'rataadmin3',
            'jumlahrataadmin',
            'lambdamaximumadmin',
            'ciadmin',
            'cradmin',
            'administrasipariwisata1',
            'administrasiteknik1',
            'pariwisata1',
            'teknikadministrasi1',
            'pariwisatateknik1',
            'teknikpariwisata1',
            'nilaiadministrasi1',
            'nilaipariwisata1',
            'nilaiteknik1',
            'jumlahadministrasi1',
            'jumlahpariwisataadmin1',
            'jumlahteknikadmin1',
            'eligenadmin11',
            'eligenadmin21',
            'eligenadmin31',
            'eligenadmin41',
            'eligenadmin51',
            'eligenadmin61',
            'eligenadmin71',
            'eligenadmin81',
            'eligenadmin91',
            'jumlaheligenadmin11',
            'jumlaheligenadmin21',
            'jumlaheligenadmin31',
            'rataadmin11',
            'rataadmin21',
            'rataadmin31',
            'jumlahrataadmin1',
            'lambdamaximumadmin1',
            'ciadmin1',
            'cradmin1',
            'hasiladmin',
            'hasilpari',
            'hasilteknik',
            'jumlahhasil'
        ));
    }
}
