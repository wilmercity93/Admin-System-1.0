<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Role;
use Validator;
use Session;
use Auth;
use Route;
use Sentinel;
use Activation;
use DB;
use Hash;
use Mail;
use Carbon\Carbon;


class FormController extends Controller
{
    public function __construct()
    {
      //$this->middleware('auth')->except('orders');
      // $this->middleware('auth');
    }
    protected function validator(Request $request,$id='')
    {
        return Validator::make($request->all(), [
            'first_name' => 'required|min:2|max:35|string',
            'last_name' => 'required|min:2|max:35|string',            
            'email' => Sentinel::inRole('Admin')?'required|email|min:3|max:50|string':(Sentinel::check()?'required|email|min:3|max:50|string|unique:users,email,'.$id:'required|email|min:3|max:50|unique:users|string'),
            'password' => 'min:6|max:50|confirmed',
            //'gender' => 'required',
            'role' => 'required',
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
         // $type = $request->type;
         // $users= User::all();
         // if ($type) {
         //  $role = Sentinel::findRoleBySlug( $type);
         //  $users = $role->users()->get();

         // }
        
        return View('backend.users.index'); 
    }
    



}
