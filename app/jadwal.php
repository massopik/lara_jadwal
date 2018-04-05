<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $fillable = ['hari','ruangan_id','matkul_id','dosen_id'];
}
