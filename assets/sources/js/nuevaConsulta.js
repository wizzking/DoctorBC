var altura = $(document).height();
$(document).ready(function(){
	/*Divs a ocultar*/
	$("#datosPaciente").hide(0);
	$("#seccionAPersonales").hide(0);
	$("#seccionAMedicos").hide(0);
	$("#seccionEnfermedad").hide(0);

	/*Animacion de inicio en nuevaConsulta*/





	/*animacion de nueva consulta para esconder tabla  y mostrar los datos del paciente seleccionado*/
	$(".table-hover").click(function(){
		$(".container-table").hide(300);
		$("#datosPaciente").show(400);
	});
	/*animacion para regresar a la tabla y esconder los datos*/
	$("#cambiar").click(function(){
		$(".container-table").show(400);
		$("#datosPaciente").hide(300);
	});
	/*animacion de pacientes para ocultar tabla y mostrar los datos del paciente*/
	$(".table-hover1").click(function(){
		$(".container-pacientes").hide(300,function(){
			$("#seccionAPersonales").show(400,function(){
				$("#seccionAMedicos").show(300,function(){
					$("#seccionEnfermedad").show(100,function(){
						$("html, body").animate({scrollTop:altura+"px"});
					});
				});
			});
		});
		$(".searchPaciente").hide(300);
	});

});