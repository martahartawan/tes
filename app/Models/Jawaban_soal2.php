<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Jawaban_soal2 extends Model
{
    use HasFactory;
    use Searchable;
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id', 'verbal', 'numerik'
    ];

    public function toSearchableArray()
    {
        return [
            'user_id' => $this->user_id,
            'verbal' => $this->verbal,
            'numerik' => $this->numerik
        ];
    }
}
