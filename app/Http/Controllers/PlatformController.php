<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Platform;
//use DB;

class PlatformController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    //Muestra todas los elementos
    public function index(){
        $platforms = Platform::paginate(12);
        return view('backend.platforms.index',compact('platforms'));
        //return view('backend.platforms.index');
    }

    //Formulario para carga de archivo
    public function addForm(){
        return view('backend.platforms.addForm');
    }

     //Proceso Guardar en BD
     public function add(Request $request){
        //Regla de Validacion ; max es el peso maximo de la image en MB
        $request->validate([
            "logo" => 'image',

        ]);
        
        $img = $request->file('logo')->store('/public/platform');
        $url_img = Storage::url($img); 

        //Guardado en BD
        Platform::create([
            'logo' => $url_img,
            'link' => $request-> url,
            'name' => $request-> name,
            'description' => $request-> description
        ]);
        
       return redirect()->route('listPlatform');
            
    }

    //Eliminar Plataforma
    public function destroy($id){
        //dd('Destruye Imagen de Galeria');

        //Recupera el objeto 
        $platform = Platform::where('id',$id)->first();

        //reemplaza /storage por /public para eliminar el archivo
        $url_logo = str_replace('storage','public',$platform->logo);

        //eliminar archivo fisico
        Storage::delete($url_logo);

        //Eliminar registro de la BD
        Platform::destroy($id);

        return redirect()->route('listPlatform')->with('delete_platform','ok');

    }

    public function editPlatform($id){
        $platform = Platform::find($id);
        //dd($platform);

        return view('backend.platforms.editForm',compact('platform'));

    }

    public function update(Request $request){

        //dd($request -> id);

        //Actualizando la informacion de la imagen
        DB::table('platforms')
                ->where('id', $request->id)
                ->update([
                    'link' => $request->url,
                    'name' => $request->name,
                    'description' => $request->description
                    ]);

        return redirect()->route('listBanner');
    }
    

}
