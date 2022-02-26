<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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
}
