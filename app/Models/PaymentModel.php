<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'payment';

    /// have one to one with subscribe
    public function subscribe()
    {
        return $this->belongsTo(SubscribeModel::class, 'subcription_id', 'id')->withDefault();
    }

    /// have one to many with user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id')->withDefault();
    }

}
