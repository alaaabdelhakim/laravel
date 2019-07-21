@extends('layouts.manage')
@section('title')
slider
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
            <h4 class="page-title">slider</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">main</a></li>
                <li class="breadcrumb-item active">slider</li>
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
                                    <h4 class="m-t-0 header-title">slider</h4>
                                    <p class="text-muted font-14 m-b-30">
                            <a href="#custom-modal" id="test" class="btn btn-custom btn-rounded w-md waves-effect waves-light mb-4" onclick="addFunc()" data-animation="fadein" data-plugin="custommodal"
                                       data-overlaySpeed="200" data-overlayColor="#36404a">Add new slider
                                       <i class="mdi mdi-plus-circle"></i>
                                     </a>
                                    </p>

                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>image</th>
                                            <th>button</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container -->

                </div> <!-- content -->
        @include('manage.slider.show')

@endsection


@section('script')

        <!-- Required datatable js -->

        <script src="/manage/plugins/datatables/jquery.dataTables.min.js"></script>

        <script src="/manage/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Modal-Effect -->
        <script src="/manage/plugins/custombox/js/custombox.min.js"></script>
        <script src="/manage/plugins/custombox/js/legacy.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




<script type="text/javascript">
    
        var table = $('#datatable').DataTable({

        bLengthChange: false,

        searching: false,

        responsive: true,

        'processing': true,

        'language': {

            'loadingRecords': '&nbsp;',

            'processing': '<div class="spinner"></div>'

        },

        serverSide:true,

        order: [[0, 'desc']],

        buttons: ['copy', 'excel', 'pdf'],

        ajax:"{{ route('slider.allData') }}",

        columns:[

        {data:'id' , name :'id'},

        {data:'image' , name :'image'},

        {data:'action' , name :'action',orderable:false,searchable:false},





        ]

        });

    function addFunc(){
        save_method='add';
        $('#save').text('save');
        $('#title').text('Add new slider');
        $('#form_test')[0].reset();
    }

    $('#form_test').submit(function(e){
       e.preventDefault();
            $("#save").attr("disabled", true);
       var id =$('#id').val();
    if(save_method=='add') url = "{{ route('slider.store') }}";
    else url ="{{ route('slider.update') }}";
    var formData = new FormData($('#form_test')[0]);

    $.ajax({

     url:url,

     type:"post",

     data: formData,

     contentType:false,

     processData:false,

     success: function(data){

              if(data == 1){

            Custombox.close();


    window.setTimeout(function(){

            swal("success", {

              icon: "success",

            });

    }, 800);

            table.ajax.reload();

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


    function editData(id)
    {
        save_method='edit';
        $('#err').slideUp(200);
        $('#load_'+id).css({'display':''});
   $.ajax({

     url : "/manage/slider/edit/" + id,

     type :"GET",

     dataType :"JSON",

     success : function(data){
        $('#load_'+id).css({'display':'none'});
        $('#save').text('edit');
        $('#title').text('Edit slider');
        $('#form_test')[0].reset();
        Custombox.open({
            target: '#custom-modal',
            effect: 'fadein'
        });


         $('#decs_ar').val(data.decs_ar);
         $('#decs').val(data.decs);
         $('#name').val(data.name);
         $('#name_ar').val(data.name_ar);
         $('#button').val(data.button);
         $('#button_ar').val(data.button_ar);
         $('#button_link').val(data.button_link);

         $('#id').val(data.id);

       }

       });


    }

    function deleteData(id) {


swal({



  title: "are you sure?",

  icon: "warning",

  buttons: true,

  dangerMode: true,

}).then((willDelete) => {

  if (willDelete) {





    $.ajax({

     url : "/manage/slider/destroy/" + id,

     type : "get",

     success : function (data){

      table.ajax.reload();

    swal("Successfully deleted", {

      icon: "success",

    });

     },



     error: function(){

      alert(5);

     }



    });

}else{

    swal("Certificates deleted successflly!");





}

    });

  }


</script>

@endsection
