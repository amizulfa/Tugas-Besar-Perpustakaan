<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/select2/dist/css/select2.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url("assets/bower_components/font-awesome/css/font-awesome.min.css") ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url("assets/bower_components/Ionicons/css/ionicons.min.css") ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url("assets/dist/css/AdminLTE.min.css") ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url("assets/dist/css/skins/_all-skins.min.css") ?>">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= base_url("assets/bower_components/morris.js/morris.css") ?>">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= base_url("assets/bower_components/jvectormap/jquery-jvectormap.css") ?>">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?= base_url("assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css") ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url("assets/bower_components/bootstrap-daterangepicker/daterangepicker.css") ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic") ?>">
    <script src="<?= base_url("assets/bower_components/jquery/dist/jquery.min.js") ?>"></script>
    <title>PERPUSKITA</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        nav {
            margin: auto;
            text-align: center;
            width: 100%;
            font-family: arial;
        }

        nav ul {
            background: #37988e;
            padding: 0 20px;
            list-style: none;
            position: relative;
            display: inline-table;
            width: 100%;
        }

        nav ul li {
            float: left;
        }

        nav ul li:hover {
            background: #d68d9a;
        }

        nav ul li:hover a {
            color: #000;
        }

        nav ul li a {
            display: block;
            padding: 25px;
            color: #fff;
            text-decoration: none;
        }
    </style>

</head>

<body>
    <nav>
        <ul>
            <li><a href="<?= site_url("home") ?>">Home</a></li>
            <li><a href="<?= site_url("about") ?>">About</a></li>
            <li><a href="<?= site_url("daftarbuku") ?>">Daftar Buku</a></li>
            <li style="float: right; background-color:#37988e;" class="logo-lg">
                <a href=""><b>PERPUS</b>KITA</a>
            </li>
            <li style="float: right;"><a href="<?= site_url("login") ?>">Login</a></li>
        </ul>
    </nav>
    <script src="<?= site_url() ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="<?= base_url("assets/bower_components/select2/dist/js/select2.full.min.js") ?>"></script>
    <script src="<?= base_url("assets/bower_components/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
    <script src="<?= base_url("assets/bower_components/raphael/raphael.min.js") ?>"></script>
    <script src="<?= base_url("assets/bower_components/morris.js/morris.min.js") ?>"></script>
    <script src="<?= base_url("assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") ?>"></script>
    <script src="<?= base_url("assets/bower_components/jquery-knob/dist/jquery.knob.min.js") ?>"></script>
    <script src="<?= base_url("assets/bower_components/moment/min/moment.min.js") ?>"></script>
    <script src="<?= base_url("assets/bower_components/bootstrap-daterangepicker/daterangepicker.js") ?>"></script>
    <script src="<?= base_url("assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") ?>"></script>
    <script src="<?= base_url("assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js") ?>"></script>
    <script src="<?= base_url("assets/bower_components/fastclick/lib/fastclick.js") ?>"></script>
    <script src="<?= base_url("assets/dist/js/adminlte.min.js") ?>"></script>
    <script src="<?= base_url("assets/dist/js/pages/dashboard.js") ?>"></script>
    <script src="<?= base_url("assets/dist/js/demo.js") ?>"></script>
    <script src="<?= base_url("assets/bower_components/datatables.net/js/jquery.dataTables.min.js") ?>"></script>
    <script src="<?= base_url("assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js") ?>"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
        })
    </script>

    <script>
        $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
</body>

</html>