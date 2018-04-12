var IP		=	'192.168.43.45';
var webData	=	[{id:"webId",name:"Web"}];
var socket;
var nip;

var HijosArray = [];
var VacunasArray = [];
var EnfermedadesArray = [];
var AlergiasArray = [];
var FechaArray =[];
var SexoArray = [];

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
			FechaArray[i+1] = data[i].fecha_ha;
		};
	});

	socket.on('EnfermedadesHijo',function(a,e,v)
	{

		a = JSON.parse(a);
		for(i=0;i<a.length;i++)
		{
			if (a[i].nombreA != 'none')
				$('#InputAlergias').append('<option>'+a[i].nombreA+'</option>');
		};

		e = JSON.parse(e);
		for(i=0;i<e.length;i++)
		{
			if (e[i].nombreH != 'none')
				$('#InputHere').append('<option>'+e[i].nombreH+'</option>');
		};

		v = JSON.parse(v);
		for(i=0;i<v.length;i++)
		{
			if (v[i].nombreV != 'none')
				$('#InputVacunas').append('<option>'+v[i].nombreV+' - '+v[i].fechaV+'</option>');
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
