<x-admin-layout>
    <div style="font-size:30px;">
        {{$title}}
        <div class="hr bg-sky-400"></div>
    </div>
    <div style="margin-top: 20px;">
        <div class="main-box bg-white">
            <div style="font-size:24px;" class="font-bold">
                <p class="text-center">Selamat Datang {{ Auth::user()->name }}, di Menu Admin, mohon berprilaku dengan bijak</p>
                <img src=" {!! asset('img/asset/admin/admin.png') !!}" alt="homepage" class="pic-center" width="25%">
            </div>
        </div>
        <div class="md:container md:mx-auto grid grid-cols-3">
            <div class="content-box bg-white" style="margin-top:20px;">
                <div class="md:container md:mx-auto grid grid-cols-2" style="margin-top:20px;">
                    <div style="font-size:26px; align-items: center; justify-items: center; margin-top:10px;">
                        Jumlah User
                        <div class="font-bold" style="font-size: 24px; margin-top: 10px;">
                            {{$jumlahuser}} Pengguna
                        </div>
                    </div>
                    <div>
                        <div class="bg-red-500" style="width:100px; height:100px; border-radius:50px; margin-top:8px; margin-left:70px;">
                            <i class="fas fa-user" style="font-size: 55px; color:white; margin-top: 20px; margin-left: 26px;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-box bg-white" style="margin-top:20px;">
                <div class="md:container md:mx-auto grid grid-cols-2" style="margin-top:20px;">
                    <div style="font-size:26px; align-items: center; justify-items: center; margin-top:10px;">
                        Jumlah Soal
                        <div class="font-bold" style="font-size: 24px; margin-top: 10px;">
                            {{$jumlahsoal}} Soal
                        </div>
                    </div>
                    <div>
                        <div class="bg-sky-500" style="width:100px; height:100px; border-radius:50px; margin-top:8px; margin-left:70px;">
                            <i class="fas fa-sticky-note" style="font-size: 55px; color:white; margin-top: 23px; margin-left: 28px;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-box bg-white" style="margin-top:20px;">
                <div class="md:container md:mx-auto grid grid-cols-2" style="margin-top:20px;">
                    <div style="font-size:26px; align-items: center; justify-items: center; margin-top:10px;">
                        Kritik Saran
                        <div class="font-bold" style="font-size: 24px; margin-top: 10px;">
                            {{$jumlahkritik}} Kritik Saran
                        </div>
                    </div>
                    <div>
                        <div class="bg-green-500" style="width:100px; height:100px; border-radius:50px; margin-top:8px; margin-left:70px;">
                            <i class="fas fa-mail-bulk" style="font-size: 55px; color:white; margin-top: 20px; margin-left: 22px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-admin-layout>