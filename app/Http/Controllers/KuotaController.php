<?php

namespace App\Http\Controllers;

use App\Models\Kuota;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KuotaController extends Controller
{
    public function kuo()
    {
        $kuotas = DB::table('kuotas')->get();
        return view('laporan', ['kuotas' => $kuotas]);
    }
}
