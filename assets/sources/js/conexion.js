var IP		=	'192.168.43.219';
var webData	=	[{id:"webId",name:"Web"}];
var socket;
var nip;

var HijosArray = [];
var FechaArray =[];
var SexoArray = [];
var PesoArray = [];
var AlturaArray =[];
var id_overPower = 0;

var VacunasString = '';
var VacunasFechaString = '';
var EnfermedadesString = '';
var AlergiasString = '';

conectarme(); 
var response = getResponse();



// ------------------------------------------------------------------------- realiza la conexión al socket
function conectarme(){
	socket = io.connect('http://'+IP+':90',{'forceNew':true});

	socket.on('getIdSocket',function(data)
	{
		for (var i = 0; i < data.length; i++) 
		{
			if(data[i].id != 'webId')
			{	
				console.log('Usuario conectado...\n\nusuario: '+data[i].id+'\nnombre: '+data[i].name+'\nidSocket: '+data[i].idSocket);
			}
		}
	});

	

	socket.on('dataClient',function(data)
	{
		console.log('Datos del cliente:\n');
		console.log('nombreT: '+data[0].nombreT+"\nsexo: "+data[0].sexo+
			'\ntelefono: '+data[0].telefono+'\nnip: '+data[0].nip);
		nip = data[0].nip;
	});

	socket.on('dataHijo',function(data)
	{
		console.log('Datos hijos:\n');
		console.log(data);
		data = JSON.parse(data);
		for(i=0;i<data.length;i++)
		{
			if (data[i].sexo==1)
					data[i].sexo='Masculino';
			else
				data[i].sexo='Femenino';
			$('#tablaPaciente').append('<tr class="table-hover" onclick="changeid('+data[i].idHijo+')">'
				+'<td>'+data[i].nombreH+'</td>'
				+'<td>'+data[i].sexo+'</td>'
				+'</tr>');
			SexoArray[i+1] = data[i].sexo;
			HijosArray[i+1] = data[i].nombreH;
			FechaArray[i+1] = data[i].fecha_na;
			PesoArray[i+1] = data[i].peso;
			AlturaArray[i+1] = data[i].altura;
		};
	});

	socket.on('EnfermedadesHijo',function(a,e,v)
	{

		a = JSON.parse(a);
		for(i=0;i<a.length;i++)
		{
			if (a[i].nombreA != 'none')
			{
				$('#InputAlergias').append('<option>'+a[i].nombreA+'</option>');
				AlergiasString += a[i].nombreA + ',';
			}
		};

		e = JSON.parse(e);
		for(i=0;i<e.length;i++)
		{
			if (e[i].nombreH != 'none')
			{
				$('#InputHere').append('<option>'+e[i].nombreH+'</option>');
				EnfermedadesString += e[i].nombreH + ',';
			}
		};

		v = JSON.parse(v);
		for(i=0;i<v.length;i++)
		{
			if (v[i].nombreV != 'none')
			{
				$('#InputVacunas').append('<option>'+v[i].nombreV+' - '+v[i].fechaV+'</option>');
				VacunasString += v[i].nombreV + ',';
				VacunasFechaString += v[i].fechaV + ',';
			}
		};

		//console.log('Datos hijos:\n');
		//console.log(a+'\n\n'+e+'\n\n'+v);
	});

}


$('#saveData').click(function(){
	var data = [];
	var StringDes = $('#Table_medicamento').val()+' '+$('#Table_dosis').val()+', '+$('#Table_cantidad').val()+' cada '+$('#Table_horaxdosis').val()+' hora/s.';
	data.push({
		'nombreM':$('#Table_medicamento').val(),
		'descripcion': StringDes,
		'tiempo':$('#Table_horaxdosis').val(),
		'fechaLimite':$('#Table_date').val()//envien la fecha con formato: yyyy-MM-dd (automaticamente ya esta en ese formato si se usa jQuery y se escribe de esa forma)
	});
	SaveDataConsulta();
	socket.emit('postRecordatorio',data,nip);
});


// ------------------------------------------------------------------------- solicita una respuesta de confirmación
function getResponse()
{
	return socket.on('getResponse',function(data){
		console.log(data);
		sendId();
	});
}



function sendId(){
	socket.emit('sendId',JSON.stringify(webData));
}

function changeid(data) 
{
	socket.emit('postIdHijo',data,nip);
	//alert(data);
	id_overPower = data;
		$('#nombrePaciente').val(HijosArray[data]);
		$('#ModalnombrePaciente').val(HijosArray[data]);
		$('#ModalfechaPaciente').val(FechaArray[data]);
		$('#ModalsexoPaciente').val(SexoArray[data]);
	
	$(".container-table").hide(300);
			$("#datosPaciente").show(400,function(){
				$("#recetaMedica").show(300,function(){
					$("#motivosConsulta").show(200);
				});

			});	
}


function SaveDataConsulta() 
{
	var StringDes = $('#Table_medicamento').val()+' '+$('#Table_dosis').val()+', '+$('#Table_cantidad').val()+' cada '+$('#Table_horaxdosis').val()+' hora/s.';
	//alert(FechaArray[id_overPower]);
    $.post('http://localhost/DoctorBC/index.php/Inicio/SaveConsulta',
      {
       'dbc_nombre': HijosArray[id_overPower],
       'dbc_peso': PesoArray[id_overPower],
       'dbc_altura': AlturaArray[id_overPower],
       'dbc_fechaNacimiento': FechaArray[id_overPower],
       'dbc_sexo':   SexoArray[id_overPower],
       'EnfermedadesString':   EnfermedadesString,
       'VacunasString':   VacunasString,
       'AlergiasString':   AlergiasString,
       'VacunasFechaString': VacunasFechaString,
       'dbc_descripcion': StringDes,
       'dbc_idMedico' : $('#id_Medico').val(),
       'dbc_timepo': $('#Table_horaxdosis').val(),
       'dbc_fechaLim':$('#Table_date').val(),
       'dbc_motivosConsulta' :$("#motivosConsulta").text(),
       'dbc_nip' : nip
      },
      function (data)
      {
      	alert(data);
     });
   
}