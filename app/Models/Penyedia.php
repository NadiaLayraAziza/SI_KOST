<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Kamar;
use App\Models\Peraturan;

class Penyedia extends Model
{
    use HasFactory;
    protected $table="penyedia"; // Eloquent akan membuat model Barang menyimpan record di tabel barang
    protected $primaryKey = 'id_penyedia'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable. *
     * @var array
     */
    protected $fillable = [
        'id_penyedia',
        'id_user',
        'nama_kost',
        'alamat_kost',
        'foto_kost',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function kamar()
    {
        return $this->hasMany(Kamar::class);
    }

    public function peraturan()
    {
        return $this->hasOne(Peraturan::class);
    }
}
