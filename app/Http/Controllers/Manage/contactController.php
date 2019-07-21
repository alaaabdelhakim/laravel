<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class contactController extends Controller
{

  public function allData()
  {
  $data=contact::all();
      return $this->mainFunction($data);
  }

    public function index() 
    {
      $rows = contact::all();
      return view('manage.contact.index' , compact('rows'));
    }

    public function store(Request $request){
    


       $contact = new contact;

        $contact->name=$request->name;
        $contact->msg=$request->message;
        $contact->email=$request->email;

        $contact->save();
        return 1;
    }





    public function show($id)
    {
      $contact=contact::find($id);
      return $contact;
    }



    public function destroy($id)
    {
      contact::find($id)->delete();

      return redirect()->back();


    }

    public function contact(Request $request)

    {

      Contact::create($request->all());

      return 1;

    }






   private function mainFunction($data)
   {
        return Datatables::of($data)->addColumn('action' ,function($data){

            $test='<a onclick="showData('.$data->id.')"  class="buttonload btn btn-primary"><i class="fa fa-spinner fa-spin" id="load_'.$data->id.'" style="display:none"></i> show</a> '.'

            <a onclick="deleteData('.$data->id.')" class="btn btn-danger">delete</a>';  
            return $test;
            })->rawColumns(['action' => 'action'])->make(true);
   }
  
}
