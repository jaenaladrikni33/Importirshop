<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'kategori_id', 'merk', 'harga_jual', 'harga_beli', 'stok'];

    public function Kategori()

    {
        return $this->belongsTo('App\Models\Kategori', 'kategori_id');
    }
}
