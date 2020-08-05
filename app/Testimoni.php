<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table	  ="testimoni";
		protected $primaryKey ="id_testimoni";
		protected $fillable	  =[
			'id_testimoni','file','keterangan','pekerjaan','nama'
		];
		public $timestamps = false;
}


