var busqueda = "";
var folio = "";
var resultado = "";
$(document).on('keyup','#busqueda', function(event){
	busqueda = $(this).val();
  buscarElemento(busqueda);
});

function buscarElemento(folio) {
  $.ajax({
    url:"psicometrico_back.php",
    method:"POST",
    datatype:"HTML",
    data:{folio:folio}
  })
  .done(function(respuesta) {
    console.log(respuesta);
    $('#datos_aspirante').html(respuesta);
  })
}

function guardarResultado() {
busqueda =  document.getElementById('busqueda').value;
resultado =  document.getElementById('resultado').value;
//console.log(resultado);
  $.ajax({
    url:"psicometrico_back.php",
    method:"POST",
    datatype:"HTML",
    data:{busqueda:busqueda, resultado: resultado}
  })
  .done(function (respuesta) {
    console.log(respuesta);
    setTimeout(function(){ window.location.href = "examen_psicometrico.php?folio="+busqueda}, 1000);
    //seTimeout( function() { window.location.href = "examen_psicometrico/"+busqueda; }, 1000 );
  })
}
