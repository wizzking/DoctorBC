var base_url = 'http://localhost/testing/index.php/';
$(document).ready(function(){
    LoadDataBest(); 
});
function LoadDataBest()
{
    $.post(base_url+'Wapik/LoadDataCont',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
           $('#table_cont').append('<tr id="fila_'+item.id+'">'+
        '<td>'+item.id+'</td>'+
        '<td>'+item.nombre+'</td>'+
        '<td>'+item.descripcion+'</td>'+
        '<td>'+'<span class="label label-danger">'+'<a onclick="EliminarData('+item.id+')" style="cursor:pointer;">Eliminar</a>'+'</span>'+'</td>'+
        '</tr>');

        });
     });
}

function EliminarData(data) {
  $.post(base_url+'Remover/RemoverBest',
      {
        'id' : data
      },
      function (data)
      {
        DropDataTable();
        LoadDataBest();
        alert(data);
     });
}

  var DropDataTable = function() 
  { 
    $("#contenido_tabla tr").remove();
  }