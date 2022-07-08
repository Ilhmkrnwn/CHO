<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    public function _bayar()
    {
        return $this->belongsToMany(Pembayaran::class, 'pembayaran', 'pembayaran_id');
    }
}
