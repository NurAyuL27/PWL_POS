<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'm_kategori'; // Ganti dengan nama tabel yang benar
    protected $primaryKey = 'kategori_id';
    public $timestamps = false; // Atur sesuai kebutuhan
}
