<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkin;
use App\Models\Peraturan;
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

    public function peraturan() {
        $p = Peraturan::find(1);
        return view('admin.peraturan', compact('p'));
    }

    public function download($id) {
        $d = Checkin::find($id);
        $p = Peraturan::find(1);
        $pdf = PDF::loadview('admin.agreement', compact('d','p'));
        return $pdf->download('Surat Persetujuan.pdf');
    }

    public function simpan(Request $request) {
        $p = Peraturan::find(1);
        $p->peraturan = $request->peraturan;
        $p->save();
        return back()->with('success','Proses update peraturan berhasil dilakukan.');
    }

    #public function update(Request $request) {
    #    $p = Peraturan::find(1);
    #    $p->peraturan = $request->peraturan;
    #    $p->save();
    #    return back()->with('success','Proses update peraturan berhasil dilakukan.');
    #}
}
