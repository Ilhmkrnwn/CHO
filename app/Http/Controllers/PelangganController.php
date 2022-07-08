<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PelangganController extends Controller
{
    public function pel()
    {
        $pelanggans = DB::table('pelanggans')->get();
        return view('laporan', ['pelanggans' => $pelanggans]);
    }
    public function addData(Request $request)
    {
        DB::table('pelanggans')->insert([
            'no_hp' => $request->noTujuan,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'tanggal' => Carbon::now(),
            'status' => 'Berhasil'

        ]);
        return redirect('user')->with('status', 'Data Berhasil Ditambah');
    }
    public function editData($id)
    {
        $pelangans = DB::table('pelanggans')->where('id', $id)->first();
        return view('edit', compact('pelangans'));
    }
    public function editProses(Request $request,  $id)
    {
        DB::table('pelanggans')->where('id', $id)->update(
            [
                'no_hp' => $request->noTujuan,
                'jumlah' => $request->jumlah,
                'harga' => $request->harga,
                'tanggal' => Carbon::now(),
                'status' => 'Berhasil'
            ]
        );
        return redirect('laporan')->with('status', 'Data Berhasil DiUpdate');
    }
    public function delete($id)
    {
        DB::table('pelanggans')->where('id', $id)->delete();
        return redirect('laporan')->with('status', 'Data Berhasil DiUpdate');
    }
}
