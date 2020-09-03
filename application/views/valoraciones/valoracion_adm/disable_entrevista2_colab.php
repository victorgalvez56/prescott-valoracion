<div>
    <i class="fas fa-edit bg-yellow"></i>
    <div class="timeline-item">
        </span>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Entrevista 2 - Por favor realice un resumen de sus logros hasta la fecha, considerando cada uno de los objetivos planteados, las actividades propuestas y los indicadores de cumplimiento. ¡Gracias!.</h3><br>
                <label for="exampleInputPassword1">Fecha de registro: <a href="#"> <?php echo $estado_entrevista2_colab[0]->create_at; ?></a></label> <br>

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Para el objetivo 1: <a href="#"> <?php echo  $estado->n_obj_1; ?></a></label> <br>
                    <textarea  class="form-control is-valid" rows="2" placeholder="Enter ..." readonly><?php echo $estado_entrevista2_colab[0]->coment1_colab; ?></textarea>
                </div>
          
                <div class="form-group">
                    <label for="exampleInputPassword1">Para el objetivo 2: <a href="#"> <?php echo  $estado->n_obj_2; ?></a></label> <br>
                    <textarea  class="form-control is-valid" rows="2" placeholder="Enter ..." readonly><?php echo $estado_entrevista2_colab[0]->coment2_colab; ?></textarea>
                </div>
             
                <div class="form-group">
                    <label for="exampleInputPassword1">Para el objetivo 3: <a href="#"> <?php echo  $estado->n_obj_3; ?></a></label> <br>
                    <textarea  class="form-control is-valid" rows="2" placeholder="Enter ..." readonly><?php echo $estado_entrevista2_colab[0]->coment3_colab; ?></textarea>
                </div>
         
            </div>
            <!-- <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                </div> -->
        </div>
    </div>
</div>