<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    protected $table = 'penelitian';
    protected $fillable = ['judul', 'gambar', 'video', 'status', 'deskripsi'];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s',
    ];
    
    public function getGambar(){
        if(!$this->gambar){
            return asset('images/default-image.png');
        }

        return asset('images/'.$this->gambar);
    }
}
