<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClincController extends Controller
{
    public function index(){
        return view ('EndUser.index');
    }
    public function majors(){
        return view ('EndUser.majors');
    }

    public function login(){
        return view ('EndUser.login');
    }

    public function register(){
        return view ('EndUser.register');
    }

    public function contact(){
        return view ('EndUser.contact');
    }
    public function doctor(){
        return view ('EndUser.doctors.doctor');
    }
    public function doctorIndex(){
        return view ('EndUser.doctors.index');
    }

}
