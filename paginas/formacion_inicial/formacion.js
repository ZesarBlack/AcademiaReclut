var nombre = "";

$(document).on('keyup','#nombre', function(event){
 nombre = $(this).val();
 //document.getElementById('nombrec').value = nombre;
 buscarElemento(nombre);
});

function buscarElemento(nombre) {
 //console.log(nombre);
  $.ajax({
    type:"POST",
    url:"formacion_back.php",
    dataType:"html",
    data:{"nombre": nombre}
  })
  .done(function(respuesta){
    console.log(respuesta);
    $("#datos").html(respuesta);
  })
}
function mayus(e) {
    e.value = e.value.toUpperCase();
}
