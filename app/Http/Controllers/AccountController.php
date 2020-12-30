<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Cookie;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Crypt;

class AccountController extends Controller
{
    public function __construct()
    { 
    }
    
    //Mostrar vista Login
    public function showLoginForm(){
    
        return view('site.pages.login');
    
    }

    public function login()
    { 
        //dd("Dentro de funcion login, encriptado");
        //llamando la api de mago   
        $client = new Client([
            'base_uri' => 'https://mago.beenet.com.sv:4433/',
            'timeout'  => 20,
        ]);
        
        
        try {
           /* Como encription  key (salt) usar  encription_key definido anteriormente.
           * Ya teniendo auth generado consumir el api de la siguiente manera*/
            $auth=request()->Token;
            $response = $client->request('POST','apiv2/credentials/login', [
                'json'=>[
                    'company_id' => "1",
                    'appid' => "1",
                    'app_name'=>"BeenetPlay",
                    'api_version'=>"",
                    'appversion'=>"",
                    'auth'=> $auth
                ]
            ]);
        
            
          //Se extrae del json los atributos qe requiere la api
          //************************************************* */
          
            $error_description=json_decode($response->getBody()->getContents())->error_description;
            //dd($error_description);
            
            if($error_description =='OK'){
                alert()->success('Has Iniciado Sesion', 'Bienvenido'); 
                session(['BeenetSession' => $auth]);
                return redirect()->route('portfolio');
            }
            else
            {
                alert()->error('Usuario y/o password no existen', 'Credenciales Invalidas');
                return back();  
            }


        } catch (ClientException $e) {
            return back();
        }  
        
    }

}
