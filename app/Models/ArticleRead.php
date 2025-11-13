<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleRead extends Model
{
  use HasFactory;

  public $timestamps = false;

  protected $fillable = ['user_id', 'article_id', 'read_at'];

  protected $casts = [
      'read_at' => 'datetime', 
  ];

  public function article()
  {
      // return $this->belongsTo(Article::class);
      return $this->belongsTo(Article::class, 'article_id');
  }

  public function user()
  {
      return $this->belongsTo(User::class, 'user_id');
  }
}
