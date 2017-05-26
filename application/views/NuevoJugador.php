
<?php echo validation_errors(); ?>
<!--<p><?= $ok ?></p>-->

<form method='post' action=''> <tr>

    <div class="col-md-12">
        Nombre:
        <input type="text" id="nombre" name="nombre" class="form-control">                      
        <br>
        Resistencia Fisica:
        <input type="number" id="fisica" name="fisica" min="1" max="9" class="form-control">
        <br>
        Capacidad Tecnica:
        <input type="number" id="tecnica" name="tecnica" min="1" max="9" class="form-control">
        <br>
        <div align="center">
            <input type='submit' class='btn btn-success btn-lg' value="Guardar"> 
        </div>
    </div>
</form>
