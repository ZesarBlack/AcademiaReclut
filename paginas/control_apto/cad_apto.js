function imprimirExcel(){
  alert('imprimiendo');
  $.ajax({
    url:"cad_apto_back.php",
    type:"POST",
    dataType:"HTML",
    data:{excel: "excel"},
  })
}

function actualizarLlamado() {
var id_ll =  document.getElementById('id_ll').value;
var llamado =  document.getElementById('llamado').value;
var observaciones =  document.getElementById('observaciones').value;
 $.ajax({
   url:"cad_apto_back.php",
   dataType:"HTML",
   type:"POST",
   data:{id_ll:id_ll, estado:llamado, obs:observaciones}
 })
 .done(function(respuesta){
   console.log(respuesta);
 })
 //await new Promise(r => setTimeout(r, 2000));
 location.reload();
}

function ontenerId(n_id) {
document.getElementById('id_ll').value = document.getElementById(n_id+'id_temp').value;
}
