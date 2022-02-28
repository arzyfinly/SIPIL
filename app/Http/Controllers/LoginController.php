<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;

class LoginController extends BaseController
{
    public function index()
    {
        return view('mahasiswa.login');
    }

    public function login(Request $request)
    {
        $user = DB::table('users')->where(['email'=>$request->email])->first();
        if($user != null){
            if(Hash::check($request->pass, $user->password) && $user->role == "mahasiswa"){
                Session::put('id', $user->id);
                Session::put('role', $user->role);
                echo "<script>window.location='".Url::to('/')."'</script>";
            }else{
                echo "<script>alert('Username atau Password Salah!!');window.location='".Url::to('/mahasiswa/login')."'</script>";
            }
        }else{
            echo "<script>alert('Username atau Password Salah!!');window.location='".Url::to('/mahasiswa/login')."'</script>";
        }        
    }

    public function logout()
    {
        Session::flush();
        echo "<script>window.location='".Url::to('/')."'</script>";
    }
}
