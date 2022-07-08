<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    public function _minat()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan');
    }
    // public function _pulsa()
    // {
    //     return $this->belongsToMany(Pulsa::class, 'pulsa', 'kode', 'jumlah_pulsa', 'id_kuota', 'harga');
    // }
}
