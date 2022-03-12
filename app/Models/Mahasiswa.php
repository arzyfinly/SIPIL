<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'surename',
        'fisrt_name',
        'last_name',
        'id_user',
        'nim',
        'alamat',
        'tgl_lahir',
        'tmpt_lahir',
        'no_hp',
        'gender',
    ];
    public function user(){
        return $this->hasOne(User::class, 'id_user');
    }
}
