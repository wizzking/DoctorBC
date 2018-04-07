<?php $this->load->view('Global/Header');?>
<?php $this->load->view('Global/AsideLeft');?>

  

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    	<form>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="form-group">
    					<label for="nombreDoctor">Nombre del Doctor:</label>
    					<input type="text" id="nombreDoctor" class="form-control">
    				</div>	
    			</div>
    			<div class="col-md-6">
    				<div class="form-group">
    					<label for="fecha">Fecha:</label>
    					<input type="text" id="fecha" class="form-control">
    				</div>	
    			</div>
    			<div class="col-md-6">
    				<div class="form-group">
    					<label for="domicilio">Domicilio:</label>
    					<input type="text" id="domicilio" class="form-control">
    				</div>	
    			</div>
    		</div>
    		<div class="container">
				<h2>Pacientes</h2>          
				<table class="table">
				    <thead>
				    	<tr>
				        	<th>Firstname</th>
				        	<th>Lastname</th>
				        	<th>Email</th>
				      	</tr>
				    </thead>
				    <tbody>
				      	<tr>
				        	<td>John</td>
				        	<td>Doe</td>
				        	<td>john@example.com</td>
				      	</tr>
				      	<tr>
				        	<td>Mary</td>
				        	<td>Moe</td>
				        	<td>mary@example.com</td>
				      	</tr>
				    </tbody>
				  </table>
			</div>
    		
    		
    	</form>
    </section>
  </div>



<?php $this->load->view('Global/AsideRight');?>
<?php $this->load->view('Global/Footer');?>
