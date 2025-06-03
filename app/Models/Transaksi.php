<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis'; // Sesuaikan dengan nama tabel

    protected $fillable = [
        'id_user',
        'id_obat',
        'jumlah',
        'total_harga',
    ];

    // Relasi ke User (transaksi milik seorang user)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi ke Obat (transaksi berhubungan dengan satu obat)
    public function obat()
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }
}
