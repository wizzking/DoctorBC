$(document).ready(function(){
	$("#datosPaciente").hide(0);
	$("#pacienteSeleccionado").hide(0);
	$(".table-hover").click(function(){
		$(".container-table").hide(300);
		$("#datosPaciente").show(400);
	});
	$(".table-hover1").click(function(){
		$(".container-pacientes").hide(300);
		$("#pacienteSeleccionado").show(400);
		$(".searchPaciente").hide(300);
	});

});