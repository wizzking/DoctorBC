<?php $this->load->view('Global/Header');?>
<?php $this->load->view('Global/AsideLeft');?>
<link rel="stylesheet" href="<?php echo base_url('assets/sources/css/TomEliezer.css');?>">
  
  <div class="content-wrapper">

   	<section>
    	<form>

    		<div class="container-table padding ">
    			<input id="id_Medico" type="hidden" value="<?php echo $this->session->userdata('Id_Usuario'); ?>">
    			<h1>Primer paso:</h1>
				<h2>Selecciona al paciente</h2>          
				<table class="table table-striped table-hover">
				    <thead>
				    	<tr >
				        	<th>Nombre</th>
				        	<th>Sexo</th>
				      	</tr>
				    </thead>
				    <tbody id="tablaPaciente">
				    	
				    </tbody>
				  </table>
			</div>
    		
    		<div id="datosPaciente" class="padding" ><!-- -->
    			<div class="row">
    				<div class="col-md-12">
    					<h2>Paciente:</h2>
    				</div>
    				<div class="col-md-12 ">
    					<input type="text" class="form-control inpStyle" name="nombrePaciente" id="nombrePaciente">
    				</div>
    				<div class="pull-right Botones3">
    					<div class="btn btn-primary Personales divBoton" data-toggle="modal" data-target="#ModalAntecedentesPersonales">Ver Antecedentes Personales</div>
    					<div class="btn btn-primary Medico divBoton" data-toggle="modal" data-target="#ModalAntecedentesMedicos">Ver Antecedentes Medicos</div>
    					<div class="btn btn-primary cambiar divBoton" id="cambiar">Cambiar Paciente</div>				
    				</div>
    			</div>
    		</div>
    		
    		<div id="recetaMedica" class="table-container padding"> <!--  -->
    			<hr>
    			<table class="table ">
				    <thead>
				    	<tr style="font-weight: bold;font-size: 20px;" >
				        	<th>Medicamento</th>
				        	<th>Cantidad</th>
				        	<th>Dosis</th>
				        	<th>Horas x dosis</th>
				        	<th>Fecha Limite</th>
				      	</tr>
				    </thead>
				    <tbody id="ColumnasTablaPacientes">
				      	<tr>
				        	<td>
				        		<input type="text" name="Table_medicamento" class="form-control inpStyle" id="Table_medicamento">
				        	</td>
				        	<td>
				        		<input type="text" name="Table_cantidad" class="form-control inpStyle" id="Table_cantidad">
				        	</td>
				        	<td>
				    			<input type="text" name="Table_dosis" class="form-control inpStyle" id="Table_dosis">
							</td>
				        	<td>
				        		<select class="form-control inpStyle" id="Table_horaxdosis">
									<option>1</option>
								    <option>2</option>
									<option>3</option>
								    <option>4</option>
									<option>5</option>
								    <option>6</option>
									<option>7</option>
								    <option>8</option>
									<option>9</option>
								    <option>10</option>
									<option>11</option>
								    <option>12</option>
								</select>				        		
				        	</td>
				        	<td>
				        		<input type="date" name="fecha" class="form-control inpStyle" id="Table_date">	
				        	</td>
				      	</tr>
				    </tbody>
				</table>
				    <div class="row">
				    	<div class=" pull-right Botones3">
					    	<div class="btn btn-primary divBoton" id="agregarColumna"><i class="glyphicon glyphicon-plus"></i>Agregar campo</div>
					    	<div class="btn btn-primary divBoton" id="eliminarColumna"><i class="glyphicon glyphicon-minus"></i>Eliminar campo</div>				    		
				    	</div>
				    </div>
			</div>
    	
    		<div id="motivosConsulta"><!--  -->
    			<hr>
    			<div class="row padding">
    				<div class="col-md-12">
    					<div class="form-group">
				  			<label for="motivos" style="font-weight: bold;font-size: 20px;">Motivos de la consulta:</label>
				  			<textarea class="form-control inpStyle" style="padding: 20px;" rows="3" id="motivos"></textarea>
						</div>	
    				</div>
    			</div>
    			<div class=" row padding">
    				<div class="col-md-6 ">
    					<div class="btn btn-primary divBoton" id="atrasNuConsulta">Atras</div>
    				</div>
    				<div class="col-md-6 ">
    					<div class="btn btn-primary divBoton left" id="saveData">Guardar Consulta</div>
    				</div>
    			</div>
    		</div>

			<!-- Modal ANTECEDENTES PERSONALES -->
			
			  <div class="modal fade" id="ModalAntecedentesPersonales" role="dialog">
			    <div class="modal-dialog">
			    
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
			    					<input type="text" id="ModalnombrePaciente" class="form-control inpLocked">
			    				</div>	 			
			         		</div>
			         		<div class="col-md-8">
						       	<div class="form-group">
			    					<label for="fechaPaciente">fecha:</label>
			    					<input type="text" id="ModalfechaPaciente" class="form-control inpLocked">
			    				</div>	 
			         		</div>
			         		<div class="col-md-4">
			         			<div class="form-group">
			    					<label for="edadPaciente">Sexo:</label>
			    					<input type="text" id="ModalsexoPaciente" class="form-control inpLocked">
			    				</div>	 	
			         		</div>		         						         		
			         	</div>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        </div>
			      </div>
			      
			    </div>
			  </div>
			
			<!--fin Modal-->
			<!--Modal ANTECEDENTES MEDICOS-->
			
						  <div class="modal fade" id="ModalAntecedentesMedicos" role="dialog">
			    <div class="modal-dialog">
			   
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
								    <select multiple class="form-control" id="InputAlergias">
		
								   	</select>
			    				</div>	 			
			         		</div>
			         		<div class="col-md-12">
						        <div class="form-group">
						        	<label for="sel2">Antecedentes Heredofamiliares</label>
								    <select multiple class="form-control" id="InputHere">
		
								   	</select>
			    				</div>	 			
			         		</div>
			         		<div class="col-md-12">
						        <div class="form-group">
						        	<label for="sel2">Vacunas</label>
								    <select multiple class="form-control" id="InputVacunas">
					
								   	</select>
			    				</div>	 			
			         		</div>			         					         		
			         		<div class="modal-header">
								<h3 class="modal-title">Ultima Consulta</h3> 	
			         		</div>
			    				<div class="col-md-12">
			    					<div class="form-group">
							  			<label for="ultimaConsulta">Consulta pasada:</label>
							  			<textarea class="form-control" rows="3" id="ultimaConsulta"></textarea>
									</div>	
			    				</div>				         					         		 			      		
			         	</div>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        </div>
			      </div>
			      
			    </div>
			  </div>  
   		 </form>
  	   	</section>	
  </div>



<?php $this->load->view('Global/AsideRight');?>
<?php $this->load->view('Global/Footer');?>
<script src="<?php echo base_url('assets/sources/js/jquery-1.11.3.min.js');?>"></script>
<script src="<?php echo base_url('assets/sources/js/socket.io.js');?>"></script>
<script src="<?php echo base_url('assets/sources/js/conexion.js');?>"></script>
