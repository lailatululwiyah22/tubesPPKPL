<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Pengguna;
use App\Pemesanan;
use App\Transaksi;
use DB;


class TransaksiUserController extends Controller
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
            ->where('pengguna.id_pengguna', session('id_pengguna'))
            ->get();

             return view('/homeuser/transaksi',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Pengguna::select('id_pengguna')->where('id_pengguna', session('id_pengguna'))->get();
        $pms = Pemesanan::select('id_pemesanan','id_paket')->where('id_pengguna', session('id_pengguna'))->get();
        return view('/homeuser/tambahtf',compact('data', 'pms'));
    }


    public function update(Request $request)
    {
        
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            
        ]);    

          $data = new \App\Transaksi();
        $data->id_pengguna = $request->input('id_pengguna');
        $data->id_pemesanan = $request->input('id_pemesanan');
        $data->id_paket = $request->input('id_paket');
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file/',$newName);
        $data->file = $newName;
        $data->save();

    return redirect('/homeuser/transaksi')->with('status','Data Berhasil Ditambahkan');

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
    public function edit($id)
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
