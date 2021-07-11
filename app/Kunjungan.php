<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    protected $table = 'kunjungan';
    protected $fillable = ['judul', 'gambar', 'desc'];

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
