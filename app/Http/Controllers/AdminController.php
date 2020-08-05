<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = DB::table('admin')->get();

        return view('/admin/adminn', ['adminn'=>$admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/tambahadminn');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('admin')->insert([
            'id_admin' => $request->id_admin,
            'name' => $request->name,
            'username'=>$request->username,
            'password'=>$request->password,
            ]);

        return redirect('/adminn');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_admin)
    {
        $admin = DB::table('admin')->where('id_admin',$id_admin)->get();

        return view('/admin/editadminn',['adminn' => $admin]);
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
        DB::table('admin')->where('id_admin',$request->id_admin)->update([
            'id_admin' => $request->id_admin,
            'name' => $request->name,
            'username'=>$request->username,
            'password'=>$request->password,
        ]);

        return redirect('/adminn');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_admin)
    {
        DB::table('admin')->where('id_admin',$id_admin)->delete();
            
          return redirect('/adminn');  
    }
}
?>