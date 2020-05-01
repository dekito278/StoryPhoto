<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['judul', 'deskripsi', 'no_pengguna'];

    public function author()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function post_images()
    {
        return $this->hasMany('App\Models\PostImage');
    }
}
