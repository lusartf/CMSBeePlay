<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{

    /************************************Funcion play********************************/
    /*
    public function play(Request $request)
    {
        $auth=session('BeenetSession');

        if (is_null($auth ))
        { 
            return redirect('/');
        }

        $categories = session('categories');
        $channels = session('channels');

        return view('site.pages.player', compact('channels','categories'));
    }
    */
    /**********************************************************************************/

    public function getPlayer(){
        //dd("Canal seleccionado: ".$channel);

        $auth=session('BeenetSession');

        if (is_null($auth ))
        { 
            return redirect('/');
        }

        $categories = session('categories');
        $channels = session('channels');

        return view('site.pages.player', compact('channels','categories'));
    }
}
