<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\StyleLogin;
use App\Style;
use DB;

class StyleLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function editLogin(){
        $styleLogin = StyleLogin::first();
        
        return view('backend.loginStyle.style',compact('styleLogin'));
    }

    public function update(Request $request){

        //Evaluar si se selecciona nuevo fondo
        if (!is_null($request->fondo)) {
            //Eliminar la imagen actual de storage
            $url = str_replace('storage','public',$request->imgDelete);
            Storage::delete($url);

            //Se agrega nueva imagen
            $img = $request->file('fondo')->store('/public/background');
            $url_fondo = Storage::url($img); 

            //Actualizando la informacion de la imagen
            DB::table('style_logins')
                ->where('id', $request->id)
                ->update([
                    'imgBackground' => $url_fondo,
                    'colorBox' => $request->colorBox,
                    'colorButton' => $request->colorButton
                    ]);
            
            return redirect()->route('home');
            //dd(json_decode($styleLogin));
        }

        //Actualizando la informacion de la imagen
        DB::table('style_logins')
                ->where('id', $request->id)
                ->update([
                    'colorBox' => $request->colorBox,
                    'colorButton' => $request->colorButton
                    ]);

        return redirect()->route('home');
        
    }
}
