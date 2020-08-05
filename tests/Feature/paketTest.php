<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Paket;
use File;



use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\http\UploadedFile;

class paketTest extends TestCase
{
    /**
     * A basic feature test example.

     *
     * @return void
     */

    use RefreshDatabase;

    public function testAddPaket()
    {
  
        $path = storage_path('testing\pakethaji.jpg');
        $originName = "pakethaji.jpg";
        $name = 'img/jpg';
        $file = new UploadedFile($path, $originName, 0 , null, true);
        $nama_file = time()."_".$file->getClientOriginalName();

        $data  = new Paket();
        
        $data->name = "Haji Ekslusif";
        $data->durasi = "12 Hari";
        $data->harga = "300000000";
        $data->jenis_paket = " Haji";
        $data->fasilitas = "Travel Ekslusif";
        $data->file = $nama_file;
        $data->save();

        $toCopy = public_path('uploads/file'.$nama_file);
        File::copy($path, $toCopy);

        $this->assertDatabaseHas('paket' , [
            'id_paket' => $data->id_paket,
            'name' => $data->name,
            'durasi' => $data->durasi,
            'harga' => $data->harga,
            'jenis_paket' => $data->jenis_paket,
            'fasilitas' => $data->fasilitas,
            'file' => $data->file,

        ]);

            
        //$response = $this->get('/');

        //$response->assertStatus(200);
    }
}
