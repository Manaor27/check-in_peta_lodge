<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkin;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
    	return view('user.index');
    }

    public function upload(Request $request)
    {
	    $folderPath = public_path('upload/');
	    $image_parts = explode(";base64,", $request->signed);
	    $image_type_aux = explode("image/", $image_parts[0]);
	    $image_type = $image_type_aux[1];
	    $image_base64 = base64_decode($image_parts[1]);
	    $file = $folderPath . $request->nama_belakang . '.'.$image_type;
        $filename = $request->nama_belakang.'.'.$image_type;
	    
        $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'tgl_lahir' => 'required',
            'domisili' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'sosial_media' => 'required',
            'trip' => 'required',
            'signed' => 'required',
        ]);
        file_put_contents($file, $image_base64);

        Checkin::create([
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'tanggal_lahir' => $request->tgl_lahir,
            'domisili' => $request->domisili,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'sosial_media' => $request->sosial_media,
            'jenis_trip' => $request->trip,
            'signature' => $filename
        ]);
	    return back()->with('success','Proses check-in anda berhasil dilakukan. Selamat menikmati penginapan bersama peta lodge');
    }
}
