<div>
    <i class="fas fa-edit bg-yellow"></i>
    <div class="timeline-item">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Entrevista 3</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?php echo base_url(); ?>valoracion/mi_valoracion_adm/entrevista3_colab_registro" id="usrform" method="POST">

                <input type="hidden" name="id_colaborador" value="<?php echo $estado_entrevista2_colab[0]->colaborador_id; ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Para el objetivo 1: <a href="#"> <?php echo  $estado->n_obj_1; ?></a></label> <br>
                        <label for="exampleInputPassword1">¿El objetivo fue logrado?</label>
                        <input type="hidden" id="calif_1" value="<?php echo $estado_entrevista3_evalu[0]->calif_obj1; ?>">
                        <input type="hidden" id="calif_2" value="<?php echo $estado_entrevista3_evalu[0]->calif_obj2; ?>">
                        <input type="hidden" id="calif_3" value="<?php echo $estado_entrevista3_evalu[0]->calif_obj3; ?>">

                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio1" value="1" disabled>
                            <label for="customRadio1" class="custom-control-label">Si</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio2" value="0" disabled>
                            <label for="customRadio2" class="custom-control-label">No</label>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for=""><a href="#"><?php echo $evaluador; ?></a> por favor registre su comentario.</label>
                        <textarea class="form-control is-warning" rows="2" placeholder="Enter ..." disabled><?php echo $estado_entrevista3_evalu[0]->coment1_evalu; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for=""><a href="#"><?php echo $colaborador; ?></a> por favor registre su comentario.</label>
                        <textarea name="entrevista3_obj_1" class="form-control is-valid" rows="2" placeholder="Enter ..." required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Para el objetivo 2: <a href="#"> <?php echo  $estado->n_obj_2; ?></a></label> <br>
                        <label for="exampleInputPassword1">¿El objetivo fue logrado?</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio3" name="option2" value="1" disabled>
                            <label for="customRadio3" class="custom-control-label">Si</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio4" name="option2" value="0" disabled>
                            <label for="customRadio4" class="custom-control-label">No</label>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for=""><a href="#"><?php echo $evaluador; ?></a> por favor registre su comentario.</label>
                        <textarea class="form-control is-warning" rows="2" placeholder="Enter ..." disabled><?php echo $estado_entrevista3_evalu[0]->coment2_evalu; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for=""><a href="#"><?php echo $colaborador; ?></a> por favor registre su comentario.</label>
                        <textarea name="entrevista3_obj_2" class="form-control is-valid" rows="2" placeholder="Enter ..." required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Para el objetivo 3: <a href="#"> <?php echo  $estado->n_obj_3; ?></a></label> <br>
                        <label for="exampleInputPassword1">¿El objetivo fue logrado?</label>

                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio5" value="1" disabled>
                            <label for="customRadio5" class="custom-control-label">Si</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio6" value="0" disabled>
                            <label for="customRadio6" class="custom-control-label">No</label>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for=""><a href="#"><?php echo $evaluador; ?></a> por favor registre su comentario.</label>
                        <textarea class="form-control is-warning" rows="2" placeholder="Enter ..." disabled><?php echo $estado_entrevista3_evalu[0]->coment3_evalu; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for=""><a href="#"><?php echo $colaborador; ?></a> por favor registre su comentario.</label>
                        <textarea name="entrevista3_obj_3" class="form-control is-valid" rows="2" placeholder="Enter ..." required></textarea>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>

    </div>
</div>

<script>

</script>