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
var oficio =  document.getElementById('oficio').value;
var fecha =  document.getElementById('fecha').value;
var adia =  document.getElementById('adia').value;
var noficio =  document.getElementById('noficio').value;
var resultado =  document.getElementById('resultado').value;
var fecha_resultado =  document.getElementById('fecha_resultado').value;
var observ =  document.getElementById('observ').value;


//console.log(id_ll+" "+oficio+" "+fecha+" "+adia+" "+noficio+" "+resultado+" "+fecha_resultado+" "+observ);

 $.ajax({
   url:"cad_interesado_back.php",
   dataType:"HTML",
   type:"POST",
   data:{id_ll:id_ll, oficio: oficio, fecha:fecha , adia: adia , noficio:noficio , resultado:resultado , fecha_resultado:fecha_resultado , observ:observ}
 })
 .done(function(respuesta){
   console.log(respuesta);
 })
 location.reload();

}

function ontenerId(n_id) {
limpiarDatosmodal();
document.getElementById('id_ll').value = document.getElementById(n_id+'id_temp').value;
id_c3 = document.getElementById(n_id+'id_temp_c3').value;
//console.log(n_id+'id_temp_c3');
$.ajax({
  url:"cad_interesado_back.php",
  dataType:"json",
  type:"POST",
  data:{id_c3:id_c3}
})
.done(function(respuesta){
  ///se limpian los datos
  /// ingresan los datis nuevos
        console.log(respuesta[3]);
        document.getElementById('oficio').value = respuesta[2];

        if (respuesta[3] != '1500-01-01') {
          document.getElementById('fecha').value = respuesta[3];
        }
        if (respuesta[7] != '1500-01-01') {
          document.getElementById('fecha_resultado').value = respuesta[7];
        }

        document.getElementById('adia').value = respuesta[4];
        document.getElementById('noficio').value = respuesta[5];
        document.getElementById('resultado').value = respuesta[6];
        //document.getElementById('fecha_resultado').value = respuesta[7];
        document.getElementById('observ').value = respuesta[8];

        //console.log('okokokokok');
       //console.log(content[0]['folio']);
       //console.log(respuesta);
})
.fail(function(respuesta){
  console.log(respuesta);
});

}

function limpiarDatosmodal() {
  console.log('limpiando');
  document.getElementById('oficio').value = "";
  document.getElementById('fecha').value = "";
  document.getElementById('adia').value = "";
  document.getElementById('noficio').value = "";
  document.getElementById('resultado').value = "";
  document.getElementById('fecha_resultado').value = "";
  document.getElementById('observ').value = "";
}
