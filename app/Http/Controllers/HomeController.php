<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        /*
            $request->user()->authorizeRoles(['user', 'admin']);

            if (Auth::user()->hasRole('admin')) {
                $usuarios=User::orderBy('id','ASC')->paginate(5);
                return view('auth.home',compact('usuarios'));
            }else{
                return view('aprov.frmProv');
            }
        */
        
        return view('auth.home');
    }
}
