<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_tes',
        'deskripsi',
        'kategori',
        'durasi',
        'status_publikasi',
        'participants_count',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
