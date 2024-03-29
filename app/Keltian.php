<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keltian extends Model
{
    protected $table = 'keltian';
    protected $fillable = ['nama', 'avatar', 'agama', 'jenis_kelamin', 'email', 'password', 'alamat', 'user_id'];

    public function getAvatar(){
        if(!$this->avatar){
            return asset('images/default-avatar.png');
        }

        return asset('images/'.$this->avatar);
    }
}
