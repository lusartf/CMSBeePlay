<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Banner;
use DB;

class BannerController extends Controller
{
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
        
        DB::table('banners')
            ->where('id', $id)
            ->update(['status' => $valor]);

        $banners = DB::table('banners')->where('status',1)->get();
        $countSlide = $banners->count();

        //dd($countSlide);

        return redirect()->route('listBanner')->with('countSlide',$countSlide);
        
    }
}
