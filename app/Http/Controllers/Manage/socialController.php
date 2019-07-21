<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\social;
use Yajra\DataTables\DataTables;
use Auth,File;

class socialController extends Controller
{


  public function index() 
    {
      $social=social::first();

      return view('manage.social.index',compact('social'));
    }


    public function update(Request $request){

      
        $social=social::first();

        $social->facebook = $request->get('facebook');
        $social->twitter = $request->get('twitter');
        $social->pinterest = $request->get('pinterest');
        $social->linkedin = $request->get('linkedin');
        $social->flickr = $request->get('flickr');

        $social->save();
        return redirect()->back();

    }


  public function externalUrl(Request $request)
  {


  }




}

