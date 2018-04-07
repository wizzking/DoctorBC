$(document).ready(function(){
	$("#datosPaciente").hide(0);
	$(".table-hover").click(function(){
		$(".container-table").hide(300);
		$("#datosPaciente").show(400);
	});

});