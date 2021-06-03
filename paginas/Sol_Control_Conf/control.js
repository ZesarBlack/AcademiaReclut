var curp="";

$(document).on('keyup','#curp', function(event){
 curp = $(this).val();
 //alert(curp);
 buscarElemento(curp);
});

$.ajax({
  url:"control_conf_back.php?obtener=true",
  dataType:"html",
})
.done(function(respuesta){
  $("#lista").html(respuesta);
})

function buscarElemento(curp) {
  //alert(curp);
  $.ajax({
		url: 'control_conf_back.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {curp:curp},
	})
	.done(function(respuesta){
		//alert(respuesta);
		$("#datos").html(respuesta);
		//var tipo = document.getElementById("dirigido").value;
		//alert(tipo);

	})
}
