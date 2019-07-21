<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class MainController extends Controller
{

    public function index() 
    {
    	return view('manage.dashboard');
    }


   public function login(Request $request){

    $credentials = [

        'email' => $request['email'],

        'password' => $request['password'],

    ];

    if (Auth::attempt($credentials)) {


      if(Auth::user()->hasRole('Admin')){

 }

return redirect()->route('admin.dashboard');

 }

    return 'Failure';

   }
    
	public function logout(){
		Auth()->logout();
		return redirect('/');

	}

}
