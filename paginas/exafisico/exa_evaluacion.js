//-------------------------------------------------------defincion de variables
var tipo = "";
var busqueda = "";
var busqueda = "";
var resis =0;
var abdo =0;
var lagar =0;
var senta =0;
var flexi =0;
var velo =0;

//------------------------obtiene id cadete
$(document).ready(function(){
	$("#tipo").change(function(event){
        tipo = $(this).val();
				//alert(tipo);
        datos_aspirante(tipo, busqueda);
        });
});

$(document).on('keyup','#busqueda', function(event){
	busqueda = $(this).val();
	//alert(busqueda);
  datos_aspirante(tipo ,busqueda);
});

function datos_aspirante(tipo ,busqueda) {
   //alert (f.getFullYear()+"-"+(f.getMonth() +1)+"-"+f.getDate() );
  $.ajax({
    url:'evaluacion_back.php',
    type:'POST',
    dataType:'HTML',
    data: {tipo: tipo , busqueda:busqueda},
  })
  .done(function(respuesta){
		$("#tabla").html(respuesta);
		console.log(respuesta);
  })
  .fail(function(respuesta){
    console.log(respuesta);
  });

}

var noaceptados = /[¿?!_¡#$"%&()<>./@]/;
var noaceptadosfisico = /[¿?!_¡#$"%&()<>./@a-zA-Z]/;

function sanitizar(texto) {
 if (noaceptados.exec(texto.value)) {
   console.log("No es valido");
   texto.style.borderColor = "red";
   while (noaceptados.exec(texto.value)) {
    texto.value =  texto.value.replace(noaceptados,'')
   }
   //console.log(texto.value.replace(noaceptados, ''));
 }else {
   console.log("Valido");
   texto.style.borderColor = "green";
 }
}

function sanitizarNumero(texto) {
 if (noaceptadosfisico.exec(texto.value)) {
   console.log("No es valido");
   texto.style.borderColor = "red";
   while (noaceptadosfisico.exec(texto.value)) {
    texto.value =  texto.value.replace(noaceptadosfisico,'')
   }
   //console.log(texto.value.replace(noaceptados, ''));
 }else {
   console.log("Valido");
   texto.style.borderColor = "green";
 }
 calcularTotal();
}


$("#velcal").focusout(  () => {
	//let value = $(this).val();
	calcularTotal();
});

function calcularTotal() {
 resis =	document.getElementById('rescal').value;
 abdo =	document.getElementById('abcal').value;
 lagar =	document.getElementById('lagcal').value;
 senta =	document.getElementById('sentcal').value;
 flexi =	document.getElementById('flexcal').value;
 velo =	document.getElementById('velcal').value;

var total = parseInt(resis)+parseInt(abdo)+parseInt(lagar)+parseInt(senta)+parseInt(flexi)+parseInt(velo);
console.log(total);

if (isNaN(total)) {
	document.getElementById('total').value = '';
}else{
	document.getElementById('total').value = total;
	promedio(total);
}

}

function promedio(t) {
var promediotemp = t/6;
var promedio = Math.round(promediotemp);
document.getElementById('promedio').value = promedio;

}
