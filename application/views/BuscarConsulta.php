<?php $this->load->view('Global/Header');?>
<?php $this->load->view('Global/AsideLeft');?>
  <link rel="stylesheet" href="<?php echo base_url('assets/sources/css/BuscarConsulta.css');?>">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">   	
        <form>
     			<div class="row">
        			<div class="col-md-12">
        				<div class="form-group searchConsulta">
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
    </section>
    <section>       
        <div class="container-consulta">
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
                    <tr class="table-hover2">
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr class="table-hover2">
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="ConsultaBuscarconsulta">
            <div class="row padding">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="motivos">Consulta:</label>
                            <textarea class="form-control" rows="3" id="motivos"></textarea>
                        </div>  
                    </div>
                    <div class="col-md-12">
                        <div class="btn btn-primary padding" id="atrasBuscarConsulta">Atras</div>     
                    </div>
            </div>   
        </div>
    </section> 
</div>            
<?php $this->load->view('Global/AsideRight');?>
<?php $this->load->view('Global/Footer');?>