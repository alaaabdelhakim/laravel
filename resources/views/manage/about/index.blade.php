@extends('layouts.manage')
@section('title')
about us
@endsection

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('header')
<ul class="list-inline menu-left mb-0">
    <li class="float-left">
        <button class="button-menu-mobile open-left disable-btn">
            <i class="dripicons-menu"></i>
        </button>
    </li>
    <li>
        <div class="page-title-box">
            <h4 class="page-title">about us</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">main</a></li>
                <li class="breadcrumb-item active">about us</li>
            </ol>
        </div>
    </li>

</ul>

@endsection

@section('content')

                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
<img src="/images/about/{{$about->image}}" alt="" width="120px">
                        
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">about us</h4>
                                            <form method="post" action="{{ route('about.update') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                <div class="col-12">
                                                    <label for="password3">Image:</label>
                                                    <input  class="form-control" type="file"  id="image" name="image" style="width: 25%; margin-bottom: 15px; padding: 5px"/>
                                                </div>

                                                <div class="form-group col-6">
                                                    <label>Description:</label>
                                                    <textarea  name="about_us" id="about_us" rows="10" style="width: 100%">
                                                    {{ $about->about_us }}
                                                    </textarea>
                                                </div>

                                                <div class="col-6">
                                                    <label>Arabic Description:</label>
                                                    <textarea  name="about_us_ar" id="about_us_ar" rows="10" style="width: 100%">
                                                      {{ $about->about_us_ar }}
                                                    </textarea>
                                                </div>

                                                <div class=" col-12">
                                                    <label>Email:</label>
                                                    <input type="email" value="{{ $about->email }}" id="email" name="email" class="form-control" style="width: 80%; margin-bottom: 15px"/>
                                                </div>

                                                <div class=" col-12">
                                                    <label>Phone:</label>
                                                    <input type="text" value="{{ $about->phone1 }}" id="phone1" name="phone1" class="form-control" style="width: 80%; margin-bottom: 15px"/>
                                                </div>

                                                <div class=" col-12">
                                                    <label>Address:</label>
                                                    <input type="text" value="{{ $about->address }}" id="address" name="address" class="form-control" style="width: 80%; margin-bottom: 15px"/>
                                                </div>

                                                <div class=" col-12">
                                                    <label>Arabic Address:</label>
                                                    <input type="text" value="{{ $about->address_ar }}" id="address_ar" name="address_ar" class="form-control" style="width: 80%; margin-bottom: 15px"/>
                                                </div>

                                                <div class=" col-12">
                                                    <label>Telephone:</label>
                                                    <input type="text" value="{{ $about->tel }}" id="tel" name="tel" class="form-control" style="width: 80%; margin-bottom: 15px"/>
                                                </div>


                                                <button class="buttonload btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit" id="save" style="margin-top: 10px"/>
                                                  Update
                                                </button>
                                            </div>
                                            </form>
                                </div>
                                                                                <!-- end row -->
                    </div> <!-- container -->

                </div> <!-- content -->

@endsection


