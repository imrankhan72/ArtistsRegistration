<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function getlogin(){
        return view ('/login');
      }

      public function login(Request $request){
        if(\Auth::attempt(['email'=>$request->email,'password'=> $request->password])){
          //auth is success
            return redirect('/admin/dashboard');
        }
        // if auth failed
        return redirect('/login')->with('message', 'email or password wrong');
      }
      public function logout(){
        \Auth::logout();
        return redirect('/')->with('message','Admin has been logged out !!');
      }
      public function settings(){
          return view('/dashboard/settings');
      }
      public function change_password(Request $request){
          return $request;

      }
      public function tnc(){
        return view('tnc');
      }
}
