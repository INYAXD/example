<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
class Usercontroller extends Controller{

    public function index(){
        return view('index');
    }
    
    public function register(){
        return view('register');
    }

    public function registeraction(Request $input){
        $request=$input->all();
        // dd($request);
        $error = [];
        # 驗證：EMAIL不重複
        if(User::where("email", $request["email"])->count()>0){
            $error[]= "EMAIL重複註冊";
            
        }
        # 驗證：兩次輸入密碼都相同
        if($request["password"] != $request["passwordConfirm"]){
            $error[]= "兩次輸入密碼不符合";
            
        }
        # 驗證完畢：判斷是否新增資料
        if(count($error)>0){
            $error_email = $request["email"];
            $error_name = $request["name"];
            return redirect(route("register.form"))->with(["error"=>$error,"error_email"=>$error_email,"error_name"=>$error_name]);
        }else{
            User::create([
                "email" => $request["email"],
                "name" => $request["name"],
                "password" => $request["password"],
                "role" => "R"
            ]);
            return redirect(route("login.form"))->with(["msg" => "您已完成註冊，請登入"]);
        }
    }
    
    public function login(){
        return view('login');
    }
    
    public function loginaction(Request $input){
        //$request=$input->all();
        //$request= Request::all();
        if(Auth::attempt(["email" => $input->email, "password" => $input->password])){
            //return Auth::user()->name."登入成功";
            return redirect(route("index"))->with(["msg" => "登入成功！歡迎".Auth::user()->name."回來"]);
        }else{
            $error_email = $input->email;
            return redirect(route("login.form"))->with(["error" => "您的帳號或密碼錯誤，請重試一次","error_email"=>$error_email]);
        }
    }

    public function loginout(){
        Auth::logout();
        return redirect(route("index"))->with(["msg"=>"您已登出"]);
    }


}