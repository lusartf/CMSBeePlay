<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Banner;
use DB;

class BannerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }    

    public function index(){
        //$banner = Banner::all();
        $banner = Banner::paginate(9);
        return view('backend.banner.index',compact('banner'));
    }

    //Formulario para carga de archivo
    public function uploadForm(){
        return view('backend.banner.uploadForm');
    }

    //Proceso de Subir Archivo
    public function upload(Request $request){
        //Regla de Validacion ; max es el peso maximo de la image en MB
       /*
        $request->validate([
            "file" => 'image|max:2048',
        ]);
        */
        $img = $request->file('file')->store('/public/banner');
        $url = Storage::url($img); 

        //Guardado en BD
        Banner::create([
            'url' => $url
        ]);
        
       // return redirect()->route('listBanner');
            
    }

    //Eliminar imagen de Galeria
    public function destroy($id){
        //dd('Destruye Imagen de Galeria');

        //Recupera el objeto 
        $banner = Banner::where('id',$id)->first();

        //reemplaza /storage por /public para eliminar el archivo
        $url = str_replace('storage','public',$banner->url);

        //eliminar archivo fisico
        Storage::delete($url);

        //Eliminar registro de la BD
        Banner::destroy($id);

        return redirect()->route('listBanner')->with('eliminar','ok');

    }

    public function agregar_quitar_slide($id,$valor){
        
        $banners = DB::table('banners')->where('status',1)->get();
        $countSlide = $banners->count();

        //Si hay mas de 6 activos(1) y la nueva accion viene con 1, aborta el cambio de status y redirecciona
        if ($countSlide >= 6 && $valor == 1) {
            //dd("maximo slide alcanzado");
            return redirect()->route('listBanner')->with('countSlide',$countSlide);
        }

        DB::table('banners')
                ->where('id', $id)
                ->update(['status' => $valor]);
    
        //return redirect()->route('listBanner')->with('countSlide',$countSlide);
        return redirect()->route('listBanner');
        
    }
}
