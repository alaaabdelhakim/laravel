
@extends('layouts.manage')
@section('title')
main
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
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Welcome {{ Auth::user()->name }} to Dashboard !</li>
            </ol>
        </div>
    </li>

</ul>
@endsection
@section('content')
@endsection
