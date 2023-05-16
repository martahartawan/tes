<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Jawaban_soal1 extends Model
{
    use HasFactory;
    use Searchable;
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id', 'skor'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('skor')->withTimestamps();
    }

    public function toSearchableArray()
    {
        return [
            'user_id' => $this->user_id,
            'skor' => $this->skor
        ];
    }
}
