//-------------------------------------------------------defincion de variables
var tipo = "";
var busqueda = "";
var peso ="";
var estatura="";
var edad="";
var genero="";

var estatura2 = "";
var peso2 = "";

var id = "";
var f = new Date();
var y = f.getFullYear();
//Mes
var m = f.getMonth() + 1;
if (m<10) {
  m = "0"+m;
}
//Día
var d = f.getDate();
if (d < 10) {
  d= "0"+d;
}

//alert(d);
//-------------------------------------------------------entrada de variables
$(document).ready(function(){
  $("#tipo").change(function(event){
     tipo = $(this).val();
     //alert(tipo);
      buscar_examen(tipo, busqueda);
  });
});


$(document).on('keyup','#busqueda', function(event){
	busqueda = $(this).val();
  //alert(busqueda+tipo);
  buscar_examen(tipo, busqueda);
});

$(document).on('keyup','#folio', function(event){
	id = $(this).val();
  //alert(id);
  datos_aspirante(id);
});


//-----------------------------------------------------funciones
function buscar_examen(tipo, busqueda){

  $.ajax({
		url: 'medico_back.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {tipo: tipo, busqueda: busqueda},
	})
  .done(function(respuesta){
    $("#datos").html(respuesta);
  })
	.fail(function(){
		console.log("error");
	});
}

function datos_aspirante(id) {
  $.ajax({
    url:'medico_back.php',
    type:'POST',
    dataType:'json',
    data: {folio: id},
  })
  .done(function(respuesta){
    document.getElementById("fechaeval").value = y + "-" + m + "-" + d;
    console.log(y + "-" + m + "-" + d);
    document.getElementById("aspirante").value = respuesta.nombre;
    document.getElementById("paterno").value = respuesta.a_paterno;
    document.getElementById("materno").value = respuesta.a_materno;
    document.getElementById("id").value = respuesta.idCadete;
    //document.getElementById("genero").value = respuesta.genero;
    document.getElementById("sexo").value = respuesta.genero;
    document.getElementById("edad").value = respuesta.edad_registro;
    document.getElementById("fechaNac").value = respuesta.f_nacimiento;
    document.getElementById("escolaridad").value = respuesta.grado_estudio;
    document.getElementById("estadoc").value = respuesta.estado_civil;
    document.getElementById("domicilio").value = "C "+respuesta.calle+" "+respuesta.n_interior+", "+respuesta.colonia+", "+respuesta.municipio;
    document.getElementById("numerotel").value = respuesta.tel_celular;
    if (respuesta.genero == "Femenino" || respuesta.genero == "FEMENINO") {
      //alert(respuesta.genero);
      console.log(respuesta.genero);
      tipoExamen(respuesta.genero);
      genecobstetricos(respuesta.genero);
    }else {
      tipoExamen(respuesta.genero);
      genecobstetricos("Maculino");
    }
    edad = respuesta.edad_registro;
    //alert(edad);
    imc(peso, estatura);
    //alert(respuesta.a_materno);
    //alert(respuesta.a_paterno);
  })
  .fail(function(){
    console.log("error");
  });

}

function tipoExamen(genero) {
  //alert(genero+"funcion");
  $.ajax({
    url: 'medico_back.php' ,
    type: 'POST' ,
    dataType: 'html',
    data: {tipo2: genero},
  })
  .done(function(respuesta){
    $("#femenino").html(respuesta);
  })
  .fail(function(){
    console.log("error");
  });
}
//---------------------------------------------------------------------------imc y nivel

peso=document.getElementById("peso").value;
estatura=document.getElementById("estatura").value;

if (estatura !="" && peso != "") {
  //console.log("ok");
  imc(peso, estatura);
}

$(document).on('keyup','#peso', function(event){
  peso = $(this).val();
  //alert(peso);
  imc(peso, estatura);
});

$(document).on('keyup','#estatura', function(event){
  estatura = $(this).val();
  //alert(busqueda+tipo);
  imc(peso, estatura);
});

