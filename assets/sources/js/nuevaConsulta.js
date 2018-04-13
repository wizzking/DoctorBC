var altura = $(document).height();
var  x=0;
$(document).ready(function(){
	/*Divs a ocultar*/
	/*ids de nuevaConsulta*/
	$("#datosPaciente").hide(0);
	$("#recetaMedica").hide(0);
	$("#datosDoctor").hide(0);
	/*ids de Pacientes*/
	$("#motivosConsulta").hide(0);
	$("#seccionAPersonales").hide(0);
	$("#seccionAMedicos").hide(0);
	$("#seccionEnfermedad").hide(0);
	/*ids de BuscarConsulta*/
	$("#ConsultaBuscarconsulta").hide(0);
	/*Animacion de inicio en nuevaConsulta*/


});
	/*animacion de nueva consulta para esconder tabla  y mostrar los datos del paciente seleccionado*/
	$(".table-hover").click(function(){
		$(".container-table").hide(300);
			$("#datosPaciente").show(400,function(){
				$("#recetaMedica").show(300,function(){
					$("#motivosConsulta").show(200);
				});

			});				

	});
	/*animacion para regresar a la tabla y esconder los datos*/
	$("#cambiar").click(function(){
		$("#datosPaciente").hide(300,function(){
			$('#recetaMedica').hide(200,function(){
				$('#motivosConsulta').hide(100,function(){
					$(".container-table").show(50);
				})
			})
		});
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
	/*animacion  de buscarconsula para ocultar y mostrar las consultas de un paciente*/
	$(".table-hover2").click(function(){
		$(".container-consulta").hide(300,function(){
			$("#ConsultaBuscarconsulta").show(300);
			$(".searchConsulta").hide(300);
		});
	});
	/*Todos los botones de "atras" */
	$("#atrasPacientes").click(function(){
		$(".container-pacientes").show(400);
		$(".searchPaciente").show(400);
		$("#seccionAPersonales").hide(300);
		$("#seccionAMedicos").hide(300);
		$("#seccionEnfermedad").hide(300);
	});
	$("#atrasNuConsulta").click(function(){
		$("#datosPaciente").hide(300);
		$("#recetaMedica").hide(300);
		$("#motivosConsulta").hide(300);
		$(".container-table").show(400);
	});
	$("#atrasBuscarConsulta").click(function(){
		$(".container-consulta").show(400);
		$("#ConsultaBuscarconsulta").hide(300);
		$(".searchConsulta").show(300);
	});
	/*Agregar una columna a la tabla al hacer click*/
	$("#agregarColumna").click(function(){
		$("#ColumnasTablaPacientes").append('<tr id='+x+'>'+
			'<td><input type="text"  name="medicamento"class="form-control inpStyle"></td>'+
			'<td><input type="text" name="cantidad" class="form-control inpStyle"></td>'+
			'<td><input type="text" name="dosis" class="form-control inpStyle"></td>'+
			'<td>'+
				'<select class="form-control inpStyle">'+
					'<option>1</option>'+
					'<option>2</option>'+
					'<option>3</option>'+
					'<option>4</option>'+
					'<option>5</option>'+
					'<option>6</option>'+
					'<option>7</option>'+
					'<option>8</option>'+
					'<option>9</option>'+
					'<option>10</option>'+
					'<option>11</option>'+
					'<option>12</option>'+
					'<option>13</option>'+
					'<option>14</option>'+
					'<option>15</option>'+
					' <option>16</option>'+
					'<option>17</option>'+
					' <option>18</option>'+
					'<option>19</option>'+
					'<option>20</option>'+	
				'</select>'+				        		
			'</td>'+
			'<td>'+
				'<input type="date" name="fecha" class="form-control inpStyle">'+	
				'</td>'+
		'</tr>');
		x=x+1;
	});
	$("#eliminarColumna").click(function(){
		if (x!=-1) {
			$("#"+x).remove();
			x--;
		}
	});