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
                                if ($padre_registrador == true) {
                                ?>

                                  <h3 class="card-title p-3">Registrado por
                                      <strong>
                                      <?php echo $padre_registrador->nombres . " " . $padre_registrador->apellidos;
                                    } else { ?>
                                      </strong>
                                  </h3>
                                  <h3 class="card-title p-3">
                                      <strong>Este usuario no tiene quien lo registre. Contactar a sistemas.
                                      </strong>
                                  </h3>

                              <?php } ?></h3>
                              </strong>
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
                                                                  <h3 class="timeline-header"><a href="#">Objetivos</a> sent you an email</h3>

                                                                  <?php if ($estado == false) {
                                                                        include 'application/views/valoraciones/valoracion_adm/add_objetivos.php';?>

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
                                                            <?php }
                                                                    }  ?>




                                                 
                                               
                                                  <!-- END timeline item -->
                                                  <!-- timeline item -->
                                                 
                                                  <!-- END timeline item -->

                                                  <div>
                                                      <i class="fas fa-clock bg-gray"></i>
                                                  </div>
                                                      </div>
                                                  </div>
                                                  <!-- /.col -->
                                              </div>


                                              </form>
                                          </div>
                                          <!-- /.timeline -->

                                      </section>
                                  </div>
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
  </style>