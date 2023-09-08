<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;



class Buku extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'nama');
    }
}
