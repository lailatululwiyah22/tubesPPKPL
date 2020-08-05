<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Pengguna;
use App\Pemesanan;
use Illuminate\Database\Eloquent\Collection;

use DB;


class PemesananUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('pemesanan')
            ->join('pengguna', 'pengguna.id_pengguna', '=', 'pemesanan.id_pengguna')
            ->join('paket', 'paket.id_paket', '=', 'pemesanan.id_paket')
            ->select('pemesanan.*', 'pengguna.*', 'paket.id_paket', 'paket.name')
            ->where('pengguna.id_pengguna', session('id_pengguna'))
            ->get();

     $amount = Pemesanan::select(DB::raw('sum(jml_pesan * harga) as total'))->where('id_pengguna', session('id_pengguna'))->get();
             return view('/homeuser/pemesanan',compact('datas','amount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = Pengguna::select('id_pengguna')->where('id_pengguna', session('id_pengguna'))->get();
        $paket= Paket::all();

        return view('/homeuser/tambahpesan',compact('data', 'paket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new \App\Pemesanan();
     
        $data->jml_pesan = $request->input('jml_pesan');
        $data->id_paket = $request->input('id_paket');
        $data->id_pengguna= $request->input('id_pengguna');
        $data->no_telp = $request->input('no_telp');
        $data->harga = $request->input('harga');
        $data->status = $request->input('status');
        $data->save();
       return redirect('/homeuser/pemesanan')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $paket = Paket::all();
        return view('homeuser/showpesan',compact('paket'));
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

         $data->save();
        
        return redirect('admmin/pemesanan')->with('status','Data Berhasil Dirubah');
    }

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
