<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
	/*
	*首页
	*home
	*/
	public function index()
	{
   		return view("Home/index");
	}
	/*
	*登陆页面
	*login view
	*/
	public function login()
	{
   		return view("Home/login");
	}
	/*
	*登录验证及存储
	*/
	public function loginAdd(Request $request)
	{
		$name = $_POST['name'];
		$password = $_POST['password'];
		$status = DB::table('laravel55_user')->where([
			['name',"=",$name],
			['password',"=",$password],
		])->pluck("id");
	
		if (!empty($status[0])) {
            
        }


		// $status = DB::table('laravel55_user')->where([
		// 	['name',$name],
		// 	['password',$password],
		// ])->get();
		// dump($status);
		// if(!empty($status)){
		// 	echo 1;
		// }else{
		// 	echo 2;
		// }
	}
}
