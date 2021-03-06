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
                                include 'application/views/valoraciones/valoracion_adm/valoracion_objetivos_no_registrada.php'; ?>

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
            <h3 class="timeline-header no-border">Aceptaste los objetivos</h3>
        </div>
    </div>

    <?php if ($estado_entrevista2_colab == false) {
                                    } else {

                                        if ($estado_entrevista2_colab[0]->coment1_evalu == null) {
                                            include 'application/views/valoraciones/valoracion_adm/add_entrevista2_evalu.php';
                                        } else {
                                            include 'application/views/valoraciones/valoracion_adm/disable_entrevista2_evalu.php';
                                            if ($estado_entrevista3_evalu == false) {
                                                include 'application/views/valoraciones/valoracion_adm/add_entrevista3_evalu.php';
                                            } else {

                                                if ($estado_entrevista3_evalu[0]->coment1_colab == null) {
                                                    include 'application/views/valoraciones/valoracion_adm/disable_entrevista3_evalu.php';
                                                    include 'application/views/valoraciones/valoracion_adm/puntaje_valoracion_objetivos.php';

                                                } else {
                                                    include 'application/views/valoraciones/valoracion_adm/disable_entrevista3_colab.php';
                                                    if ($estado_entrevista3_evalu[0]->ruta_firma_evalu == null) {
                                                        include 'application/views/valoraciones/valoracion_adm/puntaje_valoracion_objetivos.php';
                                                        include 'application/views/valoraciones/valoracion_adm/add_firma_evalu.php';

                                                    } else {

                                                        if ($estado_entrevista3_evalu[0]->ruta_firma_colab == null) {
                                                            include 'application/views/valoraciones/valoracion_adm/disable_firma_evalu.php';
                                                        } else {
                                                            include 'application/views/valoraciones/valoracion_adm/puntaje_valoracion_objetivos.php';
                                                            include 'application/views/valoraciones/valoracion_adm/disable_firma_evalu.php';
                                                            include 'application/views/valoraciones/valoracion_adm/disable_firma_colab.php';

    ?>
                            <div>
                                <i class="fas fa-ban  bg-red "></i>
                                <div class="timeline-item">
                                    <h3 class="timeline-header no-border"><a href="#"> El registro de valoración por objetivos se ha terminado</a></h3>
                                </div>
                            </div>



    <?php  }
                                                    }
                                                }
                                            }
                                        }
                                    }
    ?>
<?php
                                }
                            }  ?>

<!-- END timeline item -->
<!-- timeline item -->

<!-- END timeline item -->



</div>

<div>

	<a class="ir-arriba"  javascript:void(0) title="Volver arriba">
  <span class="fa-stack">
    <i class="fa fa-circle fa-stack-2x"></i>
    <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
  </span>
	</a>
	<a class="ir-abajo"  javascript:void(0) title="Volver arriba">
  <span class="fa-stack">
    <i class="fa fa-circle fa-stack-2x"></i>
    <i class="fa fa-arrow-down fa-stack-1x fa-inverse"></i>
  </span>
	</a>

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
	/*Flecha para hacer la pagina hacia arriba*/
	.ir-arriba{
		background-repeat:no-repeat;
		font-size:20px;
		color:black;
		cursor:pointer;
		position:fixed;
		bottom:500px;
		right:10px;
		z-index:2;
	}
	.ir-abajo{
		background-repeat:no-repeat;
		font-size:20px;
		color:black;
		cursor:pointer;
		position:fixed;
		bottom:500px;
		right:50px;
		z-index:2;
	}
</style>

<script>
    $(document).ready(function() {

        $('.ir-arriba').click(function() {
            $('div').animate({
                scrollTop: '0px'
            }, 750);
        });
		$('.ir-abajo').click(function() {
			$('div').animate({
				scrollTop: '5000px'
			}, 750);
		});

    });
</script>
