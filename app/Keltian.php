<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keltian extends Model
{
    protected $table = 'keltian';
    protected $fillable = ['nama', 'email', 'agama', 'jenis_kelamin'];
}
