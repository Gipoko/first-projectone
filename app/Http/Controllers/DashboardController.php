<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index()
   {
       if(Auth::user()->hasRole('user')){
            return view('../../user/userdash');
       }elseif(Auth::user()->hasRole('admin')){
            return view('admin/admindash');
       }elseif(Auth::user()->hasRole('superadmin')){
        return view('superadmin/dashboard');
   }
   }

   public function myprofile()
   {
    return view('user/myprofile');
   }

   public function postcreate()
   {
    return view('admin/postcreate');
   }
   public function book()
   {
    return view('admin/book');
   }
}
