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
            ['name' => $_POST['name'], 'age' => $_POST['age']]
        );
        if($status){
            return back();
        }
    }
}
