
<!DOCTYPE html>
<html lang="en">

    
<head>
        <meta charset="utf-8" />
        <title>Administrator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/default/assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('backend/default/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/default/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/default/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">

      @yield('content')

        <!-- jQuery  -->
        <script src="{{ asset('backend/default/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/default/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/default/assets/js/waves.js') }}"></script>
        <script src="{{ asset('backend/default/assets/js/feather.min.js') }}"></script>
        <script src="{{ asset('backend/default/assets/js/simplebar.min.js') }}"></script>

        
    </body>


</html>