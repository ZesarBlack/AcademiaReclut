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
document.getElementById('id_ll').value = document.getElementById(n_id+'id_temp').value;
}
