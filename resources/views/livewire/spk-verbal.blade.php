    <table>
        <tbody>
            @if (!empty($data) && $data->count())
            @foreach ($data as $soalverbal => $soal)
            <tr>
                <td>{{$soal->no_soal}}.</td>
                <td>{{$soal->soal}}</td>
            </tr>

            <tr>
                <td>
                <td><input type="radio" class="{{in_array($soal->a, $select)}}" value="{{$soal->a}}" name="verbal[{{$soal->no_soal}}]" wire:model="select.{{$soal->no_soal}}" style="margin-right:5px;">A. {{$soal->a}}</td>
            </tr>
            <tr>
                <td>
                <td><input type="radio" class="{{in_array($soal->b, $select)}}" value="{{$soal->b}}" name="verbal[{{$soal->no_soal}}]" wire:model="select.{{$soal->no_soal}}" style="margin-right:5px;">B. {{$soal->b}}</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="radio" class="{{in_array($soal->c, $select)}}" value="{{$soal->c}}" name="verbal[{{$soal->no_soal}}]" wire:model="select.{{$soal->no_soal}}" style="margin-right:5px;">C. {{$soal->c}}</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="radio" class="{{in_array($soal->d, $select)}}" value="{{$soal->d}}" name="verbal[{{$soal->no_soal}}]" wire:model="select.{{$soal->no_soal}}" style="margin-right:5px;">D. {{$soal->d}}</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="radio" class="{{in_array($soal->e, $select)}}" value="{{$soal->e}}" name="verbal[{{$soal->no_soal}}]" wire:model="select.{{$soal->no_soal}}" style="margin-right:5px;">E. {{$soal->e}}</td>
            </tr>
            @endforeach
            <tr>
                <td></td>
                <td>
                    <div style="margin-top:15px;" onclick="return confirm('Dimohonkan melakukan pengecekan agar tidak ada terkosong, jika sudah silahkan lanjut!')">{!! $data->links() !!}</div>
                </td>
            </tr>
            @if ($data->currentPage() == $data->lastPage())
            <tr>
                <td></td>
                <td><button wire:click="jawabVerbal" class="bg-sky-400 hover:bg-sky-700 py-2 px-4 rounded-lg text-white" onclick="return confirm('Dimohonkan melakukan pengecekan sebelum lanjut, jika sudah silahkan lanjut!')">Selesai</button></td>
            </tr>
            @endif
            @else
            <tr>
                <td>
                    <p>Soal Tidak Ada!</p>
                </td>
            </tr>
            @endif

        </tbody>
    </table>