function imc(peso, estatura){
  var imc2 = peso/(estatura*estatura);
  var imc = Math.round(imc2);
  console.log(imc);
  if (imc=="Infinity") {
    document.getElementById('imc').value="";
  }else {
    console.log(imc);
    document.getElementById('imc').value=imc;
    setTimeout(function(){ nivelPeso()}, 500);
  }
  if(imc2 < 16) {
    console.log(imc2);
    document.getElementById('nivel').value = "desnutrición severa";
  }else if (imc2 >= 16.1 && imc2 <= 18.4) {
    console.log(imc2);
    document.getElementById('nivel').value = "desnutrición moderada";
  }else if (imc2 >= 18.5 && imc2 <= 22) {
    console.log(imc2);
    document.getElementById('nivel').value = "bajo peso";
  }else if (imc2 >= 22 && imc2 <= 24.8) {
    console.log(imc2);
    document.getElementById('nivel').value = "peso normal";
  }else if (imc2 >= 24.9 && imc2 <= 29.9) {
    console.log(imc2);
    document.getElementById('nivel').value = "sobrepeso";
  }else if (imc2 >= 30 && imc2 <= 34.9) {
    console.log(imc2);
    document.getElementById('nivel').value = "Obesidad tipo 1";
  }else if (imc2 >= 35 && imc2 <= 39.9) {
    console.log(imc2);
    document.getElementById('nivel').value = "Obesidad tipo 2";
  }else if (imc2 >=  40) {
    console.log(imc2);
    document.getElementById('nivel').value = "Obesidad tipo 3";
  }
      //document.getElementById('imc').value=imc;
}


function nivelPeso() {
  peso=document.getElementById("peso").value;
  estatura=document.getElementById("estatura").value;
  var masa = peso/(estatura*estatura);
  console.log("funcion");
  if(masa < 16) {
    console.log("okokkoko");
    console.log(masa);
    document.getElementById('nivel').value = "desnutrición severa";
  }else if (masa >= 16.1 && masa <= 18.4) {
    console.log(masa);
    document.getElementById('nivel').value = "desnutrición moderada";
  }else if (masa >= 18.5 && masa <= 22) {
    console.log(masa);
    document.getElementById('nivel').value = "bajo peso";
  }else if (masa >= 22 && masa <= 24.8) {
    console.log(masa);
    document.getElementById('nivel').value = "peso normal";
  }else if (masa >= 24.9 && masa <= 29.9) {
    console.log(masa);
    document.getElementById('nivel').value = "sobrepeso";
  }else if (masa >= 30 && imc2 <= 34.9) {
    console.log(masa);
    document.getElementById('nivel').value = "Obesidad tipo 1";
  }else if (masa >= 35 && masa <= 39.9) {
    console.log(masa);
    document.getElementById('nivel').value = "Obesidad tipo 2";
  }else if (masa >=  40) {
    console.log(masa);
    document.getElementById('nivel').value = "Obesidad tipo 3";
  }
}

function  ingresar() {
  if (mensaje === "error") {
    $("#boton").hide();
  }else {
    $("#boton").show();
    $("#boton").removeAttr( "hidden" );
  }
}
document.getElementById('nivel').value = "";
//---------------------------------------------------------------------mayusculas
function mayus(e) {
    e.value = e.value.toUpperCase();
}
gen=document.getElementById("sexo").value;
genecobstetricos(gen);
function genecobstetricos(genero)
{
  //alert(genero);
  console.log(genero+"en el log");
  if (genero == "FEMENINO") {
    $("#genecobstetricos").show();
    $("#genecobstetricos").removeAttr( "hidden" );
  }else {
    //$("#dropzone").attr( "hidden" );
    console.log("se aculta");
    $("#genecobstetricos").hide();
    $("#genecobstetricos").attr( "hidden" );
  }
}
////---------------------------------------------------------------------------
var imc3 = document.getElementById('imc').value;
function mayus(e) {
    e.value = e.value.toUpperCase();
}

function recargar() {
  location.reload();
}
function nf() {
  console.log("todo bien");
}


function redireccionar()
{
  window.location="busqueda_medico.php";
}

//sanitizacion de datos

var noaceptados = /[¿?!_¡#$"%&()<>./@]/;
var noaceptadoscorreo = /[¿?!¡#$"%&()<>/]/;

function sanitizar(texto) {
 if (noaceptados.exec(texto.value)) {
   console.log("No es valido");
   texto.style.borderColor = "red";
   while (noaceptados.exec(texto.value)) {
    texto.value =  texto.value.replace(noaceptados,'')
   }
  function vert(textoa) {
    console.log("No es valido");
  }
   //console.log(texto.value.replace(noaceptados, ''));
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
   //texto.value =  texto.value.replace(noaceptadoscorreo,'')
 }else {
   console.log("Valido");
   texto.style.borderColor = "green";
 }
}
