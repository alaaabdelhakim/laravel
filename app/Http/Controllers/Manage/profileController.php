<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use Auth,Response,Hash;
use App\User;

class profileController extends Controller
{



    public function index() 
    {

      return view('manage.profile.index');
    }



    public function getInfo ($id)
    {
      $user=User::find($id);
      return $user;
    }


    public function update(Request $request){
        $this->validate(

                 $request,
                    [
                    'email'    => 'required|unique:users,email,'.$request->id,
                    ]

                );


       $user =User::find($request->id);
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->jop = $request->jop;
        $user->name = $request->name;
        if($request->password){
        $user->password = Hash::make($request->password);
          }
        $user->save();

        return 1;
    }








}
