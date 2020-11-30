
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Dastone - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/default/assets/images/favicon.ico')}}">

        <!-- jvectormap -->
        <link href="{{ asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">

        <!-- App css -->
        <link href="{{ asset('backend/default/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/default/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/default/assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/default/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />


        <!-- DataTables -->
        <link href="{{ asset('backend/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('backend/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" /> 
    </head>

    <body>
        @yield('content')
        <!-- jQuery  -->
        <script src="{{ asset('backend/default/assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('backend/default/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('backend/default/assets/js/metismenu.min.js')}}"></script>
        <script src="{{ asset('backend/default/assets/js/waves.js')}}"></script>
        <script src="{{ asset('backend/default/assets/js/feather.min.js')}}"></script>
        <script src="{{ asset('backend/default/assets/js/simplebar.min.js')}}"></script>
        <script src="{{ asset('backend/default/assets/js/moment.js')}}"></script>
        <script src="{{ asset('backend/plugins/daterangepicker/daterangepicker.js') }}"></script>

        <script src="{{ asset('backend/plugins/apex-charts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
        <script src="{{ asset('backend/default/assets/pages/jquery.analytics_dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/default/assets/js/app.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('backend/plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/default/assets/pages/jquery.datatable.init.js') }}"></script>

        
    </body>

</html>