<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StyleLoginController extends Controller
{

    public function editLogin(){
        return view('backend.loginStyle.style');
    }
}
