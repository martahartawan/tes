<x-admin-layout>
    <div style="font-size:30px;">
        {{$title}}
        <div class="hr bg-sky-400"></div>
    </div>
    <div class="box1" style="margin-top: 20px;">
        <div style="padding:10px;">
            <a href="{{route('daftar-penjawab.index')}}"><button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-3" style="border-radius:6px;">Soal Sesi 1</button></a>
            <a href="{{route('daftar-penjawab2.index')}}"><button class="bg-sky-400 hover:bg-sky-800 text-white font-bold py-2 px-3" style="border-radius:6px;">Soal Sesi 2</button></a>
        </div>
        <form action="{{route('daftar-penjawab.index')}}" method="GET">
            <div style="padding-top:15px; padding-bottom:20px; margin-left: 930px;">
                <input type="text" class="form-control border-solid border-gray-400 px-6 py-2.5" style="border-radius:10px;" name="search" placeholder="Search...">
                <button type="submit" id="search" class="bg-blue-600 hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 text-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg" style="width: 70px; height: 38px; border-radius: 7px;">
                    Search
                </button>
            </div>
        </form>
        <table class="w-full p-5 mt-2">
            <thead>
                <tr class="font-bold text-center text-black">
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Skor</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @if (!empty($user) && $user->count())
                @foreach ($user as $usersoal => $penjawab)
                <tr class="text-center text-black">
                    <td>{{$no}}</td>
                    <td>{{$penjawab->name}}</td>
                    <td>{{$penjawab->skor}}</td>
                </tr>
                <?php $no++; ?>
                @endforeach
                @else
                <tr>
                    <td>
                        <h2>Tidak ada data!</h2>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
        <div class="p-4">
            {!! $user->links() !!}
        </div>
    </div>
</x-admin-layout>