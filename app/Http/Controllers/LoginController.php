<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
//        echo 111;die;
        return view('login.login');
    }
    public function login1(){
        $data = request()->except(['_token']);
        $res = Login::insert($data);
        if($res){
//            dd(123);
            return redirect('login2');
        }
    }
    public function login2(){
        return view('login.login2');
    }
    public function login3(Request $request){

        $login_name = $request->input('login_name');
        $pwd = $request->input('pwd');
//        dd($pwd);
        $data = Login::where(['login_name'=>$login_name])
            ->orwhere(['email'=>$login_name])
            ->orwhere(['cellphone'=>$login_name])
            ->orwhere(['pwd'=>$pwd])
            ->first();
        if(empty($data)){
            echo "用户不存在";
            die;
        }
//        $res = password_verify($pwd,$data->pwd);
//        $res = Login::get();
        if(!$data['pwd']=$pwd)
        {
            echo"密码不正确";
            die;
        }

        if($data){
            echo 111;
        }

    }

}
