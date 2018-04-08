
var base_url = 'http://localhost/DoctorBC/index.php/';
$(document).ready(function(){
});

$('#Registrar').click(function(event) {
  if ($('#Contrasena').val()==$('#ReContrasena').val()) 
  {
     $.post(base_url+'Sesion/InsertRegistro',
      {
        'Nombre'          : $('#Nombre').val(),
        'ApellidoPaterno' : $('#ApellidoPaterno').val(),
        'ApellidoMaterno' : $('#ApellidoMaterno').val(),
        'Correo'          : $('#Correo').val(),
        'Contrasena'      : $('#Contrasena').val()

      },
      function (data)
      {
        alert(data);

     });
  }
  else
  {
    alert('Las Contraseñas no coinciden.');
  }

});

