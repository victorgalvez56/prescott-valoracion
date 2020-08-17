<form action="<?php echo base_url(); ?>valoracion/valoracion_adm/store" method="POST">
    <input type="hidden" id="tipo_validacion" name="tipo_validacion" value=" <?php echo $tipo_validacion; ?>">
    <input type="hidden" id="nameUsuario" name="idUsuario" value=" <?php echo $usuario->nombres . " " . $usuario->apellidos; ?>">
    <input type="hidden" id="idUsuario" name="idUsuario" value=" <?php echo $usuario->id; ?>">

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
                <div id="boxPromedio1" class="info-box bg-red">
                <input type="hidden" class="form-control textCenter" name="promediovaloracion" id="promedioValoracion" placeholder="Promedio" readonly>
                    <div class="info-box-content center">
                        <strong>Promedio</strong>
                        <h1 id="promedioValoracion1">0</h1>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </section>





        <section class="col-lg-6 connectedSortable ui-sortable">
            <div class="card card-lightblue">

                <div class="card card-lightblue">
                    <div class="card-header">
                        <h3 class="card-title"> <?php echo $competencias[0]['nombre']; ?> </h3>
                        <div class="card-tools">
                            <input size="1" name="puntajeComunicacion" id="puntajeComunicacion" readonly>
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body" style="display: block;">
                        <dl class="row">
                            <?php foreach ($comunicaciones as $comunicacion) : ?>
                                <dd class="col-sm-8"> <?php echo $comunicacion->descripcion; ?></dd>
                                <dt class="col-sm-4"> <input type="number" name="inputComunicacion[]" class="form-control indicadorComunicacion" placeholder="Escriba del 1 a 4" min="1" max="4" required>
                                </dt>
                                <input type="hidden" name="idPuntajeComunicaciones[]" value="<?php echo $comunicacion->id; ?>">
                            <?php endforeach; ?>
                        </dl>
                    </div>
                </div>
                <div class="card-header">
                    <h3 class="card-title"> <?php echo $competencias[1]['nombre']; ?> </h3>
                    <div class="card-tools">
                        <input size="1" name="puntajeTrabajosequipo" id="puntajeTrabajosequipo" readonly>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body" style="display: block;">
                    <dl class="row">
                        <?php foreach ($trabajosequipo as $trabajo) : ?>
                            <dd class="col-sm-8"> <?php echo $trabajo->descripcion; ?></dd>
                            <dt class="col-sm-4"> <input type="number" name="inputTrabajo[]" class="form-control indicadorTrabajosequipo" placeholder="Escriba del 1 a 4" min="1" max="4" required>
                            </dt>
                            <input type="hidden" name="idPuntajeTrabajo[]" value="<?php echo $trabajo->id; ?>">
                        <?php endforeach; ?>
                    </dl>
                </div>
            </div>
        </section>
        <section class="col-lg-6 connectedSortable ui-sortable">

            <div class="card card-lightblue">
                <div class="card-header">
                    <h3 class="card-title"> <?php echo $competencias[2]['nombre']; ?> </h3>
                    <div class="card-tools">
                        <input size="1" name="puntajeAprendizaje" id="puntajeAprendizaje" readonly>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body" style="display: block;">
                    <dl class="row">
                        <?php foreach ($aprendizajes as $aprendizaje) : ?>
                            <dd class="col-sm-8"> <?php echo $aprendizaje->descripcion; ?></dd>
                            <dt class="col-sm-4"> <input type="number" name="inputAprendizaje[]" class="form-control indicadorAprendizaje" placeholder="Escriba del 1 a 4" min="1" max="4" required>
                            </dt>
                            <input type="hidden" name="idPuntajeAprendizaje[]" value="<?php echo $aprendizaje->id; ?>">
                        <?php endforeach; ?>
                    </dl>
                </div>
            </div>
            <div class="card card-lightblue">
                <div class="card-header">
                    <h3 class="card-title"> <?php echo $competencias[3]['nombre']; ?> </h3>
                    <div class="card-tools">
                        <input size="1" name="puntajeProactividad" id="puntajeProactividad" readonly>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body" style="display: block;">
                    <dl class="row">
                        <?php foreach ($proactividades as $proactividad) : ?>
                            <dd class="col-sm-8"> <?php echo $proactividad->descripcion; ?></dd>
                            <dt class="col-sm-4"> <input type="number" name="inputProactividad[]" class="form-control indicadorProactividad" placeholder="Escriba del 1 a 4" min="1" max="4" required>
                            </dt>
                            <input type="hidden" name="idPuntajeProactividad[]" value="<?php echo $proactividad->id; ?>">
                        <?php endforeach; ?>
                    </dl>
                </div>
            </div>

        </section>
    </div>
    <div align="center">
        <button type="submit" class="btn btn-primary toastrDefaultSuccess">Guardar</button>
    </div>
</form>