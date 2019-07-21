@extends('layouts.manage')
@section('title')
contact message
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
            <h4 class="page-title">contact message</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">main</a></li>
                <li class="breadcrumb-item active">contact message</li>
            </ol>
        </div>
    </li>

</ul>

@endsection

@section('content')

                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">contact message</h4>

                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>message</th>
                                            <th>action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                          @foreach ($rows as $row)
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->email }}</td>
                                            <td>{{ $row->msg }}</td>
                                       <form action="{{ route('contact.destroy', $row->id) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <td><button class="btn btn-danger"><i class="fa fa-trash" type="submit>"></i> Delete</button></td>
                                       </form>
                                          

                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container -->

                </div> <!-- content -->

@endsection


@section('script')

        <!-- Required datatable js -->

        <script src="/manage/plugins/datatables/jquery.dataTables.min.js"></script>

        <script src="/manage/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Modal-Effect -->
        <script src="/manage/plugins/custombox/js/custombox.min.js"></script>
        <script src="/manage/plugins/custombox/js/legacy.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


@endsection