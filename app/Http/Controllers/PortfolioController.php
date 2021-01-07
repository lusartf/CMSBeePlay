<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;


class PortfolioController extends Controller
{
    /************************************Funcion Show*************************************/
    public function show(Request $request)
    {
        //paso1: Verificar si la sesion esta activa
        $auth=session('BeenetSession');
            if (is_null($auth ))
            { 
                return redirect('/');
            }

        //llamando la api de mago  https://mago.beenet.com.sv:4433/  
        $client = new Client([
            'base_uri' => 'https://nexttv.instel.site:4433/',
            'timeout'  => 20,
        ]);
    

        try {

        /* Como encription  key (salt) usar  encription_key definido anteriormente.
        * Ya teniendo auth generado consumir el api de la siguiente manera*/
        // $auth=request()->Token;
            $response = $client->request('POST','apiv2/channels/list',[
                'json'=>[
                    'company_id' => "1",
                    'appid' => "1",
                    'app_name'=>"BeenetPlay",
                    'api_version'=>"",
                    'appversion'=>"",
                    'auth'=> $auth,
                ]
            ]);
            

            //$list_channels=json_decode($response->getBody()->getContents())->error_description;
            $channels=(json_decode($response->getBody()->getContents())->response_object);   
            $request->session()->put('channels', $channels);

            $response = $client->request('POST','apiv2/channels/genre',[
                'json'=>[
                    'company_id' => "1",
                    'appid' => "1",
                    'app_name'=>"BeenetPlay",
                    'api_version'=>"",
                    'appversion'=>"",
                    'auth'=> $auth,
                ]
            ]);
            
            $categories=(json_decode($response->getBody()->getContents())->response_object);
            $request->session()->put('categories', $categories);
            $i=0;
            
            return view('site.pages.portfolio',compact('channels','categories','i'));

        } catch (ClientException $e) {

        }//fin catch 
    }
    /**************************************************************************************/
 
}
