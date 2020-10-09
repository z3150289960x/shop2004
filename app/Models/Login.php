<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'login';
    public $timestamps = false;
    protected $primaryKey = 'u_id';
    protected $guarded = [];   //黑名单  create只需要开启
}
