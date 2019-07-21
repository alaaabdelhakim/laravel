<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Custom box css -->
        <link href="/manage/plugins/custombox/css/custombox.min.css" rel="stylesheet">

        <!--calendar css-->
        <link href="/manage/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />

        <!-- App css -->
        <link href="/manage/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/manage/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/manage/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="/manage/css/style.css" rel="stylesheet" type="text/css" />
        <script src="/manage/js/modernizr.min.js"></script>
        <script src="vendor/ckeditor/ckeditor.js"></script>


<style type="text/css">

@keyframes spinner {

  to {transform: rotate(360deg);}

}



.spinner:before {

  content: '';

  box-sizing: border-box;

  position: absolute;

  top: 20%;

  left: 50%;

  width: 20px;

  height: 20px;

  margin-top: -10px;

  margin-left: -10px;

  border-radius: 50%;

  border: 2px solid #ccc;

  border-top-color: #333;

  animation: spinner .6s linear infinite;

}



</style>

        @yield('style')

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">
             @include('include.sidebar')

            <div class="content-page">
            @include('include.header')
               @yield('header')

                    </nav>

                </div>

            @yield('content')

        </div>


        <!-- jQuery  -->

        <script src="/manage/js/jquery.min.js"></script>
        <script src="/manage/js/bootstrap.bundle.min.js"></script>
        <script src="/manage/js/metisMenu.min.js"></script>
        <script src="/manage/js/jquery.slimscroll.js"></script>

        <script src="/manage/plugins/tinymce/tinymce.min.js"></script>

        <!-- KNOB JS -->
        <script src="/manage/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <script src="/manage/pages/jquery.dashboard.init.js"></script>

        <!-- App js -->
        <script src="/manage/js/jquery.core.js"></script>
        <script src="/manage/js/jquery.app.js"></script>

        @yield('script')
<script type="text/javascript">
 


    </body>
</html>