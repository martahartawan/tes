<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class KritikSaran extends Model
{
    use HasFactory, Searchable;
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id', 'nama', 'email', 'saran', 'remember_token'
    ];

    public function toSearchableArray()
    {
        return [
            'nama' => $this->nama
        ];
    }
}
