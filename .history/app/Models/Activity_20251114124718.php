<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public $timestamps = false; // karena kita hanya pakai created_at

    protected $fillable = [
        'user_id',
        'type',
        'title',
        'created_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
