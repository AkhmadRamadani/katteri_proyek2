<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembeliModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'detail_pembeli';
    protected $fillable = [
        'subscribe_id',
        'nama',
        'email',
        'no_telp_1',
        'no_telp_2',
        'kode_pos',
        'alamat',
    ];
    public function subscribe()
    {
        return $this->belongsTo(SubscribeModel::class,'subscribe_id','id');
    }
}
