<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function show(){
        return view('admin.page.main-page');
     }
     public function showLogin(){
        return view('admin.page.login');
     }
     public function LogOut(Request $request){
         $request->session()->flush();
         return redirect('/');

     }
     public function LoginAuth(Request $request){
         $userName = $request->input('userName');
         $pass=md5($request->input('password'));
         $data=DB::table('user')
         ->where('userName',$userName)
         ->get();

         $this->validate($request,
             [
                 'userName' => 'required',
                 'password' => 'required|min:1|max:32'
             ],
             [
                 'userName.required' => 'Bạn chưa nhập username',
                 'password.required' => 'Bạn chưa nhập Mật khẩu!',
                 'password.min' => 'Mật Khẩu gồm tối thiểu 6 ký tự!',
                 'password.max' => 'Mật Khẩu gồm tối đa 32 ký tự!'
             ]);
                 $success=false;
                foreach($data as $account) {
                 if($pass == $account->password ){
                     $request->session()->put('login', true);
                     $request->session()->put('id', $account->id);
                     $request->session()->put('namelogin', $account->name);
                     $success=true;
                    return redirect('/showadmin');
                 break;
                     }
                 }
                 if($success===false){
                    return redirect('/quantri');
                }

    }
     public function checklogin(Request $request){
         if( $request->session()->has('id')) {
             return redirect('/showviewadmin');
         }
         else return view('admin.page.login');
     }

}
