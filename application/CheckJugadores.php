
    <p id="checkeados"></p>
    <form method='post' action=''>
        <?php echo validation_errors(); ?>
        <?php $col = 0 ?>

        <?php echo '<div class="row">' ?>
        <?php foreach ($misJugadores as $linea): ?>

            <div class="col-md-2 col-xs-12">
                <div class="checkbox">
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
        $("#checkeados").html("Elegidos : " + numberOfChecked);

        if (numberOfChecked == 10)
        {
            $("#calcular").prop("disabled", false);
        } else
        {
            $("#calcular").prop("disabled", true);
        }
    }

</script>