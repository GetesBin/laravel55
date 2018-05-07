<?php

namespace App\Http\Controllers\Home;

use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
	/*
	*首页
	*home
	*/
	public function index(Request $request)
	{
		$status = session('loginStatus');
		if($status){
   			return view("Home/index");
   		}else{
   			return view('Home/login');
   		}
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
            session(['email'=>$name]);
            session(['loginStatus'=>1]);//存储登录状态码 1为登录 0为退出
            return redirect('/Home');
        }else{
        	echo '<script>alert("账号或者密码不正确");window.location.href="/Home/login";</script>';
        }
	}
	/*
	*退出登录
	*/
	public function out(Request $request)
	{
		$request->session()->forget("email");
		session(['loginStatus'=>0]);
		$status = session('loginStatus');
		if($status < 1){
			echo '<script>alert("退出成功");window.location.href="/Home";</script>';
		}
	}
	
	/*
	*注册
	*/
	public function singUp(Request $request)
	{
		return view("Home/singUp");
	}
	/*
	*执行注册
	*/
	public function addSingUp(Request $request)
	{
		$name = 'GatesBin';
        // $flag = Mail::send('emails.test',['name'=>$name],function($message){  
        //     $to = $_POST['name'];  
        //     $message ->to($to)->subject('测试邮件');  
        // });
       	$flag = Mail::send('emails.test', array('key' => 'value'), function($message)
		{
		    $message->to($_POST['name'],'GatesBin')->subject('Welcome!');
		});  
        if($flag){  
            echo '发送邮件成功，请查收！';  
        }else{  
            echo '发送邮件失败，请重试！';  
        }  
	}

}
