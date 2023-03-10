<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ecommerce_controller extends Controller
{
    /** controller login  */

    public function login(){
        return view('auth.login');
    }
    public function home()
    {
        return view('home');
//        return redirect(route('ecommerce.index'));
    }
    public function index(){
        return view('dashboard.index');
    }
}
