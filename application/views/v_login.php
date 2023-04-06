<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login PERPUSKITA</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url("assets/bower_components/bootstrap/dist/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/bower_components/font-awesome/css/font-awesome.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/bower_components/Ionicons/css/ionicons.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/dist/css/AdminLTE.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/plugins/iCheck/square/blue.css") ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        .login {
            font-size: 25px;
            font-weight: bold;
            color: navy;

        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">

        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg login">Login PERPUSKITA</p>
            <?= $this->session->flashdata('info', '<div class="alert alert-danger" role="alert"><strong>Login Gagal !</strong> Username atau Password yang anda masukan salah</div>'); ?>

            <form action="<?= site_url("login/proses_login") ?>" method="post">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="username" name="username" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">Remember me</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Masuk</button>
                    <a href="<?= site_url("home") ?>" class="btn btn-warning">Cancel</a>
                </div>

                <!-- /.card-footer -->
            </form>


            <script src="<?= base_url("assets/bower_components/jquery/dist/jquery.min.js") ?>"></script>
            <script src="<?= base_url("assets/bower_components/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
            <script src="<?= base_url("assets/plugins/iCheck/icheck.min.js") ?>"></script>
            <script>
                $(function() {
                    $('input').iCheck({
                        checkboxClass: 'icheckbox_square-blue',
                        radioClass: 'iradio_square-blue',
                        increaseArea: '20%' /* optional */
                    });
                });
            </script>
</body>

</html>