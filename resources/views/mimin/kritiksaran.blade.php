<x-admin-layout>
    <div style="font-size:30px;">
        {{$title}}
        <div class="hr bg-sky-400"></div>
    </div>
    <div class="box1" style="margin-top: 20px;">
        <form action="{{route('pesan.index')}}" method="GET">
            <div style="padding-top:15px; padding-bottom:20px; margin-left: 930px;">
                <input type="text" class="form-control border-solid border-gray-400 px-6 py-2.5" style="border-radius:10px;" name="search" placeholder="Search...">
                <button type="submit" id="search" class="bg-blue-600 hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 text-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg" style="width: 70px; height: 38px; border-radius: 7px;">
                    Search
                </button>
            </div>
        </form>
        <table class="w-full p-5 mt-2">
            <thead class="uppercase">
                <tr class="font-bold text-center text-black">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Saran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @if (!empty($data) && $data->count())
                @foreach ($data as $datakritik => $kritiksaran)
                <tr class="text-center text-black">
                    <td>{{$no}}</td>
                    <td>{{$kritiksaran->nama}}</td>
                    <td>{{$kritiksaran->email}}</td>
                    <td>{{$kritiksaran->saran}}</td>
                    <td>
                        <form action="{{route('pesan.destroy', $kritiksaran->id)}}" method="POST">
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