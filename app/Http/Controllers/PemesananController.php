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
        ->join('pengguna', 'pengguna.id_pengguna', '=', 'pemesanan.id_pengguna')
        ->join('paket', 'paket.id_paket', '=', 'pemesanan.id_paket')
        ->select('pemesanan.*', 'pengguna.*', 'paket.id_paket', 'paket.name')
        ->get();

         return view('/admin/pemesanan',compact('datas'));
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
        $pemesanan = Pemesanan::all();
        return view('homeuser/showpesan',compact('pemesanan'));

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pemesanan)
    {
        $data=DB::table('pemesanan')->where('id_pemesanan',$id_pemesanan)->get();
        return view('/admin/editpesan',compact('data')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('pemesanan')->where('id_pemesanan',$request->id_pemesanan)->update([

            'jml_pesan' => $request ->jml_pesan,
            'id_paket' => $request ->id_paket,
            'id_pengguna' => $request ->id_pengguna,
            'no_telp' => $request ->no_telp,
            'status' => $request ->status,


        ]);
         return redirect('/admin/pemesanan'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pemesanan)
    {
        dump(DB::table('pemesanan')->where('id_pemesanan',$id_pemesanan)->delete());
            
        //return redirect('/pemesanan');
    }
}
