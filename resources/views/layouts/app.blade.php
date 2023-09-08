<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Acme')</title>


        <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>

        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('css/fontawesome/css/all.css')}}" rel="stylesheet">
        <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/plugins/footable/footable.core.css')}}" rel="stylesheet">
        <link href="{{asset('css/plugins/iCheck/custom.css')}}" rel="stylesheet">
        <link href="{{asset('css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body class="@yield('body-class') pace-done">

        @yield('content')
        
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
        <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('js/plugins/dataTables/datatables.min.js')}}"></script>
        <script src="{{asset('js/plugins/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('js/plugins/flot/jquery.flot.spline.js')}}"></script>
        <script src="{{asset('js/plugins/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('js/plugins/flot/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('js/plugins/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('js/demo/peity-demo.js')}}"></script>
        <script src="{{asset('js/plugins/footable/footable.all.min.js')}}"></script>
        <script src="{{asset('js/inspinia.js')}}"></script>
        <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>
        <!--<script src="{{asset('js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>-->
        <script src="{{asset('js/plugins/gritter/jquery.gritter.min.js')}}"></script>
        <script src="{{asset('js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('js/demo/sparkline-demo.js')}}"></script>
        <script src="{{asset('js/plugins/chartJs/Chart.min.js')}}"></script>
        <script src="{{asset('js/plugins/toastr/toastr.min.js')}}"></script>
        <script src="{{asset('js/plugins/iCheck/icheck.min.js')}}"></script>
    </body>
</html>