<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Social;
use DB;

class SocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    //Lista de RS
    public function index(){
        $social = Social::paginate(12);
        return view('backend.social.index',compact('social'));
        //return view('backend.social.index');
    }

    //Agregar RS
    public function addForm(){
        return view('backend.social.add');
    }

    public function add(Request $request){
        
        $request->validate([
            "logo" => 'image',

        ]);
        
        $img = $request->file('logo')->store('/public/icono');
        $url_img = Storage::url($img); 

        //Guardado en BD
        Social::create([
            'logo' => $url_img,
            'url' => $request-> url,
        ]);
        
       return redirect()->route('listSocial');
           
    }

    //Eliminar RS
    public function destroy($id){
        //dd($id);

        //Recupera el objeto 
        $social = Social::where('id',$id)->first();

        //reemplaza /storage por /public para eliminar el archivo
        $url_logo = str_replace('storage','public',$social->logo);

        //eliminar archivo fisico
        Storage::delete($url_logo);

        //Eliminar registro de la BD
        Social::destroy($id);

        return redirect()->route('listSocial')->with('delete_rs','ok');

    }

    //Actalizacion de RS
    public function editSocial($id){
        $social = Social::find($id);
        //dd($social);

        return view('backend.social.edit',compact('social'));

    }

    public function update(Request $request){

        $social = Social::find($request->id);

        //Si se cambio imagen guarda archivo y cambia url en BD caso contrario mantiene la imagen anterior
        if ($request->logo != null) {

            //Guarda Img en storage
            $img = $request->file('logo')->store('/public/icono');
            $url_img = Storage::url($img); 
            $social->logo = $url_img;

            //Borra Archivo con imagen anterior de storage
            $img_prev = str_replace('storage','public',$request->img_prev);
            Storage::delete($img_prev);

        } else {
            //Mantiene la imagen previa
            $social->logo = $request->img_prev;
        }

        $social->url = $request->url;

        $social->update();

        return redirect()->route('listSocial');  
    }
    
    //Status de RS
    public function agregar_quitar_rs($id,$valor){
        
        $social = DB::table('socials')->where('status',1)->get();
        $countSlide = $social->count();

        //Si hay mas de 4 activos(1) y la nueva accion viene con 1, aborta el cambio de status y redirecciona
        if ($countSlide >= 4 && $valor == 1) {
            //dd("maximo slide alcanzado");
            return redirect()->route('listSocial')->with('countSlide',$countSlide);
        }

        DB::table('socials')
                ->where('id', $id)
                ->update(['status' => $valor]);
    
        //return redirect()->route('listBanner')->with('countSlide',$countSlide);
        return redirect()->route('listSocial');
        
    }

}
