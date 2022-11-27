<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMakananModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'jadwal_makanan';

    /// have one to many with menu
    public function menu()
    {
        return $this->belongsTo(MenuModel::class, 'menu_id', 'id');
    }

    /// have relationship with hari
    public function hari()
    {
        return $this->belongsTo(HariModel::class, 'hari_id', 'id');
    }
}
