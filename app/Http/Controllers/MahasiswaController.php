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
            $user = DB::table('mahasiswa')->where(['id_user'=>$u])->first();
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
        date_default_timezone_set("Asia/Bangkok");
        $id = intval("0" .rand(1, 9) .rand(1, 9) .rand(1, 9) .rand(4, 8));
        $date = new \DateTime();
        $users = DB::table('users')->insert(['id'=>$id, 'email'=>$request->email, 'role'=>'mahasiswa', 'password'=>Hash::make($request->pass), 'created_at'=>$date, 'updated_at'=>$date]);
        $mahasiswa = DB::table('mahasiswa')->insert(['nama'=>$request->nama, 'id_user'=>$id, 'nim'=>$request->nim, 'alamat'=>$request->alamat, 'tgl_lahir'=>$request->tgl_lahir, 'tmpt_lahir'=>$request->tmpt_lahir, 'no_hp'=>$request->no_hp, 'gender'=>$request->gender, 'created_at'=>$date, 'updated_at'=>$date]);
        
        if($users && $mahasiswa){
            echo "<script>window.location='".Url::to('mahasiswa/login')."'</script>";
        }else{
            echo "<script>alert('Data belum di isi dengan lengkap!!');window.location='".Url::to('mahasiswa/register/')."'</script>";
        }
    }
}
