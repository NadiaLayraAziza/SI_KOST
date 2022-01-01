<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    use HasFactory;
    protected $table = "penyewa";
    protected $primaryKey = 'id_penyewa';
    public $timestamps = false;
    protected $fillable = [
        'id_penyewa',
        'users_id',
        'telp_ortu',
        'jangka_waktu',
        'jumlah_waktu',
        'tgl_mulai',
        'kost',
        'id_kmr',
        'harga_sewa'
    ];

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function penyedia()
    {
        return $this->belongsTo(Penyedia::class, 'kost');
    }

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kmr');
    }

}
