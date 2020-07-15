<!-- Content Wrapper. Contains page content -->
<!-- Default box -->
<div class="box box-solid">
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <?php if ($this->session->flashdata("error")) : ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                    </div>
                <?php endif; ?>
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
                            <input type="number" class="form-control textCenter" name="promediovaloracion" id="promedioValoracion" placeholder="Promedio" readonly>
                        </section>
                        <section class="col-lg-6 connectedSortable ui-sortable">
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
                                        <?php for ($i = 0; $i < count($comunicaciones); $i++) { ?>
                                            <dd class="col-sm-8"> <?php echo $comunicaciones[$i]->descripcion; ?></dd>
                                            <dt class="col-sm-4"> <input type="number" value="<?php echo $detalle_valoraciones[$i + 6]->puntaje; ?>" name="inputTrabajo[]" class="form-control indicadorTrabajosequipo" min="1" max="4" required>
                                            </dt>
                                        <?php }; ?>
                                    </dl>
                                </div>
                            </div>
                            <div class="card card-lightblue">
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
                                        <?php for ($i = 0; $i < count($trabajosequipo); $i++) { ?>
                                            <dd class="col-sm-8"> <?php echo $trabajosequipo[$i]->descripcion; ?></dd>
                                            <dt class="col-sm-4"> <input type="number" value="<?php echo $detalle_valoraciones[$i]->puntaje; ?>" name="inputTrabajo[]" class="form-control indicadorTrabajosequipo" min="1" max="4" required>
                                            </dt>
                                        <?php }; ?>
                                    </dl>
                                </div>
                            </div>

                        </section>
                        <section class="col-lg-6 connectedSortable ui-sortable">
                            <div class="card card-lightblue">
                                <div class="card-header">
                                    <h3 class="card-title"> <?php echo $competencias[2]['nombre']; ?> </h3>
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
                            <div class="card card-lightblue">
                                <div class="card-header">
                                    <h3 class="card-title"> <?php echo $competencias[3]['nombre']; ?> </h3>
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
                        </section>
                    </div>
                    <div align="center">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>

<script>

</script>