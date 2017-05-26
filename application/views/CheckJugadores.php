
<p id="checkeados"></p>
<div class="col-lg-3">
    <select class="form-control" id="tipo" onchange="reset()">
        <option value="10">Fútbol Sala</option>
        <option value="14">Fútbol 7</option>
        <option value="22">Fútbol 11</option>
        <option>4</option>
    </select>
</div>
<br>
<form method='post' action=''>
    <?php echo validation_errors(); ?>
    <?php $col = 0 ?>

    <?php echo '<div class="row" focus="true">' ?>
    <?php foreach ($misJugadores as $linea): ?>

        <div class="col-md-2 col-xs-2 col-sm-2">
            <div class="checkbox" id="jugadores">
                <label class="form-check-label">
                    <input class="form-check-input" type='checkbox' name='check[]' value='<?= $linea['id'] ?>' onclick="calcularMarcados()"><?= $linea['nombre'] ?><br>
                </label>
            </div>
        </div>

        <?php $col++; ?>
        <?php
        if ($col == 6) {
            echo "</div>";
            echo "<div class='row'>";
            $col = 0;
        }
    endforeach;
    echo "</div>";
    ?>
    <br>

    <div align="center">
        <input type='submit' class='btn btn-success btn-lg' id='calcular' name='calcular' value='Calcular' disabled='true'> 
    </div>
</form>
<script>

    function calcularMarcados()
    {
        var numberOfChecked = $('input:checkbox:checked').length;
        //var totalCheckboxes = $('input:checkbox').length;
        //var numberNotChecked = totalCheckboxes - numberOfChecked;
        $("#checkeados").show();
        $("#checkeados").html("Elegidos : " + numberOfChecked);
        var maxJugadores = $("#tipo").val();
        if (numberOfChecked == maxJugadores)
        {
            $("#calcular").prop("disabled", false);
        } else
        {
            $("#calcular").prop("disabled", true);
        }
    }
    function reset()
    {
        $("#jugadores input[type=checkbox]").prop('checked', false); 
        $("#checkeados").hide();
    }
</script>