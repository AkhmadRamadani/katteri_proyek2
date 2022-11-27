<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'menu';

    /// have one to many with jadwal_makanan
    public function jadwal_makanan()
    {
        return $this->hasMany(JadwalMakananModel::class, 'menu_id', 'id');
    }
}
