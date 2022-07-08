<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PemilikController extends Controller
{
    public function pemilik()
    {
        $pemiliks = DB::table('pemiliks')->get();
        return view('setting', ['pemiliks' => $pemiliks]);
    }
    public function addData(Request $request)
    {
        DB::table('pemiliks')->insert([
            'namapemilik' => $request->namapemilik,
            'namacounter' => $request->namacon,
            'email' => $request->email,
            'telp' => $request->telf,
            'alamat' => $request->alamat,

        ]);
        return redirect('setting')->with('status', 'Data Berhasil Ditambah');
    }
    public function editData($id)
    {
        $userx = DB::table('pemiliks')->where('id', $id)->first();
        return view('bio', compact('userx'));
    }
    public function editProses(Request $request)
    {
        DB::table('pemiliks')->where('id', $request->id)->update(
            [
                'namapemilik' => $request->namapemilik,
                'namacounter' => $request->namacon,
                'email' => $request->email,
                'telp' => $request->telf,
                'alamat' => $request->alamat,
            ]
        );
        return redirect('bio/1')->with('status', 'Data Berhasil DiUpdate');
    }
}
