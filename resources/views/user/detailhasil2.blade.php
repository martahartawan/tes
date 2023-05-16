<x-app-layout>
    <div class="spk-body">
        <div class="spk-box" style="width: auto;margin-right: 50px;margin-left: 50px;">
            <p class="font-bold" style="font-size: 26px">Detail Hasil Keputusan</p>
            <p>Nilai Verbal : {{$jawaban[0]['verbal']}}</p>
            <p>Nilai Numerik : {{$jawaban[0]['numerik']}}</p>
            <br>
            <p>Catatan :</p>
            <p>CI (Consistency Index) = (Lambda Maximum - n)/(n-1)</p>
            <p>CR (Consistency Ratio) = CI (Consistency Index)/IR (Index Ratio)</p>
            <br>
            <p style="font-size: 24px;" class="font-bold">Tabel Perbandingan Berpasangan Kriteria</p>
            <table class="table-auto" style="border:1px solid black; width:100%; text-align:center;">
                <thead style="border:1px solid black;">
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Kriteria</td>
                        <td style="border:1px solid black;">Nilai Verbal</td>
                        <td style="border:1px solid black;">Nilai Numerik</td>
                        <td style="border:1px solid black;" colspan="2">Nilai Eligen</td>
                        <td style="border:1px solid black;">Jumlah</td>
                        <td style="border:1px solid black;">Bobot (Rata-Rata)</td>
                    </tr>
                </thead>
                <tbody style="border:1px solid black;">
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Nilai Verbal</td>
                        <td style="border:1px solid black;">{{number_format($nilaiverbal,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($verbal,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligen1,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligen3,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($jumlaheligen1, 2)}}</td>
                        <td style="border:1px solid black;">{{number_format($rata1, 2)}}</td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Nilai Numerik</td>
                        <td style="border:1px solid black;">{{number_format($numerik,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($nilainumerik,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligen2,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligen4,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($jumlaheligen2,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($rata2,2)}}</td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Jumlah</td>
                        <td style="border:1px solid black;">{{number_format($jumlahverbal,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($jumlahnumerik,2)}}</td>
                        <td style="border:1px solid black;"></td>
                        <td style="border:1px solid black;"></td>
                        <td style="border:1px solid black;"></td>
                        <td style="border:1px solid black;">{{number_format($jmlhrata,2)}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p class="font-bold" style="font-size: 18px;">Ketentuan Perbandingan Berpasangan Alternatif Kriteria Verbal</p>
            <p>1. Pariwisata <b>Sama Penting</b> dari Administrasi</p>
            <p>2. Administrasi <b>Diantara Sama Penting dan Sedikit Lebih Penting</b> dari Teknik</p>
            <p>3. Pariwisata <b>Lebih Penting</b> dari Teknik</p>
            <br>
            <p style="font-size: 24px;" class="font-bold">Tabel Perbandingan Berpasangan Alternatif (Verbal)</p>
            <table class="table-auto" style="border:1px solid black; width:100%; text-align:center;">
                <thead style="border:1px solid black;">
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Alternatif</td>
                        <td style="border:1px solid black;">Administrasi</td>
                        <td style="border:1px solid black;">Pariwisata</td>
                        <td style="border:1px solid black;">Teknik</td>
                        <td style="border:1px solid black;" colspan="3">Nilai Eligen</td>
                        <td style="border:1px solid black;">Jumlah</td>
                        <td style="border:1px solid black;">Bobot (Rata-Rata)</td>
                    </tr>
                </thead>
                <tbody style="border:1px solid black;">
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Administrasi</td>
                        <td style="border:1px solid black;">{{number_format($nilaiadministrasi,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($administrasipariwisata,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($administrasiteknik,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin1,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin4,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin7,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($jumlaheligenadmin1,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($rataadmin1,2)}}</td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Pariwisata</td>
                        <td style="border:1px solid black;">{{number_format($pariwisata,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($nilaipariwisata,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($pariwisatateknik,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin2,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin5,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin8,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($jumlaheligenadmin2,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($rataadmin2,2)}}</td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Teknik</td>
                        <td style="border:1px solid black;">{{number_format($teknikadministrasi,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($teknikpariwisata,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($nilaiteknik,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin3,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin6,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin9,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($jumlaheligenadmin3,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($rataadmin3,2)}}</td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Jumlah</td>
                        <td style="border:1px solid black;">{{number_format($jumlahadministrasi, 2)}}</td>
                        <td style="border:1px solid black;">{{number_format($jumlahpariwisataadmin,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($jumlahteknikadmin,2)}}</td>
                        <td style="border:1px solid black;"></td>
                        <td style="border:1px solid black;"></td>
                        <td style="border:1px solid black;"></td>
                        <td style="border:1px solid black;"></td>
                        <td style="border:1px solid black;">{{number_format($jumlahrataadmin,2)}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p>Lamda Maximum : {{$lambdamaximumadmin}}</p>
            <p>CI = {{number_format($ciadmin,2)}}</p>
            @if ($cradmin > 0.1)
            <p>CR = {{$cradmin}} Perhitungan Tidak Konsisten Harus Mengulang Test!</p>
            @else
            <p>CR = {{number_format($cradmin, 2)}} Perhitungan Konsisten!</p>
            @endif
            <br>
            <p class="font-bold" style="font-size: 18px;">Ketentuan Perbandingan Berpasangan Alternatif Kriteria Numerik</p>
            <p>1. Administrasi <b>Diantara Sama Penting dan Sedikit Lebih Penting</b> dari Pariwisata</p>
            <p>2. Teknik <b>Sama Penting</b> dari Administrasi</p>
            <p>3. Teknik <b>Lebih Penting</b> dari Pariwisata</p>
            <br>
            <p style="font-size: 24px;" class="font-bold">Tabel Perbandingan Berpasangan Alternatif (Numerik)</p>
            <table class="table-auto" style="border:1px solid black; width:100%; text-align:center;">
                <thead style="border:1px solid black;">
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Alternatif</td>
                        <td style="border:1px solid black;">Administrasi</td>
                        <td style="border:1px solid black;">Pariwisata</td>
                        <td style="border:1px solid black;">Teknik</td>
                        <td style="border:1px solid black;" colspan="3">Nilai Eligen</td>
                        <td style="border:1px solid black;">Jumlah</td>
                        <td style="border:1px solid black;">Bobot (Rata-Rata)</td>
                    </tr>
                </thead>
                <tbody style="border:1px solid black;">
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Administrasi</td>
                        <td style="border:1px solid black;">{{number_format($nilaiadministrasi1,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($administrasipariwisata1,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($administrasiteknik1,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin11,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin41,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin71,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($jumlaheligenadmin11,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($rataadmin11,2)}}</td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Pariwisata</td>
                        <td style="border:1px solid black;">{{number_format($pariwisata1,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($nilaipariwisata1,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($pariwisatateknik1,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin21,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin51,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin81,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($jumlaheligenadmin21,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($rataadmin21,2)}}</td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Teknik</td>
                        <td style="border:1px solid black;">{{number_format($teknikadministrasi1,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($teknikpariwisata1,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($nilaiteknik1,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin31,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin61,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($eligenadmin91,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($jumlaheligenadmin31,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($rataadmin31,2)}}</td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Jumlah</td>
                        <td style="border:1px solid black;">{{number_format($jumlahadministrasi1, 2)}}</td>
                        <td style="border:1px solid black;">{{number_format($jumlahpariwisataadmin1,2)}}</td>
                        <td style="border:1px solid black;">{{number_format($jumlahteknikadmin1,2)}}</td>
                        <td style="border:1px solid black;"></td>
                        <td style="border:1px solid black;"></td>
                        <td style="border:1px solid black;"></td>
                        <td style="border:1px solid black;"></td>
                        <td style="border:1px solid black;">{{number_format($jumlahrataadmin1,2)}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p>Lamda Maximum : {{$lambdamaximumadmin1}}</p>
            <p>CI = {{number_format($ciadmin1,2)}}</p>
            @if ($cradmin1 > 0.1)
            <p>CR = {{$cradmin1}} Perhitungan Tidak Konsisten Harus Mengulang Test!</p>
            @else
            <p>CR = {{number_format($cradmin1, 2)}} Perhitungan Konsisten!</p>
            @endif
            <br>
            <p style="font-size: 24px;" class="font-bold">Hasil Perbandingan</p>
            <table class="table-auto" style="border:1px solid black; text-align:center;">
                <thead style="border:1px solid black;">
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Alternatif</td>
                        <td style="border:1px solid black;">Nilai</td>
                    </tr>
                </thead>
                <tbody style="border:1px solid black;">
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Administrasi</td>
                        <td style="border:1px solid black;">{{number_format($hasiladmin,5)}}</td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Pariwisata</td>
                        <td style="border:1px solid black;">{{number_format($hasilpari,5)}}</td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Teknik</td>
                        <td style="border:1px solid black;">{{number_format($hasilteknik,5)}}</td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="border:1px solid black;">Jumlah</td>
                        <td style="border:1px solid black;">{{number_format($jumlahhasil,2)}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            @if ($hasiladmin > $hasilpari && $hasiladmin > $hasilteknik)
            <p>Dapat disimpulkan dari hasil kalkulasi oleh sistem, kamu direkomendasikan untuk memasuki bidang <b>Administrasi</b></p>
            @elseif ($hasilpari > $hasiladmin && $hasilpari > $hasilteknik)
            <p>Dapat disimpulkan dari hasil kalkulasi oleh sistem, kamu direkomendasikan untuk memasuki bidang <b>Pariwisata</b></p>
            @elseif ($hasilteknik > $hasiladmin && $hasilteknik > $hasilpari)
            <p>Dapat disimpulkan dari hasil kalkulasi oleh sistem, kamu direkomendasikan untuk memasuki bidang <b>Teknik</b></p>
            @endif
            <br>
            @if ($cradmin > 0.1)
            <div class="text-center">
                <a href="{{route('spk.verbal')}}"><button class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-3" style="border-radius:6px;">Silahkan Mengulang Test!</button></a>
            </div>
            @else
            <div class="text-center">
                <a href="{{route('spk.result')}}"><button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-3" style="border-radius:6px;">Melihat Hasil</button></a>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>