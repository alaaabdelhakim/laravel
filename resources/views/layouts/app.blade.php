<!DOCTYPE html>
<html lang="en"> 
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>HSCO</title>
		<link rel="stylesheet" href="/front/css/bootstrap.min.css">
		@if(Request::segment(1)=='ar')
		<link rel="stylesheet" href="/front/css/bootstrap-rtl.css">
		<link rel="stylesheet" href="/front/css/styleAr.css">
		@else
		<link rel="stylesheet" href="/front/css/style.css">
		<link rel="stylesheet" href="/front/css/theme.css">
		@endif
		<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/front/css/animate.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon" href="/front/img/HSCO_logo.jpg" type="image/x-icon">
	</head>
	<body>


    @include('layouts.header')
		
	@include('layouts.slider')
		<!-- end of slider section -->

		<!--specialties-->
	@include('layouts.products')
		<!----->

		<!--about us-->
	@include('layouts.about')
		<!----->
		
		<!--contact-->
	@include('layouts.contact')

		<!--footer-->
	@include('layouts.footer')
		<!----->
		
		<!--icon--->
	@include('layouts.sidenav')
		<!----->
		
		
		<!-- script tags ============================================================= -->
		<script src="/front/js/jquery-2.1.3.min.js"></script>

		<script src="/front/js/bootstrap.min.js"></script>
		<!--Active jQuery-->
		<script src="/front/js/jquery.visible.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">

$('#contactform').on('submit',function(e){
	e.preventDefault();
	$('#contactform').attr("disabled", true);
	    var formData = new FormData($('#contactform')[0]);
	$.ajax({

		url:  '/contactform',

		type: 'post',

		data: formData,
	     contentType:false,

	     processData:false,

	success: function(data)
	{
		if(data==1){
        $('#contactform')[0].reset();

            swal("{{trans('main.msg')}}", {

              icon: "success",

            });
		}
	}


		});

});


</script>

</body>
</html>