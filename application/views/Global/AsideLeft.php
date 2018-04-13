<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Usr</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo $_SESSION["TipoUsuario"];?></b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->

          <!-- Tasks: style can be found in dropdown.less -->
      
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/AdminLTE/dist/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION["FullName"];?></span>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>


  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>

        <li class="">
          <a href="<?php echo site_url('Inicio/pacientes') ?>">
            <i class="glyphicon glyphicon-user"></i> <span>Lista de Pacientes</span>
          </a>
        </li>

        <li class="">
          <a href="<?php echo site_url('Inicio/consulta') ?>">
            <i class="  glyphicon glyphicon-copy"></i> <span>Nueva Consulta</span>
          </a>
        </li>

        <!--<li class="">
          <a href="<?php echo site_url('Inicio/BuscarConsulta') ?>">
            <i class="  glyphicon glyphicon-search"></i> <span>Buscar Consulta</span>
          </a>
        </li>





          <li class="treeview ">
          <a href="#">
            <i class="glyphicon glyphicon-wrench"></i> <span>Configuraciones de la cuenta</span>
          </a>
        </li>-->

        <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Lorem</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Lorem</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Lorem</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Lorem</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Lorem</a></li>
          </ul>
        </li>-->

        <!--<li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Lorem</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">Nuevo</small>
            </span>
          </a>
        </li>-->

        <li>
          <a href="<?php echo base_url('index.php/Sesion/logout_ci');?>">
            <i class="fa fa-share"></i> <span>Cerrar Sesion</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
