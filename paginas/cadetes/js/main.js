
  $(document).ready(function()
  {
    Dropzone.autoDiscover = false;
    $("#dropzone").dropzone({
      url: "registroAspirantes_back.php",
      addRemoveLinks: true,
    //  maxFiles: 12, //maximo de archivos
    //  maxFileSize: 1, //peso maximo de los archivos en megas
      dictResponseError: "Ha ocurrido un error en el servidor",
      acceptedFiles: 'image/*,.jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF,.rar,application/pdf,.psd',
      complete: function(file)//funcion para determinar si un archivo se subió
      {
        if(file.status == "success")
        {
              alert("El siguiente archivo se ha subido correctamente: " + file.name);
          }
      },
      init: function() //funcion principal para determinar el estado de un archivo
      {
  //-------------------------------------------
        //rescata el nombre del usuario
          var nom = document.getElementById('curp')            ;
          //var tip = document.getElementById('tipo_elemento');
        this.on("sending", function(file, xhr, formData)//funcion que permite enviar información extra, en este caso el nombre del usuario
        {
          //alert(nom);
          formData.append("nombre", nom.value);
        });
  //-------------------------------------------
        this.on("maxfilesexceeded", function(file)//funcion que permite verificar el maximo de archivos
        {
          alert("maximo de archivos alcanzado");//mensaje de alerta
             this.removeFile(file);//alimina archivo excedente
        });
  //-------------------------------------------
        this.on("removedfile", function(file)//funcion que permite eliminar archivos en la zona "dropzone"
        {
          //alert("el archivo: "+file.name+" no se subirá");//mensaje de alerta del archivo eliminado
          var nom = document.getElementById('curp');//rescata el nombre de usuario
          //alert(nom);
          $.ajax({//con una funcion ajax, se envian parametros
            type: "POST",//metodo de envio
            url: "registroAspirantes_back.php?delete=true",//direccion a donde se envia
            data: {"filename": file.name, "nombre2": nom.value},//parametros que se envian "nombre del archivo" y " nombre del usuario"
          })
          .done(function(respuesta){
            //alert(respuesta);
          })
        });
      }
    });
  });
function recargar() {
  location.reload();
}
