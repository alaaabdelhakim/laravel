<?php

namespace App\Http\Controllers\Manage;



use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\contact;

use App\Models\products;

use App\Models\settings;

use App\Models\slider;

use Yajra\DataTables\DataTables;

use Auth,File;
s


class pageController  extends Controller

{



	public function about()

	{
		$active=100;

		return view('pages.about',compact('active'));

	}


	public function contact()

	{
		$active=2;

		return view('pages.contact',compact('active'));

	}
	public function products()

	{

		return view('pages.products');

	}




	public function home()

	{

		return view('pages.home');


	}



}