var noaceptados = /[¿?!¡#$"_%&()<>./]/;
var noaceptadoscorreo = /[¿?!¡#$"%&()<>/]/;
var t_ingreso ="";
var ingresos = "";

$(document).ready(() => {

  $("#fechan").focusout(  () => {
    let value = $("#fechan").val();
    let hoy = new Date();
    let cumpleanos = new Date(value);
    cumpleanos.setDate(cumpleanos.getDate() + 1);
    let edad = hoy.getFullYear() - cumpleanos.getFullYear();
    let m = hoy.getMonth() - cumpleanos.getMonth();
    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }
    if(edad < 18 || edad > 100){
      $("#edad").val("");
      alert("Favor de verificar la fecha de nacimiento");
    }else{
      $("#edad").val(edad);
    }
  });

  $("input#RadioSi").click( () => {
    $("#dependencia_anterior").prop('disabled', false);
  });
  $("input#RadioNo").click( () => {
    $("#dependencia_anterior").val("");
    $("#dependencia_anterior").prop('disabled', true);
  });
  $("input#RadioActivo").click( () => {
    $("#dependencia_anterior").prop('disabled', false);
  });
} );
var fecha = new Date();
var anyo = fecha.getFullYear().toString().substr(2,2);
var mes = ('0' + (fecha.getMonth() + 1)).slice(-2);
var dia = ('0' + fecha.getDate()).slice(-2);
var hora =  fecha.getHours();
var minutos = fecha.getMinutes();
var mili = ('0'+fecha.getTime()).slice(-4);
//document.getElementById('folio').value = (anyo+mes+dia+hora+mili);

function recargar()
{
  location.reload()
}

function mayus(entrada) {
  //var div = document.getElementById("div1");
  //div.style.marginTop = ".25in";
    entrada.value = entrada.value.toUpperCase();
    sanitizar(entrada);
}

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

function sanitizarCorreo(texto) {
 if (noaceptadoscorreo.exec(texto.value)) {
   console.log("No es valido");
   texto.style.borderColor = "red";
   while (noaceptadoscorreo.exec(texto.value)) {
    texto.value =  texto.value.replace(noaceptadoscorreo,'')
   }
 }else {
   console.log("Valido");
   texto.style.borderColor = "green";
 }
}

$(document).ready(function(){
  $("#dependencia_anterior").change(function(event){
     tipo = $(this).val();
     //alert(tipo);
      especificar(tipo);
  });
});

function especificar(tipoM){
  if (tipoM == "POLICIA MUNICIPAL") {
    $("#municipio_act").show();
    $("#municipio_act").removeAttr( "hidden" );
    $("#entidad_act").show();
    $("#entidad_act").removeAttr( "hidden" );
    //$("#dropzone").hide();
  }else if (tipoM == "POLICIA ESTATAL") {
    $("#entidad_act").show();
    $("#entidad_act").removeAttr( "hidden" );
    $("#municipio_act").hide();
  }else {
    $("#entidad_act").hide();
    $("#municipio_act").hide();
  }
}

$(document).ready(function(){
  $("#grado_es").change(function(event){
     tipo = $(this).val();

      estadoEscolaridad(tipo);
  });
});

function estadoEscolaridad(escolaridad) {
  if (escolaridad == "BACHILLERATO") {
    console.log('BACHILLERATO');
    //se muestra la opción 1
    $("#op1").show();
    $("#op1").removeAttr( "hidden" );
    //se ocultan las demás opciones
    $("#op2").hide();
    $("#op3").hide();
    $("#op4").hide();
  }else if (escolaridad == "TÉCNICO SUPERIOR" || escolaridad == "LICENCIATURA" || escolaridad == "MAESTRIA" || escolaridad == "DOCTORADO") {
    //muestran todas las opciones
    $("#op2").show();
    $("#op2").removeAttr( "hidden" );

    $("#op3").show();
    $("#op3").removeAttr( "hidden" );

    $("#op4").show();
    $("#op4").removeAttr( "hidden" );
    //se oculta la opcion 1
    $("#op1").hide();
  }else {
    $("#op1").hide();
    $("#op2").hide();
    $("#op3").hide();
    $("#op4").hide();
  }
}

if (document.getElementById('naciona').value) {
   ingresos = document.getElementById('naciona').value;
   tipoId(ingresos);
}

$(document).ready(function(){
  $("#naciona").change(function(event){
     t_ingreso = $(this).val();
     console.log(t_ingreso);
     tipoIngreso(t_ingreso);
     tipoId(t_ingreso);
  });
});

function tipoId(tipoingreso) {
  //console.log("este mensaje es del tipo "+tipoingreso);
  $.ajax({
    url:"registroAspirantes_back.php",
    type:"POST",
    datype:"html",
    data:{"tipoingreso":tipoingreso},
  })
  .done(function(respuesta){
    console.log(respuesta);
    document.getElementById('folio').value = respuesta;
  })
}

function tipoIngreso(ingreso) {
  if (ingreso=="Nuevo Ingreso") {
    $("#reingreso").hide();
  }else if (ingreso=="Reingreso") {
    $("#reingreso").show();
    $("#reingreso").removeAttr("hidden");
  }
}
