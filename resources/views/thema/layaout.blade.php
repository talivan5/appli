<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | Boxed Layout</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('asset/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('asset/adminlte/dist/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini layout-boxed">
           
            <!-- Site wrapper -->
            <div class="wrapper">
                    @include("thema/aside")
                @include("thema/header")
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                        <section class="content">
                                <!--contenido del medio-->
                        </section>
                </div>
    <!-- Control Sidebar -->
                @include("thema/footer")
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
        <!-- /.control-sidebar -->
            </div>
    <!-- ./wrapper -->

            <!-- jQuery -->
            <script src="{{asset('asset/adminlte/plugins/jquery/jquery.min.js')}}"></script>
            <!-- Bootstrap 4 -->
            <script src="{{asset('asset/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <!-- AdminLTE App -->
            <script src="{{asset('asset/adminlte/dist/js/adminlte.min.js')}}"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="{{asset('asset/adminlte/dist/js/demo.js')}}"></script>
    </body>
</html>