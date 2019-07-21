<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Models\products;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class productsController extends Controller
{

  public function allData()
  {
  $data=products::all();
      return $this->mainFunction($data);
  }

    public function index() 
    {
      return view('manage.products.index');
    }

    public function store(Request $request){
    


       $products = new products;
        $image = $request->file('image');

        $input['image'] = time().'.'.$image->getClientOriginalExtension();

        $dist = public_path('/images/products/');

        $image->move($dist, $input['image']);
        $products->image=$input['image'];

        $products->name=$request->name;
        $products->name_ar=$request->name_ar;
        $products->decs=$request->decs;
        $products->decs_ar=$request->decs_ar;


        $products->save();
        return 1;
    }


      public function update(Request $request){
         

       $products =products::find($request->id);
       if($request->image){
        $image = $request->file('image');
        $input['image'] = time().'.'.$image->getClientOriginalExtension();
        $dist = public_path('/images/products/');
        $image->move($dist, $input['image']);
        $products->image=$input['image'];
       }
        $products->name=$request->name;
        $products->name_ar=$request->name_ar;
        $products->decs=$request->decs;
        $products->decs_ar=$request->decs_ar;

        $products->save();
        return 1;
    }




    public function edit($id)
    {
      $products=products::find($id);
      return $products;
    }



    public function destroy($id)
    {
      products::find($id)->delete();

    }






   private function mainFunction($data)
   {
        return Datatables::of($data)->addColumn('action' ,function($data){

            $test='<a onclick="editData('.$data->id.')"  class="buttonload btn btn-primary"><i class="fa fa-spinner fa-spin" id="load_'.$data->id.'" style="display:none"></i> edit</a> '.'

            <a onclick="deleteData('.$data->id.')" class="btn btn-danger">delete</a>';  
            return $test;
            })->editColumn('image',function($data){
            	$image='<img src="/images/products/'.$data->image.'" width="150px">';
            	return $image;
            })->rawColumns(['action' => 'action','image'=>'image'])->make(true);
   }
  
}

