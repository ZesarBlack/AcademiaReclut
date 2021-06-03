var cuip = "";

function buscarElemento() {
  cuip = document.getElementById('cuip').value;
  //console.log(cuip);
  $.ajax({
    url:"seguimiento_back.php",
    type:"post",
    dataType:"html",
    data:{"cuip":cuip}
  })
  .done(function(respuesta){
    console.log(respuesta);
    $("#datos").html(respuesta);

  })
}

function mayus(e) {
    e.value = e.value.toUpperCase();
}
