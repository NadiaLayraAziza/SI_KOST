<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi";
    public $timestamps = false;
    protected $fillable = [
        'id_transaksi',
        'users_id',
        'tanggal_transaksi',
        'jumlah_transaksi',
        'bukti_transaksi',
        'status transaksi'
    ];

    public function anggota()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
