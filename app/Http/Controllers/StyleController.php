<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Auth;
use App\Style;

class StyleController extends Controller
{
    
    public function index(){
        return view('backend.estilo.listStyle');
    }

    public function editBaseStyle()
    {
        $style = Style::find(1);   //hace la consulta a la base
        //dd($style);
        return view('backend.estilo.baseStyle', compact('style')); 

    }

    //aplicar cambios
    public function update(Request $request)    {
        
        //dd($request->);

        //$this->validate($request,[ 'name'=>'required', 'email'=>'required', 'password'=>'required']);
     
        /*
        DB::table('role_user')
              ->where('user_id', $request -> id)
              ->update(['role_id' => $request -> tipo]);
        */
        //'textCategoryColor','navBarLogo', 'footerLogo','loginLogo', 'slideItem', 
    
        $style = Style::find(1);
        $style->backgroundColor = $request -> backgroundColor;
        $style->navBarColor = $request -> navBarColor;
        $style->iconNavBarColor = $request -> iconNavBarColor;
        $style->footerColor = $request -> footerColor;
        $style->textFooterColor = $request -> textFooterColor;
        $style->textCategoryColor = $request -> textCategoryColor;
        $style->navBarLogo = $request -> navBarLogo;
        $style->footerLogo = $request -> footerLogo;
        $style->loginLogo = $request -> loginLogo;
        $style->slideItem = $request -> slideItem;
               
        //dd($style);
        $style -> update();

        //Alert::success('Editado', 'Usuario editado exitosamente');

        return redirect()->route('listStyle');
    }

    public function logosView(){
        //$style = Style::find(1);   //hace la consulta a la base
        return view('backend.estilo.logoStyle');
    }

    public function uploadFile(Request $request)
    {
        //Regla de Validacion ; max es el peso maximo de la image en MB
        $request->validate([
            "logoNav" => 'image|max:2048',
            "logoFoot" => 'image|max:2048',
            "logoLogin" => 'image|max:2048'
        ]);

        $style = Style::find(1);

        if ($request->file('logoNav') != null) {
            //dd("logoNav No Nulo");
            $logoNav = $request->file('logoNav')->store('/public/logo/nav');
            $url = Storage::url($logoNav); 
            $style->navBarLogo = $url;
    
        }

        if ($request->file('logoFoot') != null) {
            //dd("logoFoot No Nulo");
            $logoFoot = $request->file('logoFoot')->store('/public/logo/foot');
            $url2 = Storage::url($logoFoot);
            $style->footerLogo = $url2;
        }

        if ($request->file('logoLogin') != null) {
            //dd("logoLogin No Nulo");
            //Se guarda la imagen en storage->app->public ...se debe hacer acceso directo de storage en public
            $logoLogin = $request->file('logoLogin')->store('/public/logo/login');

            //cambia public/abc/... por storage/abc/ para poder acceder a img esta URL se guarda en BD
            $url3 = Storage::url($logoLogin);
            $style->loginLogo = $url3;
        }

        //return $style->navBarLogo;
        $style -> update();

        return redirect()->route('listStyle');
        
    }

}
