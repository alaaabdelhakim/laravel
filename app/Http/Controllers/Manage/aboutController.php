<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\settings;
use Yajra\DataTables\DataTables;
use Auth,File;

class aboutController  extends Controller
{

    public function index() 
    {
      $about=settings::first();
      return view('manage.about.index',compact('about'));
    }

   

    public function update(Request $request){

      
        $about=settings::first();

       if($request->image){
        $image = $request->file('image');
        $input['image'] = time().'.'.$image->getClientOriginalExtension();
        $dist = public_path('/images/about/');
        $image->move($dist, $input['image']);
        $about->image=$input['image'];
       }

        $about->about_us = $request->get('about_us');
        $about->about_us_ar = $request->get('about_us_ar');
        $about->address_ar = $request->get('address_ar');
        $about->address = $request->get('address');
        $about->email = $request->get('email');
        $about->tel = $request->get('tel');
        $about->phone1 = $request->phone1;


        $about->save();
        return redirect()->back();

    }


    public function destroy($id)
    {
        $this->delete_process($id);
      about::find($id)->delete();

    }


       private function delete_process($id)

   {
       $about = about::findOrFail($id);
       $about = public_path('/images/about/').$about->img;

       if(file_exists($about))

       {

           File::delete($about);

       }

   }





}