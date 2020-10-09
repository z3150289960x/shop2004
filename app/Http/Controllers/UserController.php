<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function index(){
        return view('user.yi');
    }
    public function tj(){
        $data = request()->except(['_token']);
//        dd($data);
        $res = User::insert($data);
//        dd($res);
        if($res){
            return redirect('lian1zs');
        }
    }
    public function zs(){
        $data = User::get();
//        return view('zs',['data'=>$data]);
//        var_dump($data);die;
        return view('user.zs',['data'=>$data]);
//        dd($data);
    }

    public function redis(){

        $data = Redis::incr('count');
        dd($data);


        Redis::set('aaa','zhangsan');
        $v = Redis::get('aaa');
        dd($v);
    }
}
