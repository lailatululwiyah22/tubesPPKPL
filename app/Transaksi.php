<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table      = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable   = [
         'file', 'id_pemesanan','id_paket','id_pengguna'
    ];




     public function pengguna(){
        return $this->belongsTo('App\Pengguna', 'id_pengguna');
    }
     public function pemesanan(){
        return $this->belongsTo('App\Pemesanan', 'id_pemesanan');
    }
     
}
