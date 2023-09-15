<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }

     public static function findarrayGrafikKategori()
    {
        $listKategori = Kategori::all();

        $arrayData = [];



        foreach ($listKategori as $key => $value) {
            $arrayData = [
                'name' => $value->id,
                'y' => $value->nama,
            ];
        }

        return $arrayData;
    }
}
