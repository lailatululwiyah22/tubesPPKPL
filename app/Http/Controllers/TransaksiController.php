<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Pengguna;
use App\Pemesanan;
use App\Transaksi;
use DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datas = DB::table('transaksi')
            ->join('pemesanan', 'pemesanan.id_pemesanan', '=', 'transaksi.id_pemesanan')
            ->join('pengguna', 'pengguna.id_pengguna', '=', 'transaksi.id_pengguna')
            ->select('pemesanan.*', 'pengguna.*', 'transaksi.*')
            ->get();

             return view('admin/transaksi',compact('datas'));
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
    public function show($id_transaksi)
    {
        $transaksi = Transaksi::all();
        return view('homeuser/showtransaksi',compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_transaksi)
    {
        $hapus = Transaksi::findOrFail($id_transaksi);
        $hapus->delete();
    return redirect()->to('admin/transaksi');
    }
}
