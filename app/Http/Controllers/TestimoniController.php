<?php

namespace App\Http\Controllers;

use App\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view ('/admin/testimoni',compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('/admin/tambahtestimoni');
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

        $testimoni = new \App\Testimoni();
        $testimoni->id_testimoni = $request->input('id_testimoni');
        $testimoni->keterangan = $request->input('keterangan');
        $testimoni->nama = $request->input('nama');
        $testimoni->pekerjaan = $request->input('pekerjaan');
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $testimoni->file = $newName;
        $testimoni->save();

    return redirect('/testimoni')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $testimoni = Testimoni::all();
        return view ('showtestimoni',compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id_testimoni)
    {
        $testimoni = Testimoni::findOrFail($id_testimoni);
        return view('/admin/edittestimoni',compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_testimoni)
    {

                $testimoni = \App\testimoni::findOrFail($id_testimoni);
        
       
        $testimoni->keterangan = $request->input('keterangan');
         $testimoni->nama = $request->input('nama');
        $testimoni->pekerjaan = $request->input('pekerjaan');

        if (empty($request->file('file')))
        {
            $testimoni->file = $testimoni->file;
        }
        else{
            unlink('uploads/file/'.$testimoni->file); //menghapus file lama
            $file = $request->file('file');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$newName);
            $testimoni->file = $newName;
        }
        $testimoni->update();
        return redirect()->to('/testimoni')->with('status','Data Berhasil Dirubah');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_testimoni)
    {
        DB::table('testimoni')->where('id_testimoni',$id_testimoni)->delete();
        return redirect('/testimoni');
    }
}
