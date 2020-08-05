<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Muthowwif;
class MuthowwifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muthowwif = Muthowwif::all();
        return view ('/admin/muthowwif',compact('muthowwif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/tambahmuthowwif');
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

        $muthowwif = new \App\Muthowwif();
        $muthowwif->id_muthowwif = $request->input('id_muthowwif');
        $muthowwif->nama_muthowwif = $request->input('nama_muthowwif');
        $muthowwif->umur = $request->input('umur');
        $muthowwif->alamat = $request->input('alamat');
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $muthowwif->file = $newName;
        $muthowwif->save();

    return redirect('/muthowwif')->with('status','Data Berhasil Ditambahkan');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_muthowwif)
    {
        $muthowwif = Muthowwif::all();
        return view('/showmuthowwif',compact('muthowwif'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_muthowwif)

    {
       //$muthowwif = DB::table('muthowwif')->where('id_muthowwif',$id_muthowwif)->get();

        //return view('/admin/editmuthowwif',['muthowwif' => $muthowwif]);

        $muthowwif = Muthowwif::findOrFail($id_muthowwif);
        return view('/admin/editmuthowwif',compact('muthowwif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_muthowwif)
    {

        $muthowwif = \App\Muthowwif::findOrFail($id_muthowwif);
        
        $muthowwif->nama_muthowwif = $request->input('nama_muthowwif');
        $muthowwif->umur = $request->input('umur');
        $muthowwif->alamat = $request->input('alamat');
        if (empty($request->file('file')))
        {
            $muthowwif->file = $muthowwif->file;
        }
        else{
            unlink('uploads/file/'.$muthowwif->file); //menghapus file lama
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$newName);
            $muthowwif->file = $newName;
        }
        $muthowwif->save();
        return redirect('/muthowwif')->with('status','Data Berhasil Dirubah');  
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_muthowwif)
    {
        DB::table('muthowwif')->where('id_muthowwif',$id_muthowwif)->delete();
        return redirect('/muthowwif');
    }
}
