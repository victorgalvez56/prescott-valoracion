<div class="row">
    <section class="connectedSortable ui-sortable ">
    </section>
    <section class="col-lg-6 connectedSortable ui-sortable center">
        <img src="<?php echo base_url(); ?>assets/img/leyendapuntajes.png" alt="Leyenda" class="img-fluid" style="width: 500px">
    </section>
    <section class="col-lg-6 connectedSortable ui-sortable">
        <!-- <textarea class="form-control textCenter" id="promedioValoracion" rows="1" placeholder="Promedio" disabled=""></textarea> -->
        <!-- <input type="number" class="form-control textCenter" name="promediovaloracion" id="promedioValoracion" placeholder="Promedio" readonly> -->
        <div class=" col-12">
        <div id="boxPromedio2" class="info-box">

              <div class="info-box-content center">
                <strong>Promedio</strong>
                <h1 id="promedioValoracion2"></h1>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
    </section>
    <section class="col-lg-6 connectedSortable ui-sortable">
        <div class="card card-lightblue">
            <div class="card-header">
                <h3 class="card-title"><?php echo $puntajes1_val2[0]->nombre; ?> </h3>
                <div class="card-tools">
                    <input size="1" name="puntajeComunicacion" id="puntajeComunicacion2" readonly>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <dl class="row">
                    <?php foreach ($puntajes1_val2 as $puntaje1) : ?>
                        <dd class="col-sm-8"> <?php echo $puntaje1->descripcion; ?></dd>
                        <dt class="col-sm-4"> <input type="number" name="inputTrabajo[]" class="form-control indicadorComunicacion2" placeholder="Escriba del 1 a 4" min="1" max="4" value="<?php echo $puntaje1->puntaje; ?>" disabled>
                        </dt>
                    <?php endforeach; ?>
                </dl>
            </div>
        </div>
        <div class="card card-lightblue">
            <div class="card-header">
                <h3 class="card-title"><?php echo $puntajes2_val2[0]->nombre; ?> </h3>
                <div class="card-tools">
                    <input size="1" name="puntajeTrabajosequipo" id="puntajeTrabajosequipo2" readonly>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <dl class="row">
                    <?php foreach ($puntajes2_val2 as $puntaje2) : ?>
                        <dd class="col-sm-8"> <?php echo $puntaje2->descripcion; ?></dd>
                        <dt class="col-sm-4"> <input type="number" class="form-control indicadorTrabajosequipo2" value="<?php echo $puntaje2->puntaje; ?>" disabled>
                        </dt>
                    <?php endforeach; ?>
                </dl>
            </div>
        </div>

    </section>
    <section class="col-lg-6 connectedSortable ui-sortable">
        <div class="card card-lightblue">
            <div class="card-header">
                <h3 class="card-title"><?php echo $puntajes3_val2[0]->nombre; ?> </h3>
                <div class="card-tools">
                    <input size="1" name="puntajeProactividad" id="puntajeProactividad2" readonly>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <dl class="row">
                    <?php foreach ($puntajes3_val2 as $puntaje3) : ?>
                        <dd class="col-sm-8"> <?php echo $puntaje3->descripcion; ?></dd>
                        <dt class="col-sm-4"> <input type="number" class="form-control indicadorProactividad2" value="<?php echo $puntaje3->puntaje; ?>" disabled>
                        </dt>
                    <?php endforeach; ?>
                </dl>
            </div>
        </div>
        <div class="card card-lightblue">
            <div class="card-header">
                <h3 class="card-title"><?php echo $puntajes4_val2[0]->nombre; ?> </h3>
                <div class="card-tools">
                    <input size="1" name="puntajeAprendizaje" id="puntajeAprendizaje2" readonly>
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <dl class="row">
                    <?php foreach ($puntajes4_val2 as $puntaje4) : ?>
                        <dd class="col-sm-8"> <?php echo $puntaje4->descripcion; ?></dd>
                        <dt class="col-sm-4"> <input type="number" class="form-control indicadorAprendizaje2" value="<?php echo $puntaje4->puntaje; ?>" disabled>
                        </dt>
                    <?php endforeach; ?>
                </dl>
            </div>
        </div>
    </section>
</div>