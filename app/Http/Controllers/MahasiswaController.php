<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $u = Session::get('id');
        if($u){
            $user = DB::table('users')->where(['id'=>$u])->first();
            return view('mahasiswa.index', ['user'=>$user]);
        }else{
            return view('mahasiswa.index');
        }
    }

    public function register()
    {
        return view('mahasiswa.register');
    }

    public function create(Request $request)
    {
        $users = DB::table('users')->insert(['nama'=>$request->nama, 'email'=>$request->email, 'role'=>'mahasiswa', 'password'=>Hash::make($request->pass)]);
        $mahasiswa = DB::table('mahasiswa')->insert(['nama'=>$request->nama, 'nim'=>$request->nim, 'email'=>$request->email, 'alamat'=>$request->alamat, 'tgl_lahir'=>$request->tgl_lahir, 'tmpt_lahir'=>$request->tmpt_lahir, 'no_hp'=>$request->no_hp, 'gender'=>$request->gender]);
        
        if($users && $mahasiswa){
            echo "<script>window.location='".Url::to('mahasiswa/login')."'</script>";
        }else{
            echo "<script>alert('Data belum di isi dengan lengkap!!');window.location='".Url::to('mahasiswa/register/')."'</script>";
        }
    }
}
