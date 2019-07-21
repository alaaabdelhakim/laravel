@extends('layouts.manage')
@section('title')
{{ Auth::user()->name }}
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
            <h4 class="page-title" id="main_name"></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">main</a></li>
                <li class="breadcrumb-item active" id="name_5">{{ Auth::user()->name }}</li>
            </ol>
        </div>
    </li>

</ul>

@endsection

@section('content')
@include('manage.profile.edit')
            <!--    <div class="loding-div">-->
            <!--<div class="lds-ring"><div></div><div></div><div></div><div></div></div>-->
            <!--    </div>-->

                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <!-- meta -->
                                <div class="profile-user-box card-box bg-custom">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <span class="float-left mr-3"><img src="/manage/images/users/avatar-1.jpg" alt="" class="thumb-lg rounded-circle"></span>
                                            <div class="media-body text-white">
                                                <h4 class="mt-1 mb-1 font-18" id="name_2"></h4>
                                                <p class="font-13 text-light" id="jop_2"></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-right">
                            <a href="#custom-modal" id="test" class="btn btn-light waves-effect" data-animation="fadein" data-plugin="custommodal"
                                       data-overlaySpeed="200" data-overlayColor="#36404a">Edit Informations
                                       <i class="fa fa-wrench"></i>
                                     </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ meta -->
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-4">
                                <!-- Personal-Information -->
                                @include('manage.profile.about_user')
                                <!-- Personal-Information -->


                            </div>

                            <!-- end col -->

                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

@endsection

@section('script')
        <!-- Required datatable js -->

        <script src="/manage/plugins/datatables/jquery.dataTables.min.js"></script>

        <script src="/manage/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- Modal-Effect -->
        <script src="/manage/plugins/custombox/js/custombox.min.js"></script>
        <script src="/manage/plugins/custombox/js/legacy.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<script type="text/javascript">

$( document ).ready(function() {

    getInfo();
});


</script>



<script type="text/javascript">
    $('#form_test').submit(function(e){
       e.preventDefault();
            $("#save").attr("disabled", true);
        url ="{{ route('profile.update') }}";
    var formData = new FormData($('#form_test')[0]);

    $.ajax({

     url:url,

     type:"post",

     data: formData,

     contentType:false,

     processData:false,

     success: function(data){

              if(data == 1){
                getInfo();

            Custombox.close();


    window.setTimeout(function(){

            swal("success", {

              icon: "success",

            });

    }, 800);


            $("#save").attr("disabled", false);
            $('#err').slideUp(200);



              }

     },

     error: function(y){

              var error = y.responseJSON.errors;

              $('#err').empty();

              for(var i in error){

                for(var k in error[i]){

                  var message=error[i][k];

                  $('#err').append("<li style='color:red'>"+message+"</li>");

              }

            }

            $("#save").attr("disabled", false);

            $('#err').slideDown(200);



     }

    });



    })
</script>


<script type="text/javascript">
    function getInfo()
    {
   $.ajax({

     url : "/manage/profile/getInfo/" + {{ Auth::user()->id }},

     type :"GET",

     dataType :"JSON",

     success : function(data){
    $('#name_2').text(data.name);
    $('#name_3').text(data.name);
    $('#name_4').text(data.name);
    $('#name_5').text(data.name);
    $('#jop_2').text(data.jop);
    $('#jop_3').text(data.jop);
    $('#main_name').text(data.name);
    $('#name_info').text(data.name);
    $('#email_info').text(data.email);
    $('#phone_info').text(data.phone);
    $('#jop_info').text(data.jop);
    document.title = data.name;
        }

       });


    }
</script>


@endsection