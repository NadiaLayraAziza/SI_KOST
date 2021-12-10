<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    use HasFactory;
    protected $table = "penyewa";
    public $timestamps = false;
    protected $fillable = [
        'id_penyewa',
        'users_id',
        'telp_ortu',
        'jangka_waktu',
        'jumlah_waktu',
        'tgl_mulai',
        'kost',
        'id_kamar',
        'harga_sewa'
    ];

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class);
    }

}
