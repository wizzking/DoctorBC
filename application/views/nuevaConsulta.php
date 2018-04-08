<?php $this->load->view('Global/Header');?>
<?php $this->load->view('Global/AsideLeft');?>
<link rel="stylesheet" href="<?php echo base_url('assets/sources/css/TomEliezer.css');?>">
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    	<div class="container">
    		<div class="container-img">
    			<img  width="100" height="100" align=center src="<?php echo base_url('assets/sources/img/doctorSimbolo.png')?>">
    		</div>
    		
    	</div>
   	</section>
   	<section>
    	<form>
    		<div class="row padding ">
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
    		<div class="container-table padding ">
				<h2>Pacientes</h2>          
				<table class="table">
				    <thead>
				    	<tr >
				        	<th>Firstname</th>
				        	<th>Lastname</th>
				        	<th>Email</th>
				      	</tr>
				    </thead>
				    <tbody >
				      	<tr class="table-hover">
				        	<td>John</td>
				        	<td>Doe</td>
				        	<td>john@example.com</td>
				      	</tr>
				      	<tr class="table-hover">
				        	<td>Mary</td>
				        	<td>Moe</td>
				        	<td>mary@example.com</td>
				      	</tr>
				    </tbody>
				  </table>
			</div>
    		<div id="datosPaciente" class="padding" >
    			<div class="row">
    				<div class="col-md-12">
    					<h2>Paciente:</h2>
    				</div>
    				<div class="col-md-11 ">
    					<input type="text" class="form-control" name="nombrePaciente" id="nombrePaciente">
    				</div>
    				<div class="col-md-12 col-md-offset-3">
    					<div class="btn btn-primary Personales" data-toggle="modal" data-target="#ModalAntecedentesPersonales">Ver Antecedentes Personales</div>
    					<div class="btn btn-primary Medicos" data-toggle="modal" data-target="#ModalAntecedentesMedicos">Ver Antecedentes Medicos</div>
    					<div class="btn btn-primary cambiar" id="cambiar">Cambiar Paciente</div>				
    				</div>
    			</div>
    		</div>
    		<div >
    			<div class="row padding">
    				<div class="col-md-12">
    					<div class="form-group">
				  			<label for="motivos">Motivos de la consulta:</label>
				  			<textarea class="form-control" rows="3" id="motivos"></textarea>
						</div>	
    				</div>
    			</div>
    			<div class=" row padding">
    				<div class="col-md-12">
    					<div class="btn btn-primary">Guardar Consulta</div>
    				</div>
    			</div>
    		</div>
			<!-- Modal ANTECEDENTES PERSONALES -->
			  <div class="modal fade" id="ModalAntecedentesPersonales" role="dialog">
			    <div class="modal-dialog">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h1 class="modal-title">Antecedentes Personales</h1>
			        </div>
			        <div class="modal-body">
			         	<div class="row">
			         		<div class="col-md-12">
						        <div class="form-group">
			    					<label for="nombrePaciente">Nombre:</label>
			    					<input type="text" id="nombrePaciente" class="form-control">
			    				</div>	 			
			         		</div>
			         		<div class="col-md-8">
						       	<div class="form-group">
			    					<label for="fechaPaciente">fecha:</label>
			    					<input type="text" id="fechaPaciente" class="form-control">
			    				</div>	 
			         		</div>
			         		<div class="col-md-4">
			         			<div class="form-group">
			    					<label for="edadPaciente">Edad:</label>
			    					<input type="text" id="edadPaciente" class="form-control">
			    				</div>	 	
			         		</div>
			         		<div class="col-md-12">
			         			<div class="form-group">
			    					<label for="domicilioPaciente">Domicilio:</label>
			    					<input type="text" id="domicilioPaciente" class="form-control">
			    				</div>	 	
			         		</div>
			         		<div class="col-md-6">
			         			<div class="form-group">
			    					<label for="sexoPaciente">Sexo:</label>
			    					<input type="text" id="sexoPaciente" class="form-control">
			    				</div>				         			
			         		</div> 			         		
			         		<div class="col-md-6">
			         			<div class="form-group">
			    					<label for="edadPaciente">Edad:</label>
			    					<input type="text" id="edadPaciente" class="form-control">
			    				</div>	 	
			         		</div>					         		
			         	</div>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>
			      
			    </div>
			  </div>
			<!--fin Modal-->
			<!--Modal ANTECEDENTES MEDICOS-->
						  <div class="modal fade" id="ModalAntecedentesMedicos" role="dialog">
			    <div class="modal-dialog">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h1 class="modal-title">Antecedentes Medicos</h1>
			        </div>
			        <div class="modal-body">
			         	<div class="row">
			         		<div class="col-md-12">
						        <div class="form-group">
						        	<label for="sel2">Alergias</label>
								    <select multiple class="form-control">
								        <option>Ibuprofeno</option>
								        <option>Pelo de Gato</option>
								   	</select>
			    				</div>	 			
			         		</div>
			         		<div class="col-md-12">
						        <div class="form-group">
						        	<label for="sel2">Antecedentes Heredofamiliares</label>
								    <select multiple class="form-control">
								        <option>Sida</option>
								        <option>Anemia</option>
								   	</select>
			    				</div>	 			
			         		</div>
			         		<div class="col-md-12">
						        <div class="form-group">
						        	<label for="sel2">Vacunas</label>
								    <select multiple class="form-control">
								        <option>Tetano</option>
								        <option>Hipotermia</option>
								   	</select>
			    				</div>	 			
			         		</div>			         					         		
			         		<div class="modal-header">
								<h3 class="modal-title">Ultima Enfermedad</h3> 	
			         		</div>
			         		<div class="col-md-12">
			         			<div class="form-group">
			    					<label for="nombreEnfermedad">Nombre de la Enfermedad:</label>
			    					<input type="text" id="nombreEnfermedad" class="form-control">
			    				</div>	 	
			         		</div>
			         		<div class="col-md-6">
			         			<div class="form-group">
			    					<label for="inicioEnfermedad">Inicio de la enfermedad:</label>
			    					<input type="text" id="inicioEnfermedad" class="form-control">
			    				</div>				         			
			         		</div> 			         						         		
			         	</div>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>
			      
			    </div>
			  </div>  
   		 </form>
  	   	</section>	
  </div>



<?php $this->load->view('Global/AsideRight');?>
<?php $this->load->view('Global/Footer');?>
