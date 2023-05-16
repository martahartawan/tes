<?php

namespace App\Http\Livewire;

use App\Models\Data_soal2;
use App\Models\Jawaban_soal2;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class SpkNumerik extends Component
{
    use WithPagination;
    public $kunci;
    public $numerik = [];

    public function render()
    {
        $data = Data_soal2::where('kategori', '=', 'Kemampuan Numerik')->paginate(10);
        return view('livewire.spk-numerik',  ['data' => $data]);
    }

    public function jawabNumerik()
    {
        $user_id = Auth::id();
        $nilai = 0;
        foreach ($this->numerik as $key => $value) {
            $rightAnswer = Data_soal2::find($key)->kunci ?? 'None';
            $userAnswer = substr($value, strpos($value, '-'));
            if ($rightAnswer == $userAnswer) {
                $nilai = $nilai + 1;
            }
        }
        $cek_user = Jawaban_soal2::where('user_id', $user_id)->count();
        if ($cek_user == 0) {
            return redirect()->route('spk.verbal');
        } else {
            Jawaban_soal2::where('user_id', $user_id)->update([
                'user_id' => $user_id,
                'numerik' => $nilai
            ]);
        }

        return redirect()->route('spk.result');
    }
}
