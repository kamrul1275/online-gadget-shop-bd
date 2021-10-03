<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\SessionGuard;
Session_start();
class AdminController extends Controller
{
    public function login()
    {
          return view('admin.login');
    }









    public function Show_dashboard(Request $request)
    {
         $admin_email =$request->email;
         $admin_password =md5($request->password);


         $result = Admin::where('admin_email', $admin_email)->where('admin_password',$admin_password )->first();

     if( $result){
           session::put('admin_id',  $result->admin_id );
           session::put('admin_name',  $result->admin_name );
           return Redirect::to('/dashboard');
     }

     else{

           session::put('msg', 'email & password invalid');
           return Redirect::to('/admins');
     }

        }






}
