<div class="row">
    <div class="col-md-8 col-sm-12 col-xs-12">
        <h6> 
             <?php if($color == 0){  ?> 
                    <img src="<?= base_url() ?>res/color.jpg" alt=""/> 
            <?php }
                  else { ?>
                    <img src="<?= base_url() ?>res/blanco.png" alt=""/>
            <?php }?> 
            <?= round(($mediaA * 100)/($mediaA+$mediaB),1)  ?>
           
        
                    <div hidden="hidden" style="display: inline-block;" id="peleonA"><img  src="<?= base_url() ?>res/peleon.jpg" alt=""/><?= $fisicoA ?></div>
                    <div hidden="hidden" style="display: inline-block;"id="magoA"><img src="<?= base_url() ?>res/mago.jpg" alt=""/> <?= $tecnicaA?></div>
        </h6>
        <table class="table table-striped">
<!--            <th>Tecnica</th>
            <th>Fisica</th>
            <th>Puntuación</th>
            <th>Categoria</th>-->
            <?php $mediaFisicaA = 0; $mediaTecnicaB = 0 ?>
            <?php foreach ($equipoA as $linea): ?>
                <tr>
                    <td><?= $linea->nombre ?></td>
<!--                    <td><?= $linea->tecnica ?></td>
                    <td><?= $linea->fisica ?></td>
                    <td><?= $linea->puntuacion ?></td>
                    <td><?= $linea->categoria ?></td>-->
                </tr>
                
            <?php endforeach; ?>

        </table>
    </div>
    <div class="col-md-8 col-sm-12 col-xs-12">
        <h6> 
            <?php if($color == 1){  ?> 
            <img src="<?= base_url() ?>res/color.jpg" alt=""/> 
                <?php } 
                else { ?>
                        <img src="<?= base_url() ?>res/blanco.png" alt=""/>
            <?php }?>
            <?= round(($mediaB * 100)/($mediaA+$mediaB),1)  ?>
            
        
                        <div style="display: inline-block;" hidden="hidden" id="peleonB"><img src="<?= base_url() ?>res/peleon.jpg" alt=""/><?= $fisicoB ?></div>
                    <div style="display: inline-block;" hidden="hidden" id="magoB"><img src="<?= base_url() ?>res/mago.jpg" alt=""/> <?= $tecnicaB?></div>
        </h6>
        <table class="table table-striped">
<!--            <th>Tecnica</th>
            <th>Fisica</th>
            <th>Puntuación</th>
            <th>Categoria</th>-->
            <?php foreach ($equipoB as $linea): ?>
                <tr>
                    <td><?= $linea->nombre ?></td>
<!--                    <td><?= $linea->tecnica ?></td>
                    <td><?= $linea->fisica ?></td>
                    <td><?= $linea->puntuacion ?></td>
                    <td><?= $linea->categoria ?></td>-->
                </tr>

            <?php endforeach; ?>

        </table>
    </div>
</div>
<div class="row">
    <button  type="button" class="btn btn-success btn-block" id="detalles">
        <span class=" glyphicon glyphicon-refresh "  > Ver detalles </span>
    </button>
</div>
<div class="row">
    <button  type="button" class="btn btn-success btn-block" id="ocultarDetalles" hidden="hidden">
        <span class=" glyphicon glyphicon-refresh "  > Ocultar detalles </span>
    </button>
</div>
<div class="row">
    <button  type="button" class="btn btn-success btn-block" id="refrescar">
        <span class=" glyphicon glyphicon-refresh "  > Volver a generar </span>
    </button>
</div>

<script>
    $("#refrescar").click(function(){
            location.reload();
        });
    $("#detalles").click(function(){
        
        $("#ocultarDetalles").attr("hidden", false);
        $("#detalles").attr("hidden", true);
        $("#magoA").attr("hidden", false);
        $("#magoB").attr("hidden", false);
        $("#peleonA").attr("hidden", false);
        $("#peleonB").attr("hidden", false);
   });
   $("#ocultarDetalles").click(function(){
        
        $("#ocultarDetalles").attr("hidden", true);
        $("#detalles").attr("hidden", false);
        $("#magoA").attr("hidden", true);
        $("#magoB").attr("hidden", true);
        $("#peleonA").attr("hidden", true);
        $("#peleonB").attr("hidden", true);
   });
</script>
