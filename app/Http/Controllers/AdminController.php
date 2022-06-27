<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkin;
use PDF;

class AdminController extends Controller
{
    public function index()
    {
        $data = Checkin::all();
    	return view('admin.home', compact('data'));
    }

    public function login()
    {
    	return view('auth.login');
    }

    public function download($id) {
        $d = Checkin::find($id);
        $pdf = PDF::loadview('admin.agreement', compact('d'));
        return $pdf->download('Surat Persetujuan.pdf');
    }
}
