<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuota extends Model
{
    use HasFactory;
    public function kuota()
    {
        return $this->hasMany('App\Models\Kuota');
    }
}
