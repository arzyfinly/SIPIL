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

class ProfileController extends BaseController
{
    public function profile()
    {
        $id = Session::get('id');
        $user = DB::table('users')->where(['id'=>$id])->first();
        $mahasiswa = DB::table('mahasiswa')->where(['id_user'=>$id])->first();
        return view('mahasiswa.profile', ['user'=>$user, 'mahasiswa'=>$mahasiswa]);
    }
}
