<x-admin-layout>
    <div style="font-size:30px;">
        {{$title}}
        <div class="hr bg-sky-400"></div>
    </div>
    <div class="box1" style="margin-top: 20px;">
        @if (count($errors) > 0)
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('daftar-soal.store')}}" method="POST">
            @csrf
            <div class="px-4 py-5 space-y-4 sm:p-6">
                <label class="block text-sm text-lg">No Soal</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" name="no_soal" id="no_soal" placeholder="Hanya Angka!" value="{{old('no_soal')}}">
                </div>
                <label class="block text-sm text-lg">Soal</label>
                <div>
                    <textarea class="flex-1 block w-full form" name="soal" id="soal"></textarea>
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
                <button type="submit" class="inline-flex justify-center bg-green-500 hover:bg-green-700 text-white py-2 px-5" style="border-radius:18px;">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>