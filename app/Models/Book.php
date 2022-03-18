<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'penulis', 'sinopsis', 'penerbit', 'banyak_halaman', 'kelebihan', 'kekurangan'];

    // protected $fillable = ['penulis'];
    // protected $fillable = ['sinopsis'];
    // protected $fillable = ['penerbit'];
    // protected $fillable = ['banyak_halaman'];
    // protected $fillable = ['kelebihan'];
    // protected $fillable = ['kekurangan'];
}
