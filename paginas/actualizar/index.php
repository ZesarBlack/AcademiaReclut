  <?php require '../../requires/header3.php';
  ?>
  <div class="row" style="margin:auto; margin-top:2rem" >
              <div class="col-md-12 text-center"><h2>Actualizar datos</h2></div>
            </div>
<div class="container" style="margin-top: 4rem">

    <div class="row" style="background-color:#ffffff">
        <div id="content" class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-light">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div style="text-align: center;">
                        <div class="nav-item active col-md-2" >
                            <a class="nav-link" id="div-btn1" href="#" style="font-size: 18px; font-weight: bold;">Generales</a>
                        </div>
                        <div class="nav-item col-md-2 ">
                            <a class="nav-link" id="div-btn2" href="#" style="font-size: 18px; font-weight: bold;">Familiares</a>
                        </div>
                        <div class="nav-item col-md-2">
                            <a class="nav-link" id="div-btn3" href="#" style="font-size: 18px; font-weight: bold;">Escolares</a>
                        </div>
                        <div class="nav-item col-md-2">
                            <a class="nav-link" id="div-btn4" href="#" style="font-size: 18px; font-weight: bold;">Laborales</a>
                        </div>
                   </div>
                </div>
            </nav>
            <div id="central">
              <?php
                include "inc/generales.php";
               ?>
            </div>
        </div>
    </div>
</div>
    </div>


                <!--<div class="col-md-3"></div>
                <div class="col-md-3">Nombre del Curso o Capacitación</div>
                <div class="col-md-3"><input type="text" name="NombreCurso" id="NombreCurso"></div>
                <div class="col-md-3"></div>-->
            </div>
                <!--/todo nuestro contenido----------------------------------------->
              <!--</div>-->
            </div>
            <!-- /page content -->
         <!-- </div>
        </div>-->
    <script type="text/javascript" src="bitacora.js"></script>
    <?php require '../../requires/script_pag.php'; ?>
  </body>
</html>
<script type="text/javascript">
 var nombre="";
 var fecha="";
 var tipo="";
$(document).on('keyup','#nombre', function(event){
  nombre = $(this).val();
  enviar(nombre, fecha, tipo);
});
$(document).ready(function(){
  $("#fecha").change(function(event){
        fecha = $(this).val();
        enviar(nombre, fecha, tipo);
        });
});
$(document).ready(function(){
  $("#tipo").change(function(event){
        tipo = $(this).val();
        enviar(nombre, fecha, tipo);
        });
});

function enviar(nombre, fecha, tipo){
    buscar_datos(nombre, fecha, tipo);
}

    $('#div-btn1').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $.ajax({
            type: "POST",
            url: "inc/generales.php",
            success: function(response) {
                $('#central').html(response);
                $('#div-btn1').parent().addClass('active');
            }
        });
        return false;
    });
 $('#div-btn2').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $.ajax({
            type: "POST",
            url: "inc/familiares.php",
            success: function(response) {
                $('#central').html(response);
                $('#div-btn2').parent().addClass('active');
            }
        });
        return false;
    });

    $('#div-btn3').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $.ajax({
            type: "POST",
            url: "inc/Escolares.php",
            success: function(a) {
                $('#central').html(a);
                $('#div-btn3').parent().addClass('active');
            }
        });
        return false;
    });

    $('#div-btn4').on('click', function() {
        $('.navbar-nav li').removeClass('active');
        $.ajax({
            type: "POST",
            url: "inc/laborales.php",
            success: function(a) {
                $('#central').html(a);
                $('#div-btn4').parent().addClass('active');
            }
        });
        return false;
    });
    $('#butsave').on('click', function() {
        $("#butsave").attr("disabled", "disabled");
        var idperfil = $('#idperfil').val();
        var nombres = $('#nombres').val();
        var apaterno = $('#apaterno').val();
        var amaterno = $('#amaterno').val();
        var genero = $('#genero').val();
        var fechanac = $('#fechanac').val();
        var curp = $('#curp').val();
        var imss = $('#imss').val();
        var rfc = $('#rfc').val();
        var smn = $('#smn').val();
        var direccion = $('#direccion').val();
        var telcasa = $('#telcasa').val();
        var telmovil = $('#telmovil').val();
        var correo = $('#correo').val();
            $.ajax({
                url: "inc/actualizar.php",
                type: "POST",
                data: {
                    idperfil: idperfil,
                    nombres: nombres,
                    apaterno: apaterno,
                    amaterno: amaterno,
                    genero: genero,
                    fechanac: fechanac,
                    curp: curp,
                    imss: imss,
                    rfc: rfc,
                    smn: smn,
                    direccion: direccion,
                    telcasa: telcasa,
                    telmovil: telmovil,
                    correo: correo       
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $("#butsave").removeAttr("disabled");
                        $('#fupForm').find('input:text').val('');
                        $("#success").show();
                        $('#success').html('Se actualizaron los datos!');
                        setTimeout(function(){ window.location.reload(); }, 1000);                  
                    }
                    else if(dataResult.statusCode==201){
                       alert("Error occured !");
                    }
                    
                }
            });
    });
</script>
<script>
    $(document).ready(function(){
        $('#datos').load('cargar_curso.php');
  });
</script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</script>
<script>
    $(document).ready(function(){
        $('#datos').load('cargar_curso.php');
  });
</script>
