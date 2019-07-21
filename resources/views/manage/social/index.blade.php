@extends('layouts.manage')
@section('title')
social
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
            <h4 class="page-title">social</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">main</a></li>
                <li class="breadcrumb-item active">social</li>
            </ol>
        </div>
    </li>

</ul>

@endsection

@section('content')

                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">Social</h4>
                                            <form method="post" action="{{ route('social.update') }}" enctype="multipart/form-data">
                                                @csrf
                                            <div class="row">
                                                <div class=" col-12">
                                                    <label>Facebook Link:</label>
                                                    <input type="text" value="{{ $social->facebook }}" id="facebook" name="facebook" class="form-control" style="width: 80%; margin-bottom: 15px"/>
                                                </div>

                                                <div class=" col-12">
                                                    <label>Twitter Link:</label>
                                                    <input type="text" value="{{ $social->twitter }}" id="twitter" name="twitter" class="form-control" style="width: 80%; margin-bottom: 15px"/>
                                                </div>

                                                <div class=" col-12">
                                                    <label>Pinterest Link:</label>
                                                    <input type="text" value="{{ $social->pinterest }}" id="pinterest" name="pinterest" class="form-control" style="width: 80%; margin-bottom: 15px"/>
                                                </div>

                                                <div class=" col-12">
                                                    <label>Linkedin Link:</label>
                                                    <input type="text" value="{{ $social->linkedin }}" id="linkedin" name="linkedin" class="form-control" style="width: 80%; margin-bottom: 15px"/>
                                                </div>

                                                <div class=" col-12">
                                                    <label>Flickr Link:</label>
                                                    <input type="text" value="{{ $social->flickr }}" id="flickr" name="flickr" class="form-control" style="width: 80%; margin-bottom: 15px;"/>
                                                </div>
                                            </div>
                                                <button class="buttonload btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit" id="save" style="margin-top: 10px"/>
                                                  Update
                                                </button>

                                            </form>
                                </div>
                                                                                <!-- end row -->
                    </div> <!-- container -->

                </div> <!-- content -->

@endsection