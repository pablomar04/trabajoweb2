$(document).ready(function(){

  function crearPiezaHTML(pieza){
  
  var html ='<tr><td>'+pieza.codigo+'</td><td>'+pieza.descripcion+'</td><td>'+pieza.cantidad+'</td><td>'+pieza.codigoc+'</td><td><a href="index.php?action=ver_pieza&idpieza='+pieza.id+'"><i class="fa fa-info fa-2x" aria-hidden="true"></i></a></td></tr>';
  return html;
  }

  $(".actualizar").click(function(){
        event.preventDefault(); 
        alert('escucho');
        $.ajax({
          type:"GET",          
          url:"api/pieza",
          datatype:"JSON",
          success:function(piezas){
            $('#tabla > tbody').html('');
            for (var i = 0; i < piezas.length; i++) {
              var html = crearPiezaHTML(piezas[i]);
              $('#tabla > tbody').append(html);
            };
            console.log(piezas);
          },
          error: function(){
           alert('Error al pedir las piezas');
          }
        });
       
  });

$("#home").click(function(){
      event.preventDefault();

      $.ajax({
        type:"GET",
        
        url:"templates/lista.tpl",
        datatype:"html",
        success:function(data){
         
         $("#contenedor").html(data);

        },
        error: function(){
          alert('error');
        }
    });
      
});

$("#abm").click(function(){
      event.preventDefault();
      $.ajax({
        type:"GET",
      
        url:"templates/abm.tpl",
        datatype:'html',
        
        success:function(data){
          
         $("#contenedor").html(data);

        },
        error: function(){
          alert('error');
          //$('#listaPiezas').html("<p>Sin conexión. Intente más tarde.</p>");
        }
    });
      
});

//crearPiezas();

});

function verPieza(idpieza){
  $.ajax({
    method:GET,
    url:'api/pieza/'+idpieza,
    datatype:'JSON',
    success:function(data){

    },
    error:function(){
      
    }

  });



  
}