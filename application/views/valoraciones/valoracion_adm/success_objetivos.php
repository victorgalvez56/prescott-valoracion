<div class="timeline-body">
    <div class="card card-widget">
        <div class="card-header">
            <div class="user-block">
                <span class="username"><a href="#">Si está de acuerdo, acepte los objetivos</a></span>
                <span class="description"><?php echo $estado->create_at; ?></span>
            </div>
            <!-- /.user-block -->
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                    <i class="far fa-circle"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>

            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card card-warning">

            <!-- <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Alerta!</h5>
                  Puedes editar tus objetivos hasta que tu evaluador los acepte. Una vez aceptados, no podrán modificar. 
                </div> -->

            <!-- /.card-header -->
            <div class="card-body">
                <form id="form_success" action="<?php echo base_url(); ?>valoracion/valoracion_adm/success_objetivos" method="POST">
                    <input type="hidden" name="idObjetivos" value="<?php echo $estado->id; ?>">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Nombre Objetivo #1</label>
                                <input type="text" value="<?php echo  $estado->n_obj_1; ?>" name="n_obj_1" class="form-control is-valid" id="n_obj_1" placeholder="Enter ..." disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Acciones Objetivo #1</label>
                                <textarea name="a_obj_1" class="form-control" rows="2" placeholder="Enter ..." id="a_obj_1" disabled><?php echo  $estado->a_obj_1; ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Plazos para acciones #1</label>
                                <textarea name="p_obj_1" class="form-control" rows="2" placeholder="Enter ..." id="p_obj_1" disabled><?php echo  $estado->p_obj_1; ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Indicadores de desarrollo #1</label>
                                <textarea name="i_obj_1" class="form-control" rows="2" placeholder="Enter ..." id="i_obj_1" disabled><?php echo  $estado->i_obj_1; ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Resultados deseados #1</label>
                                <textarea name="r_obj_1" class="form-control" rows="2" placeholder="Enter ..." id="r_obj_1" disabled><?php echo  $estado->r_obj_1; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Nombre Objetivo #2</label>
                                <input type="text" value="<?php echo  $estado->n_obj_2; ?>" name="n_obj_2" class="form-control is-valid" id="n_obj_2" placeholder="Enter ..." disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Acciones Objetivo #2</label>
                                <textarea name="a_obj_2" class="form-control" rows="2" placeholder="Enter ..." id="a_obj_2" disabled><?php echo  $estado->a_obj_2; ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Plazos para acciones #2</label>
                                <textarea name="p_obj_2" class="form-control" rows="2" placeholder="Enter ..." id="p_obj_2" disabled><?php echo  $estado->p_obj_2; ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Indicadores de desarrollo #2</label>
                                <textarea name="i_obj_2" class="form-control" rows="2" placeholder="Enter ..." id="i_obj_2" disabled><?php echo  $estado->i_obj_2; ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Resultados deseados #2</label>
                                <textarea name="r_obj_2" class="form-control" rows="2" placeholder="Enter ..." id="r_obj_2" disabled><?php echo  $estado->r_obj_2; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Nombre Objetivo #3</label>
                                <input type="text" value="<?php echo  $estado->n_obj_3; ?>" name="n_obj_3" class="form-control is-valid" id="n_obj_3" placeholder="Enter ..." disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Acciones Objetivo #3</label>
                                <textarea name="a_obj_3" class="form-control" rows="2" placeholder="Enter ..." id="a_obj_3" disabled><?php echo  $estado->a_obj_3; ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Plazos para acciones #3</label>
                                <textarea name="p_obj_3" class="form-control" rows="2" placeholder="Enter ..." id="p_obj_3" disabled><?php echo  $estado->p_obj_3; ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Indicadores de desarrollo #3</label>
                                <textarea name="i_obj_3" class="form-control" rows="2" placeholder="Enter ..." id="i_obj_3" disabled><?php echo  $estado->i_obj_3; ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Resultados deseados #3</label>
                                <textarea name="r_obj_3" class="form-control" rows="2" placeholder="Enter ..." id="r_obj_3" disabled><?php echo  $estado->r_obj_3; ?></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label class="col-form-label" for=""><i class="fas fa-check"></i> Comentario opcional</label>
                                <textarea name="comentario_opcional" class="form-control" rows="2" placeholder="Enter ..." id="comentario_opcional"></textarea>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="col-sm-3">
            <button id="aceptar_objetivos" alt="submit" class="btn btn-primary btn-sm">Aceptar Objetivos</button>
        </div>
        <!-- /.card-footer -->
        <div class="card-footer">

        </div>
        <!-- /.card-footer -->
    </div>
</div>
<div class="timeline-footer">
</div>
<script>
    $(document).on("click", "#aceptar_objetivos", function() {

        if ($("#n_obj_1").val().length <= 0 ||
            $("#a_obj_1").val().length <= 0 ||
            $("#p_obj_1").val().length <= 0 ||
            $("#i_obj_1").val().length <= 0 ||
            $("#r_obj_1").val().length <= 0 ||

            $("#n_obj_2").val().length <= 0 ||
            $("#a_obj_2").val().length <= 0 ||
            $("#p_obj_2").val().length <= 0 ||
            $("#i_obj_2").val().length <= 0 ||
            $("#r_obj_2").val().length <= 0 ||

            $("#n_obj_3").val().length <= 0 ||
            $("#a_obj_3").val().length <= 0 ||
            $("#p_obj_3").val().length <= 0 ||
            $("#i_obj_3").val().length <= 0 ||
            $("#r_obj_3").val().length <= 0
        ) {
            alert("El colaborador aún no completa todos los campos");
        } else {
            $("#form_success").submit();
        }
    });
</script>