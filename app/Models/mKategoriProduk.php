<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mKategoriProduk extends Model
{
    use HasFactory;
    protected $table = 'tb_kategori_produk';
    protected $guarded = [];
}
