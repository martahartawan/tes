<x-app-layout>
    <div class="spk-body">
        <div class="spk-box" style="height: 530px;">
            <div class="font-bold text-center" style="font-size:36px;">
                {{$title}}
            </div>
            <div class="text-center">
                <img src="{!! asset('img/asset/lolos/lolos soal.png') !!}" alt="homepage" class="pic-center" width="45%">
                <br>
                <p style="font-size: 20px;" class="font-bold">Selamat! Skor yang kamu dapatkan adalah {{$jmlhskor}}</p>
                @if ($jmlhskor >= 33)
                <p style="font-size: 20px;">Wah! Kamu mempunyai bakat vokasial yang tinggi.</p>
                @elseif ($jmlhskor >= 25)
                <p style="font-size: 20px;">Kamu memiliki bakat vokasional yang cukup.</p>
                @elseif ($jmlhskor < 25) <p style="font-size: 20px;">Saran kami sebaiknya kamu mengikuti pendidikan akademik, Jangan Menyerah!</p>
                    @endif
                    <br>
                    <a href="{{route('home.index')}}"><button class="bg-sky-400 hover:bg-sky-800 text-white font-bold py-2 px-3" style="border-radius:6px;">Kembali ke Home</button></a>
                    <a href="{{route('spk.verbal')}}"><button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-3" style="border-radius:6px;">Lanjut ke Soal Sesi 2</button></a>
            </div>
        </div>
    </div>
</x-app-layout>