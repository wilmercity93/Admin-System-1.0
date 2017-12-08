<?php

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
Route::auth();
Route::get('/', ['uses' => 'HomeController@home']);
// Todo lo del perfil del usuario
Route::get('perfil', ['uses' => 'UserController@perfil']);
Route::post('perfil', ['uses' => 'UserController@update_avatar']);
// fin

 Route::group(['middleware' => ['web', 'auth', 'permission'] ], function () {
        Route::get('dashboard', ['uses' => 'HomeController@dashboard', 'as' => 'home.dashboard']);
        //users
        Route::get('user/{user}/permissions', ['uses' => 'UserController@permissions', 'as' => 'user.permissions']);
        Route::post('user/{user}/save', ['uses' => 'UserController@save', 'as' => 'user.save']);
        Route::get('user/{user}/activate', ['uses' => 'UserController@activate', 'as' => 'user.activate']);
        Route::get('user/{user}/deactivate', ['uses' => 'UserController@deactivate', 'as' => 'user.deactivate']);
        Route::post('user/ajax_all', ['uses' => 'UserController@ajax_all']);
        Route::resource('user', 'UserController');
        

        //roles
        Route::resource('role', 'RoleController');
        Route::get('role/{role}/permissions', ['uses' => 'RoleController@permissions', 'as' => 'role.permissions']);
        Route::post('role/{role}/save', ['uses' => 'RoleController@save', 'as' => 'role.save']);
        Route::post('role/check', ['uses' => 'RoleController@check']);

        //Facturacion
        Route::resource('facturacion', 'FacturacionController');
        // Route::get('facturacion/{facturacion}/permissions', ['uses' => 'FacturacionController@permissions', 'as' => 'facturacion.permissions']);

        //Ventas
        Route::resource('ventas', 'VentasController');
        // Route::get('ventas/{ventas}/permissions', ['uses' => 'VentasController@permissions', 'as' => 'ventas.permissions']);


        //Compras
        Route::resource('compras', 'ComprasController');
        // Route::get('compras/{compras}/permissions', ['uses' => 'ComprasController@permissions', 'as' => 'compras.permissions']);


        //Inventario
        Route::resource('inventario', 'InventarioController');
        // Route::get('inventario/{inventario}/permissions', ['uses' => 'InventarioController@permissions', 'as' => 'inventario.permissions']);


        //Reportes
        Route::get('reports/dos', ['uses' => 'ReportsController@dos', 'as' => 'role.permissions']);
        Route::get('reports/tres', ['uses' => 'ReportsController@tres', 'as' => 'role.permissions']);
        Route::get('reports/cuatro', ['uses' => 'ReportsController@cuatro', 'as' => 'role.permissions']);
        Route::resource('reports', 'ReportsController');
        // Route::get('reports/{reports}/permissions', ['uses' => 'ReportsController@permissions', 'as' => 'reports.permissions']);

        //Sedes
        Route::resource('sedes', 'sedesController');

        //Estados
        Route::resource('estados', 'estadosController');
        
        //Configuracion
        Route::resource('configuracion', 'configuracionController');

        //Categorias
        Route::resource('categorias', 'CategoriasController');
        
        //Notificaciones
        // Route::get('notificaciones', 'NotificacionesController@index2');
        // Route::post('notificaciones', 'NotificacionesController@index2');
        Route::get('notificaciones/noti', ['uses' => 'NotificacionesController@index2']);
        Route::post('notificaciones/noti', ['uses' => 'NotificacionesController@index2']);
        Route::resource('notificaciones', 'NotificacionesController');
        
        
        //Promociones
        Route::resource('promociones', 'PromocionesController');
        

        //Tipos
	      Route::resource('tipos', 'TiposController');
        

        //Cajas
        Route::resource('cajas', 'CajasController');
        
        // Dashboard
        // Route::get('dashboard', ['uses' => 'DashboardController@index', 'as' => 'role.permissions']);


        //Personal
        Route::get('personas/c', ['uses' => 'PersonasController@indexc']);
        Route::get('personas/p', ['uses' => 'PersonasController@indexp']);
        Route::resource('personas', 'PersonasController');
      	// Route::resource('clientes', 'PersonasController');
        // Route::resource('proveedores', 'PersonasController');
      	// Route::resource('empleados', 'PersonasController');
        Route::get('personal/{personal}/permissions', ['uses' => 'PersonalController@permissions', 'as' => 'personal.permissions']);


 });