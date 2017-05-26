<div style="margin-left: 20px;">
    <div class="row">
        <div class="col-md-3 col-sm-2 col-xs-2"><b>Jugador</b></div>
        <div class="col-md-2 col-sm-2 col-xs-2"><b>Tecnica</b></div> 
        <div class="col-md-2 col-sm-2 col-xs-2"><b>Fisico</b></div>
        <div class="col-md-2 col-sm-2 col-xs-2"><b>Puntuación</b></div>
        <div class="col-md-2 col-sm-2 col-xs-2"><b>Categoría</b></div>
    </div>      
    <hr>
    <?php
    $nlinea = 0;
    foreach ($misJugadores as $linea):
        ?>
        <?php
        if ($nlinea % 2 == 0) {
            echo '<div class="row" style="background-color : Gainsboro ;">';
        } else {
            echo '<div class="row">';
        }
        $nlinea++;
        ?>
        <div class="col-md-3 col-sm-2 col-xs-2"><?= $linea['nombre'] ?></div>
        <div class="col-md-2 col-sm-2 col-xs-2"><?= $linea['tecnica'] ?></div>
        <div class="col-md-2 col-sm-2 col-xs-2"><?= $linea['fisica'] ?></div>
        <div class="col-md-2 col-sm-2 col-xs-2"><?= $linea['puntuacion'] ?></div>
        <div class="col-md-2 col-sm-2 col-xs-2"><?= $linea['categoria'] ?></div>
        <?php
        echo "</div>";
        ?>
    <?php endforeach; ?>

</div>