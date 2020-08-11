<section class="content">
    <div class="container-fluid">
        <!-- Timelime example  -->
        <div class="row">
            <div class="col-md-12">
                <!-- The time line -->
                <div class="timeline">
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-edit bg-blue"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> </span>
                            <h3 class="timeline-header"><a href="#">Objetivos</a> </h3>

                            <?php if ($estado == false) {
                                include 'application/views/valoraciones/valoracion_adm/valoracion_no_registrada.php'; ?>

                        </div>
                    </div>
                    <?php    } else {
                                if ($estado->estado == 'espera') {
                                    include 'application/views/valoraciones/valoracion_adm/success_objetivos.php'; ?>

                </div>
            </div>
        <?php
                                } else {
                                    include 'application/views/valoraciones/valoracion_adm/disable_objetivos.php'; ?>
        </div>
    </div>
    <!-- END timeline item -->
    <!-- timeline item -->
    <div>
        <i class="fas fa-user bg-green"></i>
        <div class="timeline-item">
            <span class="time"><i class="fas fa-clock"></i> <?php echo $estado->create_at ?></span>
            <h3 class="timeline-header no-border">Aceptaste los objetivos de <a href="#"> <?php echo $colaborador;?></a> </h3>
        </div>
    </div>
    <?php if ($estado_entrevista2_colab == false) {
                                    } else {

                                        if ($estado_entrevista2_colab[0]->coment1_evalu == null) {
                                            include 'application/views/valoraciones/valoracion_adm/add_entrevista2_evalu.php';
                                        } else {
                                            include 'application/views/valoraciones/valoracion_adm/disable_entrevista2_evalu.php';
                                            include 'application/views/valoraciones/valoracion_adm/add_entrevista3_evalu.php';
                                        }
                                    }
    ?>
<?php
                                }
                            }  ?>

<!-- END timeline item -->
<!-- timeline item -->

<!-- END timeline item -->



<div>
    
                      <button  class="btn btn-primary ir-arriba"><i class="fas fa-arrow-up"></i></button>

    </div>
</div>
</div>
</div>
<!-- /.col -->
</div>


</form>
</div>
<!-- /.timeline -->

</section>

<style>
    .ir-arriba {
        padding: 20px;
        background: #024959;
        font-size: 20px;
        color: #fff;
        cursor: pointer;
        position: fixed;
        bottom: 30px;
        right:455px;
    }
</style>

<script>
    $(document).ready(function() {

        $('.ir-arriba').click(function() {
            $('div').animate({
                scrollTop: '0px'
            }, 750);
        });


    });
</script>