<div>
    <i class="fas fa-edit bg-yellow"></i>
    <div class="timeline-item">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Entrevista 2 - Por favor realice un resumen de sus logros hasta la fecha, considerando cada uno de los objetivos planteados, las actividades propuestas y los indicadores de cumplimiento. ¡Gracias!</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="<?php echo base_url(); ?>valoracion/mi_valoracion_adm/entrevista2_colab_registro" id="usrform" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Para el objetivo 1: <a href="#"> <?php echo  $estado->n_obj_1; ?></a></label> <br>
                        <textarea name="entrevista2_obj_1" class="form-control is-valid" rows="2" placeholder="Enter ..." required></textarea>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputPassword1">Para el objetivo 2: <a href="#"> <?php echo  $estado->n_obj_2; ?></a></label> <br>
                        <textarea name="entrevista2_obj_2" class="form-control is-valid" rows="2" placeholder="Enter ..." required></textarea>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputPassword1">Para el objetivo 3: <a href="#"> <?php echo  $estado->n_obj_3; ?></a></label> <br>
                        <textarea name="entrevista2_obj_3" class="form-control is-valid" rows="2" placeholder="Enter ..." required></textarea>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>

    </div>
</div>

