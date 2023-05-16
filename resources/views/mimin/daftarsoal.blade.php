<x-admin-layout>
    <div style="font-size:30px;">
        {{$title}}
        <div class="hr bg-sky-400"></div>
    </div>
    <div class="box1" style="margin-top: 20px;">
        <div style="padding:10px;">
            <a href="{{route('daftar-soal.create')}}"><button class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-3" style="border-radius:6px;">Tambah Data</button></a>
            <a href="{{route('daftar-soal.index')}}"><button class="bg-orange-500 hover:bg-orange-800 text-white font-bold py-2 px-3" style="border-radius:6px;">Soal Sesi 1</button></a>
            <a href="{{route('daftar-soal2.index')}}"><button class="bg-sky-400 hover:bg-sky-800 text-white font-bold py-2 px-3" style="border-radius:6px;">Soal Sesi 2</button></a>
        </div>
        <form action="{{route('daftar-soal.index')}}" method="GET">
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
                    <th>No.Soal</th>
                    <th>Soal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @if (!empty($data) && $data->count())
                @foreach ($data as $datasoal => $soal1)
                <tr class="text-center text-black">
                    <td>{{$no}}</td>
                    <td>{{$soal1->no_soal}}</td>
                    <td>{{Str::limit($soal1->soal, 40)}}</td>
                    <td>
                        <form action="{{route('daftar-soal.destroy', $soal1->id)}}" method="POST">
                            <a href="{{route('daftar-soal.edit', $soal1->id)}}" class="bg-yellow-400 py-1 px-4 hover:bg-yellow-600 rounded text-white font-bold" style="padding-top:7px; padding-bottom:7px;">Edit</a>
                            <input type="submit" value="Delete" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" class="bg-red-600 hover:bg-red-800 text-white font-bold py-1 px-4 rounded">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
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
            {!! $data->links() !!}
        </div>
    </div>
</x-admin-layout>