<?php

use Illuminate\Http\Request;
use App\Style;
use App\Banner;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* =================== SitioWeb ==================== */
    //Pagina que muestra letra laravel
    /*
        Route::get('/', function () {
            //return view('welcome');
            return view('site.pages.login');
        });
    */
    /* ----- Login Cliente ----- */
        //Formulario - login Cliente
        Route::get('/', 'AccountController@showLoginForm');

        //Login
        Route::post('/login/user', 'AccountController@login')->name('account');
        
        //Cerrar sesion
        Route::get('/logout', 'AccountController@logout')->name('closeSesion');
    
    /* ----- Portfolio --------- */
        Route::get('portfolio', 'PortfolioController@show')->name('portfolio');

    /* ----- Player ------------ */
        Route::get('/player', 'PlayerController@getPlayer')->name('player');

/* ================================================= */


/* ==================== Backend ===================== */
    /* ----- Dashboard -----*/
        Route::get('/backend/home', 'HomeController@index')->name('home');

    /* ----- Login ----- */
        //Auth::routes();
        Route::get('/backend/login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('/backend/login', 'Auth\LoginController@login');
        Route::post('/backend/logout', 'Auth\LoginController@logout')->name('logout');
        
    /* ----- Gestion de Usuario ------ */
        //Lista de Usuarios
            Route::get('/backend/users/list', 'Auth\RegisterController@index')->name('listUsers');
        //crear usuario
            Route::get('/backend/users/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
            Route::post('/backend/users/register', 'Auth\RegisterController@register');
        //Para llamar formulario de editar Usuario
            Route::get('/backend/users/{id}/editForm',[
                'uses'	=>	'Auth\RegisterController@editUser',
                'as'	=>	'users.edit'
            ]);
            Route::post('/backend/users/update',[
                'uses'	=>	'Auth\RegisterController@update',
                'as'	=>	'users.update'
            ]);
        //Para eliminar Usuario
            Route::get('/backend/users/{id}/destroy',[
                'uses'	=>	'Auth\RegisterController@deleteUser',
                'as'	=>	'users.destroy'
            ]);

    
    /* ----- Gestion Estilo ---------- */
        //Dashboard Estilo
        Route::get('/backend/style/list', 'StyleController@index')->name('listStyle');
        //Para llamar formulario de editar Usuario
        Route::get('/backend/style/editForm',[
            'uses'	=>	'StyleController@editBaseStyle',
            'as'	=>	'style.edit'
        ]);
        
        //hace la actualizacion en la BD
        Route::post('/backend/style/update',[
            'uses'	=>	'StyleController@update',
            'as'	=>	'style.update'
        ]);

        //Trae vista para subir archivos
        Route::get('/backend/style/uploadImg',[
            'uses'	=>	'StyleController@logosView',
            'as'	=>	'style.logoView'
        ]);

        //Carga archivos dentro de proyecto
        Route::post('/backend/style/uploadImg',[
            'uses'	=>	'StyleController@uploadFile',
            'as'	=>	'style.uploadFile'
        ]);
        
    /* ----- Gestion Banner ---------- */
        // Lista de Imagenes
        Route::get('/backend/banner/list', 'BannerController@index')->name('listBanner');

        //Agregar Imagen
        Route::get('/backend/banner/upload', 'BannerController@uploadForm')->name('uploadForm');
        Route::post('/backend/banner/upload', 'BannerController@upload')->name('upload');

        //Eliminar Imagen de galeria
        Route::post('/backend/banner/deleteImg/{id}',[
            'uses'  => 'BannerController@destroy',
            'as'    => 'deleteImg'
        ]);

        //Cambiar estado de imagen para slider
        Route::get('/backend/banner/status/{id}/{value}',[
            'uses'	=>	'BannerController@agregar_quitar_slide',
            'as'	=>	'statusBanner'
        ]);

        //Agregar Informacion
        Route::get('/backend/banner/info/{id}',[
            'uses'	=>	'BannerController@infoForm',
            'as'	=>	'infoForm'
        ]);
        //Actualizar info
        Route::post('/backend/banner/addInfo',[
            'uses'	=>	'BannerController@addInfo',
            'as'	=>	'addInfo'
        ]);
    
    /* ----- Gestion Plataformas ----- */
        // Lista de Plataforma
        Route::get('/backend/platform/list', 'PlatformController@index')->name('listPlatform');

        // Agregar Plataforma 
        Route::get('/backend/platform/add', 'PlatformController@addForm')->name('addPlatform');
        Route::post('/backend/platform/add', 'PlatformController@add')->name('add');

        //Eliminar Plataforma
        Route::post('/backend/platform/deletePlat/{id}',[
            'uses'  => 'PlatformController@destroy',
            'as'    => 'deletePlatform'
        ]);

        //Editar Plataforma
        Route::get('/backend/platform/editPlat/{id}',[
            'uses'	=>	'PlatformController@editPlatform',
            'as'	=>	'editPlatform'
        ]);
        Route::post('/backend/platform/update',[
            'uses'	=>	'PlatformController@update',
            'as'	=>	'updatePlatform'
        ]);

    /* ----- Gestion Estilo Login ----- */
        //Editar Plataforma
        Route::get('/backend/StyleLog/edit',[
            'uses'	=>	'StyleLoginController@editLogin',
            'as'	=>	'editLogin'
        ]);
        /*
        Route::post('/backend/platform/update',[
            'uses'	=>	'PlatformController@update',
            'as'	=>	'updatePlatform'
        ]);*/


/* =================================================================== */




