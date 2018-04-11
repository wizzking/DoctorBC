<?php $this->load->view('Global/Header');?>
<?php $this->load->view('Global/AsideLeft');?>
  <link rel="stylesheet" href="<?php echo base_url('assets/sources/css/Pacientes.css');?>">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    	<form>
 			<div class="row">
    			<div class="col-md-12">
    				<div class="form-group searchPaciente">
    					<label class="control-label" for="searchPaciente">Paciente:</label>
    					<div class="input-group">
	    					<input type="text" id="searchPaciente" class="form-control">
	    					<span class="input-group-addon">
	        					<i class="glyphicon glyphicon-search"></i>
	    					</span>    						
    					</div>
    				</div>	
    			</div>
    		</div>	
    	</form>
	    <div class="container-pacientes">
			<h2>Pacientes</h2>          
			<table class="table">
				<thead>
					<tr>
					    <th>Firstname</th>
					    <th>Lastname</th>
					    <th>Email</th>
					</tr>
				</thead>
				<tbody >
					<tr class="table-hover1">
					    <td>John</td>
					    <td>Doe</td>
					    <td>john@example.com</td>
					</tr>
					<tr class="table-hover1">
					    <td>Mary</td>
					    <td>Moe</td>
					    <td>mary@example.com</td>
					</tr>
				</tbody>
			</table>
		</div>
			<form>
			<div class="row padding" id="seccionAPersonales">
			<!--Antecedentes Personales-->	
				<div class="col-md-12">
					<h2>Antecedentes Personales:</h2>
				</div>
				<div class="col-md-10">
					<div class="form-group">
    					<label for="nombre">Nombre:</label>
    					<input type="text" id="nombre" class="form-control" value="Tom Elizer">
    				</div>	
				</div>
				<div class="col-md-2">
					<div class="form-group">
    					<label for="sexo">Sexo:</label>
    					<input type="text" id="sexo" class="form-control" value="Masculino">
    				</div>	
				</div>				
				<div class="col-md-10">
					<div class="form-group">
    					<label for="fecha">Fecha de nacimiento:</label>
    					<input type="text" id="fecha" class="form-control" value="12/04/1997">
    				</div>						
				</div>				
				<div class="col-md-2">
					<div class="form-group">
    					<label for="peso">Peso:</label>
    					<input type="text" id="peso" class="form-control" value="30kg">
    				</div>	
				</div>
			</div>
			<div class="row" id="seccionAMedicos">	
				<!--antecedentes Medicos-->	
				<div class="col-md-12">
					<h2>Antecedentes Medicos</h2>
				</div>
			    <div class="col-md-6">
					<div class="form-group">
						<label for="sel2">Alergias</label>
						<select multiple class="form-control">
							<option>Ibuprofeno</option>
							<option>Pelo de Gato</option>
						</select>
			    	</div>
			    </div>	
			        <div class="col-md-6">
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
			        <div class="btn btn-primary padding" id="atrasPacientes">Atras</div>
			    </div> 
			</form>
		</div>	
    </section>
</div>

<?php $this->load->view('Global/AsideRight');?>
<?php $this->load->view('Global/Footer');?>
