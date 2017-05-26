
<?php echo validation_errors(); ?>
<!--<p><?= $ok ?></p>-->
<form method="post" action=''>
    <div class="col-md-12"> 
        <?php echo form_label('Nombre: &nbsp;  '), form_dropdown('jugador', $misJugadores, '', 'class="form-control" id="jugador"'); ?>
        <input type="text" id="nombre" name="nombre"  class="form-control" hidden="hidden">
        <input type="text" id="id" name="id"  class="form-control" hidden="hidden">
        <br>
        Resistencia Fisica:
        <input type="number" id="fisica" name="fisica" min="1" max="9" class="form-control" readonly="readonly">
        <br>
        Capacidad Tecnica:
        <input type="number" id="tecnica" name="tecnica" min="1" max="9" class="form-control" readonly="readonly">
        <br>
        <div align="center">
            <input type='submit' class='btn btn-success btn-lg' value="Guardar" hidden="hidden" id="guardar"> 
        </div>
    </div>
</form>
<script>
    $('#jugador').on('change',function(){
         
        var mydata = $("#jugador").val();
        var url = "<?php echo base_url() . 'index.php/Jugador/DevolverJugador'; ?>" ;
        if(mydata != "-1")
        {
            
        
        $.ajax({
           type: "POST",
           url: url,
           data: {"id" : mydata}, // serializes the form's elements.
           success: function(data)
           {   
               
              var jugador = JSON.parse(data);
              $("#tecnica").attr("readonly", false);
              $("#tecnica").val(jugador.tecnica);
              $("#fisica").attr("readonly", false);
              $("#fisica").val(jugador.fisica);
              $("#nombre").val(jugador.nombre);
              $("#id").val(jugador.id);
              $("#guardar").attr("hidden",false);
           }
         });
         }else
         {
            $("#tecnica").attr("readonly", true);
            $("#tecnica").val("");
            $("#fisica").attr("readonly", true);
            $("#fisica").val("");
            $("#nombre").val("");
            $("#id").val("");
            $("#guardar").attr("hidden",true); 
         }
    });
</script>