function imprimirExcel(){
  alert('imprimiendo');
  $.ajax({
    url:"cad_interesado_back.php",
    type:"POST",
    dataType:"HTML",
    data:{excel: "excel"},
  })
}

function actualizarLlamado() {
var id_ll =  document.getElementById('id_ll').value;
var asistencia =  document.getElementById('asistencia').value;
var num_gen =  document.getElementById('num_gen').value;
var grupo =  document.getElementById('grupo').value;

var per_cap1 =  document.getElementById('per_cap1').value;
var per_cap2 =  document.getElementById('per_cap2').value;

//--------------------------------------------------------------fechas

if (document.getElementById('fecha_baja').value ==="") {
  var fecha_baja = "1800-01-01";
}else {
  var fecha_baja =  document.getElementById('fecha_baja').value;
}
//---------------------------------------------------------------
if (document.getElementById('per_cap1').value ==="") {
  var per_cap1 = "1800-01-01";
}else {
  var per_cap1 =  document.getElementById('per_cap1').value;
}
if (document.getElementById('per_cap2').value ==="") {
  var per_cap2 = "1800-01-01";
}else {
  var per_cap2 =  document.getElementById('per_cap2').value;
}
//---------------------------------------------------------------
var motivo_baja =  document.getElementById('motivo_baja').value;
var calf_final =  document.getElementById('calf_final').value;
var calf_desempeño =  document.getElementById('calf_desempeño').value;
var observacion =  document.getElementById('observacion').value;


//console.log(id_ll +"-"+ num_gen +"-"+  grupo +"-"+  per_cap +"-"+  fecha_baja +"-"+  motivo_baja +"-"+  calf_final +"-"+  calf_desempeño +"-"+  observacion);
//num_gen, grupo, per_cap, fecha_baja, motivo_baja, calf_final, calf_desempeño, observacion
console.log(id_ll);

 $.ajax({
   url:"cad_interesado_back.php",
   dataType:"HTML",
   type:"POST",
   data:{id_ll:id_ll, asistencia:asistencia,  num_gen: num_gen, grupo:grupo , per_cap1: per_cap1 , per_cap2: per_cap2 , fecha_baja:fecha_baja , motivo_baja: motivo_baja , calf_final:calf_final , calf_desempeño:calf_desempeño, observacion: observacion}
 })
 .done(function(respuesta){
   console.log(respuesta);
 })

 location.reload();

}

$(document).ready(function(){
  $("#generecion").focusout(function(event){
     generacion = $(this).val();

     $.ajax({
       url:"cad_interesado_back.php",
       dataType:"HTML",
       type:"POST",
       data:{generacion:generacion}
     })
     .done(function(respuesta){
          //$("#datos").html(respuesta);
          console.log(respuesta);
     })
  });
});


$(document).ready(function(){
  $("#periodo").focusout(function(event){
     periodo = $(this).val();

     $.ajax({
       url:"cad_interesado_back.php",
       dataType:"HTML",
       type:"POST",
       data:{periodo:periodo}
     })
     .done(function(respuesta){
          $("#datos2").html(respuesta);
     })
  });
});

function ontenerId(n_id) {
limpiarDatosmodal();
document.getElementById('id_ll').value = document.getElementById(n_id+'id_temp').value;
id_formacion = document.getElementById(n_id+'id_temp').value;
//console.log(id_formacion);

$.ajax({
  url:"cad_interesado_back.php",
  dataType:"json",
  type:"POST",
  data:{id_formacion:id_formacion}
})
.done(function(respuesta){

document.getElementById('asistencia').value =respuesta[1] ;
document.getElementById('num_gen').value = respuesta[2];
document.getElementById('grupo').value = respuesta[3];
document.getElementById('per_cap1').value = respuesta[4];
document.getElementById('per_cap2').value = respuesta[5];

if (respuesta[6] === "1800-01-01") {
  document.getElementById('fecha_baja').value ="";
}else {
  document.getElementById('fecha_baja').value = respuesta[6];
}

document.getElementById('motivo_baja').value = respuesta[7];
document.getElementById('calf_final').value = respuesta[8];
document.getElementById('calf_desempeño').value = respuesta[9];
document.getElementById('observacion').value = respuesta[10];

})
.fail(function(respuesta){
  console.log(respuesta);
});

}

function limpiarDatosmodal() {
console.log('limpiando');
document.getElementById('asistencia').value = "";
document.getElementById('num_gen').value= "";
document.getElementById('grupo').value= "";
document.getElementById('per_cap1').value= "";
document.getElementById('per_cap2').value= "";
document.getElementById('fecha_baja').value= "";
document.getElementById('motivo_baja').value= "";
document.getElementById('calf_final').value= "";
document.getElementById('calf_desempeño').value= "";
document.getElementById('observacion').value= "";

}
