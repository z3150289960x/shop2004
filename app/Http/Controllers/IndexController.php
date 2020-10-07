<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('yi');
    }

    public function tj()
    {
//         $data = request()->all();
//         dd($data);die;
//        $arr = [
//            'name'=>$data['name'],
//            'bj'=>$data['bj'],
//        ];
        $data = request()->except(['_token']);
//         dd($data);die;
//        $res = Shop::insert($data);
        $res = Shop::insert($data);
//        var_dump($res);
        if($res){
//            echo 111;
//            die;
            return redirect('zs');
        }
    }
    public function zs()
    {
        $data = Shop::get();
//        dd($data);
        return view('zs',['data'=>$data]);
    }
    public function sc($id){
//        echo 111;die;
        $res = Shop::where('id',$id)->delete();
//        dd($res);
        if($res){
            return redirect('zs');
        }
    }
    public function xg($id){
        $data = Shop::find($id);
        return view('xg',['data'=>$data]);
    }
    public function updates($id){
        $data = request()->except(['_token']);
        $res = Shop::where('id',$id)->update($data);
        if($res){
//            echo 111;
//            die;
            return redirect('zs');
        }

    }
}
