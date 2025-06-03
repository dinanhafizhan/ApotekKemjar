<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'obats'; // nama tabel di database

    protected $fillable = [
        'nama',
        'jenis',
        'harga',
    ];

    // Relasi ke Transaksi (satu obat bisa ada di banyak transaksi)
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'id_obat');
    }
}
