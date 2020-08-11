        <!-- <h3 class="card-title">Entrevista 2 - Respondió a los comentarios del colaborador, manifestando sus opiniones con respecto a los resultados que éste alcanzó y la forma en que los logró. Puedo incluir a manera de comentario aquellos aportes del colaborador que hayan superado el cumplimiento del objetivo.</h3><br>
                <label for="exampleInputPassword1">Fecha de registro: <a href="#"> <?php echo $estado_entrevista2_colab[0]->create_at; ?></a></label> <br> -->



<div>
    <i class="fas fa-edit bg-yellow"></i>
    <div class="timeline-item">
        <div class="card card-primary">
            <div class="card-header">
                <label for="exampleInputPassword1">Entrevista 2</label><br>
                <h2 class="card-title">Fecha registro colaborador:  <?php echo  $estado_entrevista2_colab[0]->create_at; ?> </h2><br>
                <h2 class="card-title">Fecha registro evaluador:  <?php echo  $estado_entrevista2_colab[0]->update_at; ?> </h2><br>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?php echo base_url(); ?>valoracion/mi_valoracion_adm/entrevista2_colab_registro" id="usrform" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Para el objetivo 1: <a href="#"> <?php echo  $estado->n_obj_1; ?></a></label> <br>
                        <label for="exampleInputPassword1">Comentario de <a href="#"><?php echo  $colaborador; ?></a></label>
                        <textarea  class="form-control is-valid" rows="3" placeholder="Enter ..." readonly><?php echo $estado_entrevista2_colab[0]->coment1_colab; ?></textarea>
                    </div>
                    <div class="form-group">

                        <label for="exampleInputPassword1">Comentario de <a href="#"><?php echo  $evaluador; ?></a></label>
                        <textarea name="a_obj_1" class="form-control is-warning" rows="3" placeholder="Enter ..." readonly><?php echo $estado_entrevista2_colab[0]->coment1_evalu; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Para el objetivo 2: <a href="#"> <?php echo  $estado->n_obj_2; ?></a></label> <br>
                        <label for="exampleInputPassword1">Comentario de <a href="#"><?php echo  $colaborador; ?></a></label>
                        <textarea  class="form-control is-valid" rows="3" placeholder="Enter ..." readonly><?php echo $estado_entrevista2_colab[0]->coment2_colab; ?></textarea>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Comentario de <a href="#"><?php echo  $evaluador; ?></a></label>
                        <textarea name="a_obj_1" class="form-control is-warning" rows="3" placeholder="Enter ..." readonly><?php echo $estado_entrevista2_colab[0]->coment2_evalu; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Para el objetivo 3: <a href="#"> <?php echo  $estado->n_obj_3; ?></a></label> <br>
                        <label for="exampleInputPassword1">Comentario de <a href="#"><?php echo  $colaborador; ?></a></label>
                        <textarea  class="form-control is-valid" rows="3" placeholder="Enter ..." readonly><?php echo $estado_entrevista2_colab[0]->coment3_colab; ?></textarea>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Comentario de <a href="#"><?php echo  $evaluador; ?></a></label>
                        <textarea name="a_obj_1" class="form-control is-warning" rows="3" placeholder="Enter ..." readonly><?php echo $estado_entrevista2_colab[0]->coment3_evalu; ?></textarea>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </form>
        </div>

    </div>
</div>