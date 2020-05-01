<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    protected $fillable = ['no_pameran', 'tempat_foto', 'deskripsi_foto'];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
