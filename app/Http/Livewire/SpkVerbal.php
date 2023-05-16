<?php

namespace App\Http\Livewire;

use App\Models\Data_soal2;
use App\Models\Jawaban_soal2;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class SpkVerbal extends Component
{
    use WithPagination;
    public $kunci;
    public $select = [];

    public function render()
    {
        $data = Data_soal2::where('kategori', '=', 'Kemampuan Verbal')->paginate(10);
        return view('livewire.spk-verbal', ['data' => $data]);
    }

    public function jawabVerbal()
    {
        $user_id = Auth::id();
        $nilai = 0;
        foreach ($this->select as $key => $value) {
            $rightAnswer = Data_soal2::findOrFail($key)->kunci;
            $userAnswer = substr($value, strpos($value, '-'));
            if ($rightAnswer == $userAnswer) {
                $nilai = $nilai + 1;
            }
        }
        $cek_user = Jawaban_soal2::where('user_id', $user_id)->count();
        if ($cek_user == 0) {
            Jawaban_soal2::create([
                'user_id' => $user_id,
                'verbal' => $nilai
            ]);
        } else {
            Jawaban_soal2::where('user_id', $user_id)->update([
                'user_id' => $user_id,
                'verbal' => $nilai
            ]);
        }
        return redirect()->route('spk.numerik', [$nilai]);
    }
}
