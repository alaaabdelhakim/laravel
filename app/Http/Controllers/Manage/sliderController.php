<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\slider;
use Yajra\DataTables\DataTables;
use Auth,File;


class sliderController extends Controller
{

  public function allData()
  {
  $data=slider::all();
      return $this->mainFunction($data);
  }

    public function index() 
    {
      return view('manage.slider.index');
    }

    public function store(Request $request){
        $this->validate(

                 $request,
                    [
                    'image'    => 'required',
                    ]

                );


       $slider = new slider;

        $image = $request->file('image');

        $input['image'] = time().'.'.$image->getClientOriginalExtension();

        $dist = public_path('/images/slider/');

        $image->move($dist, $input['image']);
        $slider->image=$input['image'];
        $slider->decs=$request->decs;
        $slider->decs_ar=$request->decs_ar;
        $slider->name=$request->name;
        $slider->name_ar=$request->name_ar;
        $slider->button=$request->button;
        $slider->button_link=$request->button_link;
        $slider->button_ar=$request->button_ar;

        $slider->save();
        return 1;
    }

    public function edit($id)
    {
      $slider=slider::find($id);
      return $slider;
    }


      public function update(Request $request){
         
       $slider =slider::find($request->id);
       if($request->image){
        $image = $request->file('image');
        $input['image'] = time().'.'.$image->getClientOriginalExtension();
        $dist = public_path('/images/slider/');
        $image->move($dist, $input['image']);
        $slider->image=$input['image'];
       }
        $slider->decs=$request->decs;
        $slider->decs_ar=$request->decs_ar;
        $slider->name=$request->name;
        $slider->name_ar=$request->name_ar;
        $slider->button=$request->button;
        $slider->button_link=$request->button_link;
        $slider->button_ar=$request->button_ar;



        $slider->save();
        return 1;
    }


      public function destroy($id)
    {
        $this->delete_process($id);
      slider::find($id)->delete();

    }


       private function delete_process($id)

   {
       $slider = slider::findOrFail($id);
       $slider = public_path('/images/slider/').$slider->image;

       if(file_exists($slider))

       {

           File::delete($slider);

       }

   }



	private function mainFunction ($data)

		{
 			return Datatables::of($data)->addColumn('action' ,function($data){

            $test='<a onclick="editData('.$data->id.')"  class="buttonload btn btn-primary"><i class="fa fa-spinner fa-spin" id="load_'.$data->id.'" style="display:none"></i> edit</a> '.'

            <a onclick="deleteData('.$data->id.')" class="btn btn-danger">delete</a>';  
            return $test;

            })->editColumn('image',function($data){

              $image='<img  src="/images/slider/'.$data->image.'" width="200px" height="120px">';
              return $image;

		    })->rawColumns(['action' => 'action','image'=>'image'])->make(true);
		}

}