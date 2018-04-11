<?php $this->load->view('Global/Header');?>
<?php $this->load->view('Global/AsideLeft');?>
<link rel="stylesheet" href="<?php echo base_url('assets/sources/css/TomEliezer.css');?>">
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <!--
    <section class="content-header">
    	<div class="container">
    		<div class="container-img">
    			<img  width="100" height="100" align=center src="<?php echo base_url('assets/sources/img/doctorSimbolo.png')?>">
    		</div>
    		
    	</div>
   	</section>
  --> 	
   	<section>
    	<form>
    <!--
    		<div class="row padding " id="datosDoctor">
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
    	-->
    		<div class="container-table padding ">
    			<h1>Primer paso:</h1>
				<h2>Selecciona al paciente</h2>          
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
    		<div id="recetaMedica" class="table-container padding">
    			<table class="table">
				    <thead>
				    	<tr >
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
				        		<input type="text" name="medicamento" class="form-control">
				        	</td>
				        	<td>
				        		<input type="text" name="cantidad" class="form-control">
				        	</td>
				        	<td>
				    			<input type="text" name="dosis" class="form-control">
							</td>
				        	<td>
				        		<select class="form-control">
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
									<option>13</option>
								    <option>14</option>
									<option>15</option>
								    <option>16</option>
									<option>17</option>
								    <option>18</option>
									<option>19</option>
								    <option>20</option>	
								    <!--obciones que iran del 1 al 24-->
								</select>				        		
				        	</td>
				        	<td>
				        		<input type="date" name="fecha" class="form-control">	
				        	</td>
				      	</tr>
				    </tbody>
				</table>
				    <div class="row">
				    	<div class="col-md-12 col-md-offset-4">
					    	<div class="btn btn-primary" id="agregarColumna"><i class="glyphicon glyphicon-plus"></i>Agregar campo</div>
					    	<div class="btn btn-primary" id="eliminarColumna"><i class="glyphicon glyphicon-minus"></i>Eliminar campo</div>				    		
				    	</div>
				    </div>
			</div>
    	
    		<div id="motivosConsulta">
    			<div class="row padding">
    				<div class="col-md-12">
    					<div class="form-group">
				  			<label for="motivos">Motivos de la consulta:</label>
				  			<textarea class="form-control" rows="3" id="motivos"></textarea>
						</div>	
    				</div>
    			</div>
    			<div class=" row padding">
    				<div class="col-md-6 ">
    					<div class="btn btn-primary" id="atrasNuConsulta">Atras</div>
    				</div>
    				<div class="col-md-6 ">
    					<div class="btn btn-primary left">Guardar Consulta</div>
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
			         		<div class="col-md-6">
			         			<div class="form-group">
			    					<label for="sexoPaciente">Sexo:</label>
			    					<input type="text" id="sexoPaciente" class="form-control">
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
								<h3 class="modal-title">Ultima Consulta</h3> 	
			         		</div>
			    				<div class="col-md-12">
			    					<div class="form-group">
							  			<label for="ultimaConsulta">Consulta pasada:</label>
							  			<textarea class="form-control" rows="3" id="ultimaConsulta"></textarea>
									</div>	
			    				</div>				         			
			         		<div class="col-md-12">
						        <div class="form-group">
						        	<label for="sel2">Medicamentos</label>
								    <select multiple class="form-control">
								        <option>Ibuprofeno</option>
								        <option>Paracetamol</option>
								   	</select>
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
