<div id="central-content">
  <form>
   <br />
   <div class="table-responsive">
   <br />
   <h3>Referencias</h3>
    <br />
    <table id="user_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Nombre</th>
       <th>Telefono</th>
       <th>Domicilio</th>
       <th>Parentesco</th>
       <th></th>
      </tr>
     </thead>
    </table>
   </div>
   <div align="right">
    <button type="button" name="add" id="add" class="btn btn-info">Agregar</button>
   </div>
   <br />
   <h3>Hijos</h3>
    <br />
    <table id="user_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Nombre</th>
       <th>Fecha de Nacimiento</th>
       <th>Domicilio</th>
       <th>Telefono</th>
       <th></th>
      </tr>
     </thead>
    </table>
   </div>
   <div align="right">
    <button type="button" name="add" id="add" class="btn btn-info">Agregar</button>
   </div>


<script type="text/javascript" language="javascript" >
 $(document).ready(function(){

  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetch.php",
     type:"POST"
    }
   });
  }

  function update_data(id, column_name, value)
  {
   $.ajax({
    url:"update.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#user_data').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
   }, 5000);
  }

  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(id, column_name, value);
  });

  $('#add').click(function(){
   var html = '<tr>';
   html += '<td contenteditable id="data1"></td>';
   html += '<td contenteditable id="data2"></td>';
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
  });

  $(document).on('click', '#insert', function(){
   var first_name = $('#data1').text();
   var last_name = $('#data2').text();
   if(first_name != '' && last_name != '')
   {
    $.ajax({
     url:"insert.php",
     method:"POST",
     data:{first_name:first_name, last_name:last_name},
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
   else
   {
    alert("Both Fields is required");
   }
  });

  $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"delete.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });
 });
</script>

<div class="text-right mt-4">
  <button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
</div>
