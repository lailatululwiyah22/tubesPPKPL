<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class LoginUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if(!Session::get('loginuser')){
            return redirect('loginuser')->with('Alert','You must Login');
        } else {
            return view('/home_user');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginuser()
    {
        return view ('/loginuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginPost(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data=pengguna::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id_pengguna',$data->id_pengguna);
                Session::put('email',$data->email);
                Session::put('username',$data->username);
                Session::put('password',$data->password);

                Session::put('alamat',$data->alamat);
                //Session::put('id_paket',$data->id_paket);
                Session::put('loginuser',TRUE);
                return redirect('home_user');
            }
            else {
                return redirect('loginuser')->with('alert', 'login yang bener woy !');
            }
        } else {
            return redirect('loginuser')->with('alert', ' Incorrect !');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('loginuser')->with ('alert', 'Your Was Logout');
    }

    public function register(Request $request){
       
        $email= $request->input('email');
        $username= $request->input('username');
        $password= $request->input('password');
        $alamat= $request->input('alamat');
       
        return view('register');
    }
    public function registerPost(Request $request){
        $this->validate($request, [
            
            'email' => 'required|min:4|email|unique:pengguna',
            'username' => 'required|min:4',
            'password' => 'required|min:4',

            'alamat'=> 'required',
           
        ]);

        $data =  new pengguna();
        
        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);

        $data->alamat = $request->alamat;
       
        $data->save();
        return redirect('loginuser')->with('alert-success','Kamu berhasil Register');
    }
}
