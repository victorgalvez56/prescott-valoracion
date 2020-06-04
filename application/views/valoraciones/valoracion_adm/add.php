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
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon Light"><i class="far fa-copy"></i></span>

                                <div class="info-box-content">
                                <span class="info-box-number">Puntaje de Projectos</span>
                                    <input type="number" class="form-control" name="puntajeProyectos" id="puntajeProyectos" placeholder="Puntaje Proyectos" required>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning"><i class="far fa-star"></i></span>

                                <div class="info-box-content">
                                <span class="info-box-number">Promedio Final</span>
                                    <span class="info-box-number">93,139</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="row">
                        <section class="col-lg-6 connectedSortable ui-sortable">
                            <div class="card card-primary">
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
                                            <dt class="col-sm-4"> <input type="number" class="form-control" id="indicadorTrabajosequipo" placeholder="Escriba del 1 a 4" required>
                                            </dt>
                                        <?php endforeach; ?>
                                    </dl>
                                </div>
                            </div>
                            <div class="card card-warning">
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
                                            <dt class="col-sm-4"> <input type="number" class="form-control" id="indicadorComunicacion" placeholder="Escriba del 1 a 4" required>
                                            </dt>
                                        <?php endforeach; ?>
                                    </dl>
                                </div>
                            </div>
                        </section>
                        <section class="col-lg-6 connectedSortable ui-sortable">
                            <div class="card card-success">
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
                                            <dt class="col-sm-4"> <input type="number" class="form-control" id="indicadorProactividad" placeholder="Escriba del 1 a 4" required>
                                            </dt>
                                        <?php endforeach; ?>
                                    </dl>
                                </div>
                            </div>
                            <div class="card card-danger">
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
                                            <dt class="col-sm-4"> <input type="number" class="form-control" id="indicadorAprendizaje" placeholder="Escriba del 1 a 4" required>
                                            </dt>
                                        <?php endforeach; ?>
                                    </dl>
                                </div>
                            </div>

                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>