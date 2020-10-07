<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    public $timestamps = false;
    protected $primaryKey = 'uid';
    protected $guarded = [];   //黑名单  create只需要开启
}
