<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manasik;
use App\Muthowwif;
use DB;

class ManasikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manasik = DB::table('manasik')->join('muthowwif','manasik.id_muthowwif','=','muthowwif.id_muthowwif')->get(); // get()= select * from manasik
        return view ('/admin/manasik',compact('manasik')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manasik= Manasik::select('id_manasik', 'nama_manasik','tanggal','tempat','waktu')->where('id_manasik');
        $muthowwif = Muthowwif::select('id_muthowwif','nama_muthowwif','umur','alamat')->get();
        return view('/admin/tambahmanasik',compact('manasik','muthowwif'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         DB::table('manasik')->insert([
            'id_manasik' => $request->id_manasik,
            'nama_manasik' => $request->nama_manasik,
            'id_muthowwif'=>$request->id_muthowwif,
            'tanggal'=>$request->tanggal,
            'tempat'=>$request->tempat,
            'waktu'=>$request->waktu,
            ]);
        // alihkan halaman ke halaman muthowwif
        return redirect('/manasik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_manasik)
    {
        $manasik = Manasik::all();
        return view('/homeuser/showmanasik/{id}',compact('manasik')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_manasik)
    {
        $manasik = Manasik::findOrFail($id_manasik);
        $muthowwif= Muthowwif::all();
        //$muthowwif = Muthowwif::pluck('id_muthowwif','nama_muthowwif','umur','alamat');
        return view('/admin/editmanasik',compact('manasik','muthowwif'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_manasik)
    {
        $manasik = \App\Manasik::findOrFail($id_manasik);
        
        $manasik->nama_manasik = $request->input('nama_manasik');
        $manasik->id_muthowwif = $request->input('id_muthowwif');
        $manasik->tanggal = $request->input('tanggal');
        $manasik->tempat = $request->input('tempat');
        $manasik->waktu = $request->input('waktu');

        $manasik->update();
        return redirect()->to('/manasik')->with('status','Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_manasik)
    {
        $manasik = Manasik::findOrFail($id_manasik);
        $manasik->delete();
            
        return redirect('/manasik');    
    }
}
