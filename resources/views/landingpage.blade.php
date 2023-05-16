<x-template-layout>
    <div>
        <div class="box">
            <div class="md:container md:mx-auto grid gap-4 grid-cols-2">
                <div class="content">
                    <p class="font-bold heading">APA ITU GETFUTURE?</p>
                    <p class="isi">GetFuture adalah sebuah sistem yang membantu kalian siswa SMP yang telah lulus, untuk menentukan jurusan SMK yang tepat untuk kalian!</p>
                    <button class="bg-sky-400 hover:bg-sky-700 py-2 px-4 rounded-lg">
                        <a href="{{ route('login') }}" class="text-sm text-gray-300 dark:text-white font-bold">Click Untuk Mencoba GetFuture</a>
                    </button>
                </div>
                <div class="content">
                    <img src=" {!! asset('img/asset/homepage/1.jpg') !!}" alt="homepage" class="pic-center">
                </div>
            </div>
        </div>
    </div>
    <div class="box1" id="benefit" style="padding-top:40px; padding-bottom:80px;">
        <div>
            <p class="font-bold" style="text-align: center; font-size: 45px; padding-top:40px;">BENEFIT GETFUTURE</p>
            <div class="md:container md:mx-auto grid grid-cols-2 content1 bg-sky-400">
                <div style="padding-top:10px;">
                    <img src=" {!! asset('img/asset/homepage/2.png') !!}" alt="homepage" class="pic-center" width="38%">
                </div>
                <div class="content-box2">
                    <p class="font-semibold" style="font-size: 42px;">KAMI AKAN MEMBANTU</p>
                    <br>
                    <ul class="list1 font-medium">
                        <li>Membantu kalian dalam menentukan studi lanjut</li>
                        <li>Memberikan pertimbangan yang terbaik dalam menentukan jurusan pada tingkat SMK</li>
                        <li>Tidak dipungut biaya atau <b style="font-size:28px;" class="text-yellow-300">GRATIS</b></li>
                    </ul>
                </div>
            </div>
            <div class="md:container md:mx-auto grid grid-cols-3 content2">
                <div class="content-box3 bg-white">
                    <img src=" {!! asset('img/asset/homepage/4.png') !!}" alt="homepage" class="pic-center" width="100%" style="padding-bottom:30px;">
                    <div class="title1 font-bold text-center">Membantu Menentukan Studi Lanjut</div>
                    <p class="isian1">Mungkin kalian bingung dalam memilih jurusan sesuai dengan minat kalian? Kami akan membantu kalian dalam memecahkan permasalahan itu</p>
                </div>
                <div class="content-box3 bg-white">
                    <img src=" {!! asset('img/asset/homepage/3.png') !!}" alt="homepage" class="pic-center" width="45%" style="padding-bottom:18px;">
                    <div class="title1 font-bold text-center">Memberikan Pertimbangan Terbaik</div>
                    <p class="isian1">Kalian masih bingung dengan pilihan jurusan yang banyak? Kami akan memberikan pertimbangan terbaik sesuai dengan minat dan bakat kalian</p>
                </div>
                <div class="content-box3 bg-white">
                    <img src=" {!! asset('img/asset/homepage/5.png') !!}" alt="homepage" class="pic-center" width="95%" style="padding-bottom:18px;">
                    <div class="title1 font-bold text-center">Tidak Dipungut Biaya Sepeserpun</div>
                    <p class="isian1">Futurden akan membantu kalian dalam menentukan jurusan yang kalian minat, tanpa adanya dipungut biaya sedikitpun, sehingga kalian bisa fokus dengan tujuan kalian masing masing</p>
                </div>
            </div>
        </div>
    </div>
    <div id="contact-us">
        <div class="contact">
            <div class="text-center font-bold" style="font-size: 38px; padding-top:80px; padding-bottom:20px;">Hubungi Kami</div>
            <div class="form">
                <form action="{{route('pesan.store')}}" method="POST">
                    @csrf
                    <div class="input">
                        <label style="font-size: 16px;" class="font-bold">Nama</label>
                        <input type="text" name="nama" id="nama" class="focus:ring-sky-400 focus:border-sky-400 rounded flex-1 block w-full label">
                    </div>
                    <div class="input">
                        <label style="font-size: 16px;" class="font-bold">Email</label>
                        <input type="email" name="email" id="email" class="focus:ring-sky-400 focus:border-sky-400 rounded flex-1 block w-full">
                    </div>
                    <div class="input">
                        <label style="font-size: 16px;" class="font-bold">Pesan</label>
                        <textarea class="focus:ring-sky-400 focus:border-sky-400 rounded flex-1 block w-full" name="saran" id="saran"></textarea>
                    </div>
                    <input type="hidden" name="remember_token" id="remember_token" value="{{ csrf_token() }}" />
                    <div style="text-align:center;"><button type="submit" class="bg-sky-400 hover:bg-sky-700 py-2 px-4 text-sm text-white" style="border-radius:15px; font-size:16px; height:45px;">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</x-template-layout>