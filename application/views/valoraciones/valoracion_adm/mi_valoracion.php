  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Valoraciones</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Valoraciones</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->

      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header d-flex p-0">
                              <?php
                                if ($padre_registrador == false) {
                                ?>
                                  <h3 class="card-title p-3">
                                      <strong>Este usuario no tiene quien lo registre. Contactar a sistemas.
                                      </strong>
                                  </h3>
                              <?php } else { ?>

                                  <h3 class="card-title p-3">Registrado por
                                      <strong>
                                          <?php echo $padre_registrador->nombres . " " . $padre_registrador->apellidos; ?>
                                      </strong>
                                  </h3>
                                  <ul class="nav nav-pills ml-auto p-2">
                                      <li class="nav-item"><a class="nav-link" href="#tab_1" data-toggle="tab">Valoración 1</a></li>
                                      <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Valoración 2</a></li>
                                      <li class="nav-item"><a class="nav-link active" href="#tab_3" data-toggle="tab">Valoración por objetivos</a></li>
                                  </ul>
                          </div>
                          <div class="card-body">
                              <div class="tab-content">
                                  <div class="tab-pane" id="tab_1">
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
                                                      <?php if ($puntajes1_val1 == true) { ?>
                                                          <?php include 'application/views/valoraciones/valoracion_adm/valoracion1.php'; ?>
                                                      <?php } else {  ?>
                                                          <?php include 'application/views/valoraciones/valoracion_adm/valoracion_no_registrado.php'; ?>
                                                      <?php }  ?>

                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="tab-pane" id="tab_2">
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
                                                      <?php if ($puntajes1_val2 == true) { ?>
                                                          <?php include 'application/views/valoraciones/valoracion_adm/valoracion2.php'; ?>
                                                      <?php } else {  ?>
                                                          <?php include 'application/views/valoraciones/valoracion_adm/valoracion_no_registrado.php'; ?>
                                                      <?php }  ?>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="tab-pane active" id="tab_3">
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
                                                                        include 'application/views/valoraciones/valoracion_adm/add_objetivos.php'; ?>

                                                              </div>
                                                          </div>
                                                          <?php    } else {
                                                                        if ($estado->estado == 'espera') {
                                                                            include 'application/views/valoraciones/valoracion_adm/edit_objetivos.php'; ?>

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
                                                  <h3 class="timeline-header no-border"><a href="#"><?php echo $estado->update_by ?></a> acepto tus objetivos</h3>
                                                  
                                              </div>
                                          </div>
                                          <?php if ($estado_entrevista2_colab == false) {
                                                                                include 'application/views/valoraciones/valoracion_adm/add_entrevista2_colab.php';
                                                                            } else {


                                                                                if ($estado_entrevista2_colab[0]->coment1_evalu == null) {
                                                                                    include 'application/views/valoraciones/valoracion_adm/disable_entrevista2_colab.php';
                                                                                } else {
                                                                                    include 'application/views/valoraciones/valoracion_adm/disable_entrevista2_evalu.php';
                                                                                    if ($estado_entrevista3_evalu == false) {
                                                                                    } else {
                                                                                        if ($estado_entrevista3_evalu[0]->coment1_colab == null) {
                                                                                            include 'application/views/valoraciones/valoracion_adm/add_entrevista3_colab.php';
                                                                                        } else {
                                                                                            include 'application/views/valoraciones/valoracion_adm/disable_entrevista3_colab.php';
                                                                                            include 'application/views/valoraciones/valoracion_adm/puntaje_valoracion_objetivos.php';

                                                                                            if ($estado_entrevista3_evalu[0]->ruta_firma_colab == null) {
                                                                                                include 'application/views/valoraciones/valoracion_adm/add_firma_colab.php';
                                                                                            } else {


                                                                                                if ($estado_entrevista3_evalu[0]->ruta_firma_evalu == null) {

                                                                                                    include 'application/views/valoraciones/valoracion_adm/disable_firma_colab.php';
                                                                                                } else {
                                                                                                    include 'application/views/valoraciones/valoracion_adm/disable_firma_evalu.php';
                                                                                                    include 'application/views/valoraciones/valoracion_adm/disable_firma_colab.php';
                                                                                                    ?>
                                                                                                            <div>
                                                                                                                <i class="fas fa-ban  bg-red "></i>
                                                                                                                <div class="timeline-item">
                                                                                                                    <h3 class="timeline-header no-border"><a href="#"> El registro de valoración por objetivos se ha terminado</a></h3>
                                                                                                                </div>
                                                                                                            </div>


                                                                                               <?php  } ?>
                                                                                               <?php

                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }  ?>

                                  <!-- END timeline item -->
                                  <!-- timeline item -->

                                  <!-- END timeline item -->


                                  </div>
                              </div>
                              <!-- /.col -->
                          </div>

                      <?php } ?>



                      </form>

                      </div>
                      <!-- /.timeline -->

      </section>
  </div>
  </div>
  <div>

<!--	  <a class="ir-arriba" title="Volver arriba">-->
<!--  <span class="fa-stack">-->
<!--    <i class="fa fa-circle fa-stack-2x"></i>-->
<!--    <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>-->
<!--  </span>-->
<!--	  </a>-->
<!--	  <a class="ir-abajo"  title="Volver arriba">-->
<!--  <span class="fa-stack">-->
<!--    <i class="fa fa-circle fa-stack-2x"></i>-->
<!--    <i class="fa fa-arrow-down fa-stack-1x fa-inverse"></i>-->
<!--  </span>-->
<!--	  </a>-->

  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  </div>
  <style>
      .bg-red {
          background-color: red !important;
      }

      .bg-yellow {
          background-color: yellow !important;
      }

      .bg-green {
          background-color: green !important;
      }

      .bg-blue {
          background-color: blue !important;
      }
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
  <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

  <script>

      var canvas = document.getElementById('signature-pad');

      // Adjust canvas coordinate space taking into account pixel ratio,
      // to make it look crisp on mobile devices.
      // This also causes canvas to be cleared.
      function resizeCanvas() {
          // When zoomed out to less than 100%, for some very strange reason,
          // some browsers report devicePixelRatio as less than 1
          // and only part of the canvas is cleared then.
          var ratio = Math.max(window.devicePixelRatio || 1, 1);
          canvas.width = canvas.offsetWidth * ratio;
          canvas.height = canvas.offsetHeight * ratio;
          canvas.getContext("2d").scale(ratio, ratio);
      }

      window.onresize = resizeCanvas;
      resizeCanvas();

      var signaturePad = new SignaturePad(canvas, {

          backgroundColor: '#EEE8F3',
          penColor: "black",
          // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
      });

      document.getElementById('save-png').addEventListener('click', function() {
          if (signaturePad.isEmpty()) {
              return alert("Por favor realice su firma.");
          }

          var data = signaturePad.toDataURL('image/png');
          console.log(data);
          $("#imagen_firma").val(data);
      });
      document.getElementById('clear').addEventListener('click', function() {
          signaturePad.clear();
      });

      document.getElementById('undo').addEventListener('click', function() {
          var data = signaturePad.toData();
          if (data) {
              data.pop(); // remove the last dot or line
              signaturePad.fromData(data);
          }
      });
  </script>
