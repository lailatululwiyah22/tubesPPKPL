<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Paket;
class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $paket = DB::table ('paket') -> get(); 
    return view('/admin/paket', ['paket' => $paket]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/tambahpaket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'file' => 'required|image:jpeg,png,jpg|max:2048',
                   
        ]);

        $paket = new \App\Paket();
        $paket->id_paket = $request->input('id_paket');
        $paket->name = $request->input('name');
        $paket->durasi = $request->input('durasi');
        $paket->harga = $request->input('harga');
        $paket->jenis_paket = $request->input('jenis_paket');
        $paket->fasilitas = $request->input('fasilitas');
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $paket->file = $newName;
        $paket->save();

    return redirect('/paket')->with('status','Data Berhasil Ditambahkan');
       
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_paket)
    {
        $paket = Paket::all();
        return view('/showpaket',compact('paket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_paket)
    {
        $paket = Paket::findOrFail($id_paket);
        return view('/admin/editpaket',compact('paket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_paket)

    {

        $paket = \App\Paket::findOrFail($id_paket);
        
        $paket->name = $request->input('name');
        $paket->durasi = $request->input('durasi');
        $paket->harga = $request->input('harga');
        $paket->jenis_paket = $request->input('jenis_paket');
        $paket->fasilitas = $request->input('fasilitas');
        if (empty($request->file('file')))
        {
            $paket->file = $paket->file;
        }
        else{
            unlink('uploads/file/'.$paket->file); //menghapus file lama
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$newName);
            $paket->file = $newName;
        }
        $paket->update();
        return redirect()->to('/paket')->with('status','Data Berhasil Dirubah');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_paket)
    {
        DB::table('paket')->where('id_paket',$id_paket)->delete();
        return redirect('/paket');
    }
}
