<x-app-layout>
    <div class="spk-body">
        <div class="spk-box" style="height: 580px;">
            <div class="font-bold text-center" style="font-size:36px;">
                {{$title}}
            </div>
            <div class="text-center">
                <img src="{!! asset('img/asset/lolos/lolos soal.png') !!}" alt="homepage" class="pic-center" width="45%">
                <br>
                @if ($hasil2->verbal > $hasil2->numerik)
                <p style="font-size: 20px;" class="font-bold">Wah! Setelah kami kalkulasi kami merekomendasikan kamu untuk masuk ke Bidang Pariwisata.</p>
                @elseif ($hasil2->verbal < $hasil2->numerik)
                    <p style="font-size: 20px;" class="font-bold">Wah! Kami merekomendasikan kamu untuk masuk ke Bidang Teknik.</p>
                    @elseif ($hasil2->verbal == $hasil2->numerik) <p style="font-size: 20px;" class="font-bold">Wah! Kami merekomendasikan kamu untuk masuk ke Bidang Administrasi.</p>
                    @endif
                    <p style="font-size: 20px;">Terima Kasih! Semoga rekomendasi kami dapat membantu kamu dalam menentukan jurusan yang kamu inginkan!</p>
                    <br>
                    <a href="{{route('spk.ahp')}}"><button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-3" style="border-radius:6px;">Melihat Detail</button></a>
                    <a href="{{route('home.index')}}"><button class="bg-sky-400 hover:bg-sky-800 text-white font-bold py-2 px-3" style="border-radius:6px;">Kembali ke Home</button></a>
            </div>
        </div>
    </div>
</x-app-layout>