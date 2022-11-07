
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - @yield('title') </title>

    <!-- Custom fonts for this template-->
    <link href={{ asset('template/vendor/fontawesome-free/css/all.min.css') }} rel = 'stylesheet' type="text/css">
    <link
        href={{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}
        rel="stylesheet"  type="text/css">

    <!-- Custom styles for this template-->
    <link href={{ asset('template/css/sb-admin-2.min.css') }} rel="stylesheet"  type="text/css">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
    @include('admin.sidebar')
               <!-- Content Wrapper -->  
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
        @include('admin.topbar')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"> @yield('content-title')</h1>
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
                
            </div>
            @include('admin.footer')
            </div>
        </div>
</div>
    <!-- Bootstrap core JavaScript-->
    <script src={{ asset('template/vendor/jquery/jquery.min.js') }}></script>
        <script src={{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ asset('template/js/sb-admin-2.min.js') }}></script>

</body>

</html>