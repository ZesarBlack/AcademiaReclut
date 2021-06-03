var noaceptados = /[¿?!¡#$"_&()-<>./]/;
function sanitizar(texto) {

 if (noaceptados.exec(texto.value)) {
   console.log("No es valido");
   texto.style.borderColor = "red";
   while (noaceptados.exec(texto.value)) {
    texto.value =  texto.value.replace(noaceptados,'')
   }
 }else {
   console.log("Valido");
   texto.style.borderColor = "green";
 }
}

function redireccionar()
{
  window.location="control_reingreso.php";
}
