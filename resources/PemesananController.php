<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Paket;
use App\Pengguna;
use App\Pemesanan;
use App\Transaksi;
class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datas = DB::table('pemesanan')
            ->join('pengguna', 'pengguna.id_pengguna', '=', 'pemesanan.id_pemesanan')
            ->join('paket', 'paket.id_paket', '=', 'pemesanan.id_pemesanan')
            ->select('pemesanan.*', 'pengguna.*', 'paket.id_paket')
            ->get();

             return view('admin/pemesanan',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pemesanan)
    {
        $data = Pemesanan::all();
        return view('homeuser/tambahpesan',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pemesanan)
    {
        $data = Pemesanan::findOrFail($id_pemesanan);
        return view('admin/editpesan',compact('data')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pemesanan)
    {

         
         $data = \App\Pemesanan::findOrFail($id_pemesanan);
         $data->status = $request->input('status');
        
        $data->save();

        return redirect('admmin/pemesanan')->with('status','Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pemesanan)
    {
        $hapus = Pemesanan::findOrFail($id_pemesanan);
        $hapus->delete();
    return redirect()->to('admin/pemesanan');

    }
}
