<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request)
    {

//        $request->session()->put('key', 'value');//存储session;
//        $data = $request->session()->all();//获取所有session
        $users = DB::table('laravel55_user')->get();
        return view('AdminHome', ['users' => $users]);

    }

    public function adduser()
    {
        $status = DB::table('laravel55_user')->insert(
            ['name' => $_POST['name'], 'password' => $_POST['password']]
        );
        if ($status) {
            return redirect('/Admin');
        }
    }

    public function deleteuser($id)
    {
        $status = DB::table('laravel55_user')->where('id', '=', $id)->delete();
        if ($status) {
            return redirect("/Admin");
        }
    }

    public function updatauser($id)
    {
        $info = DB::table('laravel55_user')->where('id',$id)->get();
        return view('Admin.adduser',['id'=>$id,'info'=>$info]);
    }

    public function saveUpdateuser()
    {
        $status = DB::table('laravel55_user')
            ->where('id',$_POST['id'])
            ->update(array('name'=>$_POST['name'],'password'=>$_POST['password']));
        if($status){
            return redirect('/Admin');
        }
    }
}
