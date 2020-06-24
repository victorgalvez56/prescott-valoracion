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
                <form action="<?php echo base_url(); ?>mantenimiento/areas/store" method="POST">
                    <div class="row">
                        <section class="connectedSortable ui-sortable ">
                        </section>
                        <section class="col-lg-6 connectedSortable ui-sortable center">
                            <img src="<?php echo base_url(); ?>assets/img/leyendapuntajes.png" alt="Leyenda" class="img-fluid" style="width: 500px">
                        </section>
                        <section class="col-lg-6 connectedSortable ui-sortable">
                            <textarea class="form-control textCenter" id="promedioValoracion" rows="1" placeholder="Promedio" disabled=""></textarea>
                        </section>
                        <section class="col-lg-6 connectedSortable ui-sortable">
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
                                        <?php foreach ($trabajosequipo as $trabajo) : ?>
                                            <dd class="col-sm-8"> <?php echo $trabajo->descripcion; ?></dd>
                                            <dt class="col-sm-4"> <input type="number" class="form-control indicadorTrabajosequipo" placeholder="Escriba del 1 a 4" min="1" max="4" required>
                                            </dt>
                                        <?php endforeach; ?>
                                    </dl>
                                </div>
                            </div>
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
                                            <dt class="col-sm-4"> <input type="number" class="form-control indicadorComunicacion" placeholder="Escriba del 1 a 4" min="1" max="4" required>
                                            </dt>
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
                                        <input size="1" name="puntajeProactividad" id="puntajeProactividad" readonly>
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body" style="display: block;">
                                    <dl class="row">
                                        <?php foreach ($proactividades as $proactividad) : ?>
                                            <dd class="col-sm-8"> <?php echo $proactividad->descripcion; ?></dd>
                                            <dt class="col-sm-4"> <input type="number" class="form-control indicadorProactividad" placeholder="Escriba del 1 a 4" min="1" max="4" required>
                                            </dt>
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
                                            <dt class="col-sm-4"> <input type="number" class="form-control indicadorAprendizaje" placeholder="Escriba del 1 a 4" min="1" max="4" required>
                                            </dt>
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