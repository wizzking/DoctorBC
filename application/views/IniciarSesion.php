<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Iniciar Sesion</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/bower_components/Ionicons/css/ionicons.min.css');?>">
  
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/dist/css/AdminLTE.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE/plugins/iCheck/square/blue.css');?>">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
   <p><b>Doctor Control</b><P>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar Sesion</p>

    <form action="<?php echo base_url('index.php/Sesion/new_sesion'); ?>" method="post">
      <div class="form-group has-feedback">
        <input aria-describedby="usuario-ayuda" class="form-control" id="txtUsuario" placeholder="Usuario" type="text" name="txtUsuario" title="Introduce Usuario" value="<?php echo (isset($usuario)) ? $usuario : ''; ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input class="form-control" id="txtContrasenia" name="txtContrasenia" title="Introduce Contraseña"placeholder="Contraseña" type="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <a href="<?php echo base_url('/index.php/Sesion/Registro'); ?>">Registrarse!</a>
        </div>
        <div class="col-xs-4">
          <button type="submit" id="btn_entrar" class="btn btn-primary btn-block btn-flat">Iniciar</button>
        </div>
      </div>
    </form>
    <?php
          $message = $this->session->flashdata('usuarios');
            if($message){
                echo '<div id="error_text" style="color:#FF0000;">' . $message . '</div>';
            }
        ?>

</div>

<script src="<?php echo base_url('assets/AdminLTE/bower_components/jquery/dist/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/AdminLTE/plugins/iCheck/icheck.min.js');?>"></script>

</body>
</html>
