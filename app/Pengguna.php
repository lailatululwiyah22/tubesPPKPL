<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table="pengguna";
protected $primaryKey="id_pengguna";
protected $fillable=['id_pengguna','email','username','password','alamat'];


public function Pemesanan(){
    return $this->belongsTo('App\Pemesanan', 'id_pemesanan');
}
public function Paket(){
    return $this->belongsTo('App\Paket', 'id_paket');
}

}
