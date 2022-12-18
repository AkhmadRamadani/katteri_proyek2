<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'paket';

    protected $fillable = [
        'nama_paket',
        'deskripsi',
        'harga_paket',
        'foto',
    ];

    public function jadwal_makanan()
    {
        return $this->hasMany(JadwalMakananModel::class,'paket_id','id');
    }

    public function subscribe()
    {
        return $this->belongsTo(SubscribeModel::class,'subscribe_id','id');
    }
}

