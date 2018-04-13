var base_url = 'http://localhost/DoctorBC/index.php/';
$(document).ready(function(){
    LoadDataBest(); 
});
function LoadDataBest()
{
    $.post(base_url+'Inicio/DataLoad',
      {},
      function (data)
      {
        var c = JSON.parse(data);
        $.each(c,function(i,item)
        {
           $('#table_cont').append('<tr class="table-hover1">'
              +'<td>John</td>'
              +'<td>Doe</td>'
              +'<td>john@example.com</td>'
          +'</tr>');

        });
     });
}
