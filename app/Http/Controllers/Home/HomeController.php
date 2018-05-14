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
        if ($status) {
            return view("Home/index");
        } else {
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
        $password = md5($_POST['password']);
        $status = DB::table('laravel55_user')->where([
            ['name', "=", $name],
            ['password', "=", $password],
        ])->pluck("id");

        if (!empty($status[0])) {
            session(['email' => $name]);
            session(['loginStatus' => 1]);//存储登录状态码 1为登录 0为退出
            return redirect('/Home');
        } else {
            echo '<script>alert("账号或者密码不正确");window.location.href="/Home/login";</script>';
        }
    }

    /*
    *退出登录
    */
    public function out(Request $request)
    {
        $request->session()->forget("email");
        session(['loginStatus' => 0]);
        $status = session('loginStatus');
        if ($status < 1) {
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
    *发送验证码:smtp
    *str_random 生成参数个位的字符串
    */
    public function addSingUp(Request $request)
    {
        $name = 'GatesBin';
        $code = str_random(6);
        // dd($code);
        $info = DB::table("laravel55_user")->where(['name' => $_POST['name']])->pluck('id');
        if (!isset($info[0])) {
            $data = array("code" => $code, 'mail' => $_POST['name']);
            $flag = Mail::send('emails.email', $data, function ($message) {
                $message->to($_POST['name'], 'GatesBin')->subject('GatesBin网站注册码');
            });
        } else {
            echo "<script>alert('此邮箱已注册');window.location.href='/Home/singUp'</script>";
        }
        return view("Home/singUp-2", ['code' => $code, 'mail' => $_POST['name'], 'password' => $_POST['password']]);
        //$flag 一直都是null 无法判断 
        // return view("emails.test",['code'=>$code,'mail'=>$_POST['name']]);
    }

    /*
    *提交注册码
    *如注册码正确则直接写入数据库
    *密码格式:md5(密码)
    */
    public function addSingUp_2()
    {
        $password = md5($_POST['password']);
        $arr = array('name' => $_POST['name'], 'password' => $password);
        if ($_POST['registrationcode'] == $_POST['code']) {
            $status = DB::table("laravel55_user")->insert($arr);
            if ($status) {
                echo "<script>alert('注册成功,正在移动至登录');window.location.href='/Home'</script>";
            }
        } else {
            echo "<script>alert('注册码不正确');window.location.href='/Home/singUp'</script>";
        }
    }

    /*
    *调用wx页面
    */
    public function wx()
    {
        return view("Home.wx");
    }

    /*
    *调用test页面
    */
    public function test()
    {
        return view("Home.test");
    }

    /*
    *我的积分
    */
    public function yourself()
    {
        $name = session('email');
        $email = DB::table("laravel55_user")->where(array("name" => $name))->get();
        return view("Home.yourself", ['total' => $email['0']->total]);
    }

    /*
    *任务列表
    */
    public function tasklist()
    {
        $data = DB::table("laravel55_tasklist")->get();
        return view("Home.tasklist", ['data' => $data]);
    }

    /*
    *接受任务
    */
    public function addtask()
    {
        dd($_POST);
    }
}
