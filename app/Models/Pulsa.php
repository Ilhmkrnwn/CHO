<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pulsa extends Model
{
    public function pulsa()
    {
        return $this->hasMany('App\Models\Pulsa');
    }
}
