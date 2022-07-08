<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_barang extends Model
{
    public function _kuota()
    {
        return $this->belongsToMany(Kuota::class, 'kuota', 'id_kuota');
    }
    public function _pulsa()
    {
        return $this->belongsToMany(Pulsa::class, 'pulsa', 'id_pulsa');
    }
    public function _pelanggan()
    {
        return $this->belongsToMany(Pelanggan::class, 'pelanggan', 'id_pelanggan');
    }
}
