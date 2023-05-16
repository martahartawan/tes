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
        <form action="{{route('daftar-soal.update', $datasoal1->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="px-4 py-5 space-y-4 sm:p-6">
                <label class="block text-sm text-lg">No Soal</label>
                <div>
                    <input type="text" value="{{$datasoal1->no_soal}}" class="flex-1 block w-full form" name="no_soal" id="no_soal" placeholder="Hanya Angka!">
                </div>
                <label class="block text-sm text-lg">Soal</label>
                <div>
                    <textarea class="flex-1 block w-full form" name="soal" id="soal">{{$datasoal1->soal}}</textarea>
                </div>
                <label class="block text-sm text-lg">Option A</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" value="{{$datasoal1->a}}" name="a" id="a" placeholder="Masukan Option A">
                </div>
                <label class="block text-sm text-lg">Option B</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" value="{{$datasoal1->b}}" name="b" id="b" placeholder="Masukan Option B">
                </div>
                <label class="block text-sm text-lg">Option C</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" value="{{$datasoal1->c}}" name="c" id="c" placeholder="Masukan Option C">
                </div>
                <label class="block text-sm text-lg">Option D</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" value="{{$datasoal1->d}}" name="d" id="d" placeholder="Masukan Option D">
                </div>
                <label class="block text-sm text-lg">Option E</label>
                <div>
                    <input type="text" class="flex-1 block w-full form" value="{{$datasoal1->e}}" name="e" id="e" placeholder="Masukan Option E">
                </div>
                <button type="submit" class="inline-flex justify-center bg-green-500 hover:bg-green-700 text-white py-2 px-5" style="border-radius:18px;">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>