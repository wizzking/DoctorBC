<?php $this->load->view('Global/Header');?>
<?php $this->load->view('Global/AsideLeft');?>

  


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrador
        <small>1.0</small>
      </h1>



   <div class="content-wrapper">
        
  <br><br><br>
  <div class="row">
    <div class="col-xs-3">
      <select class="form-control col-xs-3" name="" id="idHijo"></select>(te mando todos los datos de los hijos, se encuentran en la consola impresos)<br>
      <button class="btn btn-default" id="btnSendIdH">INICIAR CONSULTA</button>
    </div>
    <br><br><br><br>

  </div>
  <div class="row">
    <div class="col-xs-4">
      <input type="text" id="nombreM" placeholder="Nombre medicamento"><br>
    <textarea id="descripcion" cols="30" rows="10" placeholder="descripcion"></textarea><br>
    <input type="number" placeholder="hora" id="hora"> <span>hora/s</span><br>
    <input type="date" id="fecha" placeholder="fecha limite"><br>
    <button id="guardarC">Guardar</button>
    </div>
  </div>



   
  </div>

    </section>
  </div>



<?php $this->load->view('Global/AsideRight');?>
<?php $this->load->view('Global/Footer');?>
<script src="<?php echo base_url('assets/sources/js/jquery-1.11.3.min.js');?>"></script>
<script src="<?php echo base_url('assets/sources/js/socket.io.js');?>"></script>
<script src="<?php echo base_url('assets/sources/js/conexion.js');?>"></script>

  


