<x-admin-layout>
    <div style="font-size:30px;">
        {{$title}}
        <div class="hr bg-sky-400"></div>
    </div>
    <div class="box1" style="margin-top: 20px;">
        <!-- {{-- menampilkan error validasi --}} -->
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('daftar-soal2.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="px-4 py-5 space-y-4 sm:p-6">
                <label class="block text-sm text-lg">No Soal</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" name="no_soal" id="no_soal" placeholder="Hanya Angka!" value="{{old('no_soal')}}">
                </div>
                <label class="block text-sm text-lg">Kategori Soal</label>
                <select class="flex-1 block w-full form" name="kategori" id="kategori">
                    <option value="">Silahkan Pilih Kategori Soal</option>
                    <option value="Kemampuan Verbal">Kemampuan Verbal</option>
                    <option value="Kemampuan Numerik">Kemampuan Numerik</option>
                </select>
                <label class="block text-sm text-lg">Soal</label>
                <div>
                    <textarea class="flex-1 block w-full form" name="soal" id="soal">{{old('soal')}}</textarea>
                </div>
                <label class="block text-sm text-lg">Option A</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" name="a" id="a" placeholder="Masukan Option A" value="{{old('a')}}">
                </div>
                <label class="block text-sm text-lg">Option B</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" name="b" id="b" placeholder="Masukan Option B" value="{{old('b')}}">
                </div>
                <label class="block text-sm text-lg">Option C</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" name="c" id="c" placeholder="Masukan Option C" value="{{old('c')}}">
                </div>
                <label class="block text-sm text-lg">Option D</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" name="d" id="d" placeholder="Masukan Option D" value="{{old('d')}}">
                </div>
                <label class="block text-sm text-lg">Option E</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" name="e" id="e" placeholder="Masukan Option E" value="{{old('e')}}">
                </div>
                <label class="block text-sm text-lg">Kunci Jawaban</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" name="kunci" id="kunci" placeholder="Masukan Kunci Jawaban!" value="{{old('kunci')}}">
                </div>
                <label class="block text-sm text-lg">Gambar Soal</label>
                <div>
                    <input id="img" name="img" type="file">
                    <p>PNG dan JPG Maximal 2MB</p>
                </div>
                <button type="submit" class="inline-flex justify-center bg-green-500 hover:bg-green-700 text-white py-2 px-5" style="border-radius:18px;">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>