<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Doctor Baby Control</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css');?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/bower_components/Ionicons/css/ionicons.min.css');?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/dist/css/AdminLTE.min.css');?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/plugins/iCheck/square/blue.css');?>">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Registro</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Ingrese sus Datos</p>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nombre" id="Nombre">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Apellido Paterno" id="ApellidoPaterno">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Apellido Materno" id="ApellidoMaterno">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Correo Electronico" id="Correo">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" id="Contrasena">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Repetir Contraseña" id="ReContrasena">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
            <div class="row">
        <div class="col-xs-8">
          <a href="<?php echo base_url(); ?>">Ya cuento con un Usuario!</a>
        </div>
        <div class="col-xs-4">
          <input type="button" class="btn btn-primary btn-block btn-flat" id="Registrar" value="Registrar">
        </div>
      </div>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/AdminLTE/bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE/plugins/iCheck/icheck.min.js');?>"></script>

<script src="<?php echo base_url('assets/sources/js/jquery-1.11.3.min.js');?>"></script>
<script src="<?php echo base_url('assets/sources/js/Registro.js');?>"></script>

</body>
</html>
