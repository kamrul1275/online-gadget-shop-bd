<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class SuperAdminController extends Controller
{


    public function dashboard()
    {

        $this->AdminAuthCheck();
      return view('admin.home');
    }



public function logout()
{

    Session::flush();

    return Redirect::to('/admins');

}


public function AdminAuthCheck()
{
    $admin_id = Session::get('admin_id');

    if($admin_id){

return;

    }

    else {
        return Redirect::to('/admins')->send();
    }
}



}
