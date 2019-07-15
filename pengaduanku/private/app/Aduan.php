<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    protected $fillable = ['user_id', 'kategori_id', 'judul', 'isi', 'image','deleted',];

}
