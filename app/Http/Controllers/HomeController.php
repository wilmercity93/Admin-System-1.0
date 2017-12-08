<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\sede;
use App\Promocione;
use App\Notificacione;






class HomeController extends Controller
{
    private $user;
    private $roles;
    private $sede;
    private $promociones;
    private $notificaciones;
    
    
    
 
    public function __construct(User $user, Role $roles, sede $sede, Promocione $promociones, Notificacione $notificaciones) {
 
        $this->user = $user;
        $this->roles = $roles;
        $this->sede = $sede;
        $this->promociones = $promociones;
        $this->notificaciones = $notificaciones;
        
    }

    public function home($value='')
    {
    	return view('welcome');
    }
    public function YourhomePage($value='')
    {
    	return view('home');
    }
    public function dashboard($value='')
    {
        $user = $this->user->get()->count();
        $roles = $this->roles->get()->count();
        $sede = $this->sede->get()->count();
        $promociones = $this->promociones->get()->count();
        $notificaciones = $this->notificaciones->get()->count();
        $fechahora=date("M-d");      
        // $fechahora = date("M");
        
        
    	return view('backEnd.dashboard', compact('user','roles','sede','promociones','notificaciones','fechahora'));
    }
}
