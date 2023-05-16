<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Data_soal1 extends Model
{
    use HasFactory;
    use Searchable;
    protected $primaryKey = 'id';
    protected $fillable = [
        'no_soal', 'soal', 'a', 'b', 'c', 'd', 'e'
    ];
    public function toSearchableArray()
    {
        return [
            'no_soal' => $this->no_soal,
            'soal' => $this->soal,
            'a' => $this->a,
            'b' => $this->b,
            'c' => $this->c,
            'd' => $this->d,
            'e' => $this->e,
        ];
    }
}
