<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class SessionsController extends Controller
{
    //
     public function create()
    {
      if(Auth::check()){
        return "Error:请勿重复登录";
      }else{
        return view('sessions.create');
      
      }
    }
     public function store(Request $request)
    {
       $credentials = $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);
       if (Auth::attempt($credentials)) {
           session()->flash('success', '欢迎回来！');
           return redirect('/help');
       } else {
           session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
           return redirect()->back()->withInput();
       }
    }
     public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }
}
