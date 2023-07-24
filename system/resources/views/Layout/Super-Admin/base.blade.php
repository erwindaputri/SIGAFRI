<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SIGAFRI</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="{{ url('public') }}/admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/admin/assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/admin/assets/plugins/DataTables/datatables.min.css" rel="stylesheet">   


    <!-- Theme Styles -->
    <link href="{{ url('public') }}/admin/assets/css/connect.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/admin/assets/css/dark_theme.css" rel="stylesheet">
    <link href="{{ url('public') }}/admin/assets/css/custom.css" rel="stylesheet">
    <style>
        .tox-statusbar,
        .tox-notification.tox-notification--in.tox-notification--warning {
            display: none;
            opacity: 0
        }
    </style>
</head>

<body>
    {{-- <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div> --}}
    <div class="connect-container align-content-stretch d-flex flex-wrap ">
        @include('Layout.Super-Admin.sidebar')
        <div class="page-container ">
            @include('Layout.Super-Admin.navbar')
            <div class="container-fluid mt-3">
                @include('Layout.Super-Admin.notification')
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{ url('public') }}/admin/assets/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="{{ url('public') }}/admin/assets/plugins/bootstrap/popper.min.js"></script>
    <script src="{{ url('public') }}/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ url('public') }}/admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{ url('public') }}/admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="{{ url('public') }}/admin/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ url('public') }}/admin/assets/plugins/blockui/jquery.blockUI.js"></script>
    <script src="{{ url('public') }}/admin/assets/plugins/flot/jquery.flot.min.js"></script>
    <script src="{{ url('public') }}/admin/assets/plugins/flot/jquery.flot.time.min.js"></script>
    <script src="{{ url('public') }}/admin/assets/plugins/flot/jquery.flot.symbol.min.js"></script>
    <script src="{{ url('public') }}/admin/assets/plugins/flot/jquery.flot.resize.min.js"></script>
    <script src="{{ url('public') }}/admin/assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="{{ url('public') }}/admin/assets/js/connect.min.js"></script>
    <script src="{{ url('public') }}/admin/assets/js/pages/dashboard.js"></script>
    
    <script src="{{ url('public') }}/admin/assets/plugins/DataTables/datatables.min.js"></script>
    <script src="{{ url('public') }}/admin/assets/js/pages/datatables.js"></script>
</body>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
    @stack('script')
</body>

</html>
