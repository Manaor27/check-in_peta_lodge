<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkin;
use App\Models\Peraturan;
use App\Models\User;
use PDF;
use Hash;

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

    public function user() {
        $user = User::all();
        return view('admin.user', compact('user'));
    }

    public function tambahuser() {
        return view('admin.tambahuser');
    }

    public function simpanuser(Request $request) {
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'admin'
        ]);
        return redirect('user')->with('success', 'Sukses Ditambahkan!');
    }

    public function edituser($id) {
        $u = User::find($id);
        return view('admin.updateuser', compact('u'));
    }

    public function updateuser(Request $request, $id) {
        $u = User::find($id);
        $u->name = $request->nama;
        $u->email = $request->email;
        if ($request->password1=="") {
            $user->password = $request->password2;
        }else {
            $user->password = Hash::make($request->password1);
        }
        $u->save();
        return redirect('/user');
    }

    public function deleteuser($id) {
        $u = User::find($id);
        $u->delete();
        return redirect('/user');
    }
}
