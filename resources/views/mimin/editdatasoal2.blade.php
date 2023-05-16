<x-admin-layout>
    <div style="font-size:30px;">
        {{$title}}
        <div class="hr bg-sky-400"></div>
    </div>
    <div class="box1" style="margin-top: 20px;">
        <!-- {{-- menampilkan error validasi --}} -->
        @if (count($errors) > 0)
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('daftar-soal2.update', $datasoal2->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="px-4 py-5 space-y-4 sm:p-6">
                <label class="block text-sm text-lg">No Soal</label>
                <div>
                    <input type="text" value="{{$datasoal2->no_soal}}" class="flex-1 block w-full form" name="no_soal" id="no_soal" placeholder="Hanya Angka!">
                </div>
                <label class="block text-sm text-lg">Kategori Soal</label>
                <select class="flex-1 block w-full form" name="kategori" id="kategori">
                    <option value="{{$datasoal2->kategori}}">{{$datasoal2->kategori}}</option>
                    <option value="Kemampuan Verbal">Kemampuan Verbal</option>
                    <option value="Kemampuan Numerik">Kemampuan Numerik</option>
                </select>
                <label class="block text-sm text-lg">Soal</label>
                <div>
                    <textarea class="flex-1 block w-full form" name="soal" id="soal">{{$datasoal2->soal}}</textarea>
                </div>
                <label class="block text-sm text-lg">Option A</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" value="{{$datasoal2->a}}" name="a" id="a" placeholder="Masukan Option A">
                </div>
                <label class="block text-sm text-lg">Option B</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" value="{{$datasoal2->b}}" name="b" id="b" placeholder="Masukan Option B">
                </div>
                <label class="block text-sm text-lg">Option C</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" value="{{$datasoal2->c}}" name="c" id="c" placeholder="Masukan Option C">
                </div>
                <label class="block text-sm text-lg">Option D</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" value="{{$datasoal2->d}}" name="d" id="d" placeholder="Masukan Option D">
                </div>
                <label class="block text-sm text-lg">Option E</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" value="{{$datasoal2->e}}" name="e" id="e" placeholder="Masukan Option E">
                </div>
                <label class="block text-sm text-lg">Kunci Jawaban</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" value="{{$datasoal2->kunci}}" name="kunci" id="kunci" placeholder="Masukan Kunci Jawaban!">
                </div>
                <label class="block text-sm text-lg">Gambar Soal</label>
                <div>
                    <input id="img" name="img" type="file" value="{{asset('storage/' .$datasoal2->img)}}">
                    <img src="{{asset('storage/' .$datasoal2->img)}}">
                    <p>PNG dan JPG Maximal 2MB</p>
                </div>
                <button type="submit" class="inline-flex justify-center bg-green-500 hover:bg-green-700 text-white py-2 px-5" style="border-radius:18px;">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>