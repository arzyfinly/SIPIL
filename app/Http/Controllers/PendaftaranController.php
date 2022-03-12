<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends BaseController
{
    public function index()
    {
        $id = Session::get('id');
        $mahasiswa = DB::table('mahasiswa')->where(['id_user'=>$id])->first();
        if($mahasiswa != null){
            return view('mahasiswa.pendaftaran', ['mahasiswa'=>$mahasiswa]);
        }else{
            return view('/');
        }
    }
    public function admin()
    {   
        return view('admin.pendaftaran');
        // if($admin != null){
        // } else {
        //     return view('/');
        // }
    }
}
