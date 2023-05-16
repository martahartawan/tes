<x-app-layout>
    <div class="spk-body">
        <div class="spk-box">
            <div class="font-bold" style="font-size:28px;">
                {{$title}}
            </div>
            <form action="{{route('spk.hasil1')}}" method="POST">
                @csrf
                <table>
                    <tbody>
                        @if (!empty($soal1) && $soal1->count())
                        @foreach ($soal1 as $datasoal => $soal)
                        <tr>
                            <td>{{$soal->no_soal}}.</td>
                            <td>{{$soal->soal}}</td>
                        </tr>
                        <tr>
                            <td>
                            <td><input type="radio" value="1" name="answer[{{$soal->no_soal}}]" id="answer_{{$soal->no_soal}}" style="margin-right:5px;">A. {{$soal->a}}</td>
                        </tr>
                        <tr>
                            <td>
                            <td><input type="radio" value="2" name="answer[{{$soal->no_soal}}]" id="answer_{{$soal->no_soal}}" style="margin-right:5px;">B. {{$soal->b}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="radio" value="3" name="answer[{{$soal->no_soal}}]" id="answer_{{$soal->no_soal}}" style="margin-right:5px;">C. {{$soal->c}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="radio" value="4" name="answer[{{$soal->no_soal}}]" id="answer_{{$soal->no_soal}}" style="margin-right:5px;">D. {{$soal->d}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="radio" value="5" name="answer[{{$soal->no_soal}}]" id="answer_{{$soal->no_soal}}" style="margin-right:5px;">E. {{$soal->e}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td>
                            <td><button class="bg-sky-400 hover:bg-sky-700 py-2 px-4 rounded-lg text-white" style="margin-top:15px;" onclick="return confirm('Dimohonkan melakukan pengecekan sebelum lanjut, jika sudah silahkan lanjut!')">Selesai</button></td>
                        </tr>
                        @else
                        <tr>
                            <td>
                                <p>Soal Tidak Ada!</p>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</x-app-layout>