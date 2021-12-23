<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Report extends Model
{
    use HasFactory;

    protected $table = "report";
    protected $primaryKey = 'id_report';
    public $timestamps = false;
    protected $fillable = [
        'id_report',
        'users_id',
        'tanggal_report',
        'keluhan',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
