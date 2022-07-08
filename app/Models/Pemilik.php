<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    public function _admin()
    {
        return $this->belongsToMany(Pesanan::class, 'pulsa', 'kode', 'jumlah_pulsa', 'id_kuota', 'harga');
    }
}
