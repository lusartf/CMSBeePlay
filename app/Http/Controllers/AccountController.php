<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Crypt;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

use App\Http\Controllers\Controller;
use App\Style;
use App\Banner;
use App\Platform;
use App\StyleLogin;

use Auth;
use Cookie;
use Session;
use Alert;



class AccountController extends Controller
{
    public function __construct()
    { 
    }
    
    //Mostrar vista Login
    public function showLoginForm(){
    
        $style = StyleLogin::first();
        $imgLogin = Style::first();
        
        session([
            'background' => $style->imgBackground,
            'colorBox' => $style->colorBox,
            'colorButton' => $style->colorButton,
            'imgLogin' => $imgLogin->loginLogo
        ]);

        return view('site.pages.login');
    
    }

    public function login(){ 
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
                //alert()->success('Has Iniciado Sesion', 'Bienvenido'); 
                session(['BeenetSession' => $auth]);
                //return redirect()->route('portfolio');

                //Cargar Estilo de BD
                $data = Style::all()->first();
                //Trae todos los Elementos de Banners Activos
                $banner = json_decode(Banner::all()->where('status',1));
                //Trae todos las plataformas
                $plataformas = json_decode(Platform::all());
                //dd($plataformas);

                //Guardando en Variables de Sesion
                if ($data == null) {
                    //Guardando configuracion por defecto
                    session([
                        'backgroundColor' => '#2E2E2E',
                        'navBarColor' => '#FFFFFF',
                        'iconNavBarColor' => '#FF6600',
                        'footerColor' => '#FFFF66',
                        'textFooterColor' => '#2E2E2E',
                        'textCategoryColor' => '#f74016',
                        'navBarLogo' => 'https://beenet.com.sv/app/recursos_cmsbee/NextTV_logo.png',
                        'footerLogo' => 'https://beenet.com.sv/app/recursos_cmsbee/NextTV_logo.png',
                        'loginLogo' => 'https://beenet.com.sv/app/recursos_cmsbee/NextTV_logo.png',
                        'slideItem' => '4',
                        'imgBanner' => $banner,
                        'platforms' => $plataformas
                    ]);
                }else{
                    //Guardando configuracion de BD
                    session([
                        'backgroundColor' => $data->backgroundColor,
                        'navBarColor' => $data->navBarColor,
                        'iconNavBarColor' => $data->iconNavBarColor,
                        'footerColor' => $data->footerColor,
                        'textFooterColor' => $data->textFooterColor,
                        'textCategoryColor' => $data->textCategoryColor,
                        'navBarLogo' => $data->navBarLogo,
                        'footerLogo' => $data->footerLogo,
                        'loginLogo' => $data->loginLogo,
                        'slideItem' => $data->slideItem,
                        'imgBanner' => $banner,
                        'platforms' => $plataformas
                    ]);
                    
                }

                //return view('site.pages.portfolio');
                Alert::message('Robots are working!');
                
                return redirect()->route('portfolio');

            }
            else
            {
                //alert()->error('Usuario y/o password no existen', 'Credenciales Invalidas');
                return back();  
            }


        } catch (ClientException $e) {
            return back();
        }  
        
    }

     /*********************************** Funcion Logout **********************************/
    public function logout()
    {
        $auth=session('BeenetSession');

        if (is_null($auth ))
        {
            return redirect('/');
        }

        $client = new Client([
            'base_uri' => 'https://mago.beenet.com.sv:4433/',
            'timeout'  => 6.0,
        ]);


        try {

            $auth=request()->Token;
            $response = $client->request('POST','apiv2/credentials/logout', [
                'json'=>[
                    'auth'=> $auth
                ]
            ]);
        } catch (ClientException $e) {
            //alert()->error('Error de conexion', 'Credenciales Invalidas');
        }

        //alert()->info('Sesion Cerrada Exitosamente', 'Sesion Terminada');
        Session::forget('BeenetSession');
        return redirect('/');
    }
}
