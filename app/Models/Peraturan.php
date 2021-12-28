<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    use HasFactory;
    protected $table="peraturan_kosts";
    protected $primaryKey = 'id_peraturan';

    protected $fillable = [
        'id_peraturan',
        'peraturan',
        'id_penyedia',
    ];

    public function penyedia()
    {
        return $this->belongsTo(Penyedia::class, 'id_penyedia');
    }
}
