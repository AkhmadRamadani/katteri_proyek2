<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscribeModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'subscribe';
    protected $fillable = [
        'user_id',
        'paket_id',
    ];

    /// have one to many with paket
    public function paket()
    {
        return $this->belongsTo(PaketModel::class, 'paket_id', 'id')->withDefault();
    }

    /// have one to many with detail_pembeli
    public function detail_pembeli()
    {
        return $this->hasOne(DetailPembeliModel::class, 'subscribe_id', 'id');
    }

    /// have relation with user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id')->withDefault();
    }

    /// have relation with payment
    public function payment()
    {
        return $this->hasOne(PaymentModel::class, 'subcription_id', 'id')->withDefault();
    }

    
}
