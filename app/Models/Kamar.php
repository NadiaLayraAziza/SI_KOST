<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penyedia;

class Kamar extends Model
{
    use HasFactory;
    protected $table="kamars";
    protected $primaryKey = 'id_kamar';

    protected $fillable = [
        'id_kamar',
        'tipe_kamar',
        'Harga_Tahunan',
        'Harga_bulanan',
        'Harga_mingguan',
        'Harga_harian',
        'Foto_Kamar',
        'id_penyedia',
        'jumlah',
    ];

    public function penyedia()
    {
        return $this->belongsTo(Penyedia::class, 'id_penyedia');
    }
}
