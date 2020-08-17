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
              <div class="card-header">
                <h3 class="card-title">Listado de Valoraciones</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Nombres</th>
                      <th>Promedio General</th>
                      <th>Valoración 1</th>
                      <th>Valoración 2</th>
                      <th>Valoración Objetivos</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($hijos)) : ?>
                      <?php foreach ($hijos as $hijo) : ?>
                        <tr>

                          <td><?php echo $hijo->nombres . " " . $hijo->apellidos; ?></td>
                          <td>
                          <button class="btn btn-info btn-lg" value="<?php echo $hijo->hijo_id; ?>" id="modal-promedio_general" data-toggle="modal" data-target="#modal-promedio-general"><span class="fas fa-search"></span></button>
                          </td>
              
                          <td><div class="btn-group">
                              <?php if ($permisovaloracion == "Registrar") : ?>
                                <button class="btn btn-warning btn-lg" value="<?php echo $hijo->hijo_id; ?>" id="modal-valoracion1_registro" data-toggle="modal" data-target="#modal-registro-val"><span class="fas fa-edit"></span></button>
                              <?php endif; ?>
                              <?php if ($permisovaloracion == "Leer") : ?>
                                <button class="btn btn-info btn-lg" value="<?php echo $hijo->hijo_id; ?>" id="modal-valoracion1_leer" data-toggle="modal" data-target="#modal-leer-val"><span class="fas fa-search"></span></button>
                              <?php endif; ?>
                            </div></td>
                          <td><div class="btn-group">
                              <?php if ($permisovaloracion == "Registrar") : ?>
                                <button class="btn btn-warning btn-lg" value="<?php echo $hijo->hijo_id; ?>" id="modal-valoracion2_registro" data-toggle="modal" data-target="#modal-registro-val"><span class="fas fa-edit"></span></button>
                              <?php endif; ?>
                              <?php if ($permisovaloracion == "Leer") : ?>
                                <button class="btn btn-info btn-lg" value="<?php echo $hijo->hijo_id; ?>" id="modal-valoracion2_leer" data-toggle="modal" data-target="#modal-leer-val"><span class="fas fa-search"></span></button>
                              <?php endif; ?>
                            </div></td>
                          <td><div class="btn-group">
                              <?php if ($permisovaloracion == "Registrar") : ?>
                                <button class="btn btn-warning btn-lg" value="<?php echo $hijo->hijo_id; ?>" id="modal-valoracion3_leer" data-toggle="modal" data-target="#modal-leer-val"><span class="fas fa-edit"></span></button>
                              <?php endif; ?>
                              <?php if ($permisovaloracion == "Leer") : ?>
                                <button class="btn btn-info btn-lg" value="<?php echo $hijo->hijo_id; ?>" id="modal-valoracion3_leer" data-toggle="modal" data-target="#modal-leer-val"><span class="fas fa-search"></span></button>
                              <?php endif; ?>
                            </div></td>
                        </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="modal-delete">
    <div class="modal-dialog">
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p>¿Está seguro de eliminar este elemento?</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
          <a href="" id="elementModal" class="btn btn-outline-light"><span class="fas fa-trash"></span></a>
        </div>
      </div>
    </div>
  </div>


  

  <div class="modal fade" id="modal-registro-val">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><input type="button" value="" id="titleValoracion" class="btn btn-block bg-gradient-success btn-lg"></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p>One fine body…</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <!--<button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
  </div>


  <div class="modal fade" id="modal-leer-val">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><input type="button" value="" id="titleValoracion" class="btn btn-block bg-gradient-success btn-lg"></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Error algo ocurrió</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-print"><span class="fa fa-print"></span>Imprimir</button>
          <!--<button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
  </div>


  <div class="modal fade" id="modal-promedio-general">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Promedio Final</h4>

        </div>
        <div class="modal-body">
          <p>Error algo ocurrió</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <!--<button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
  </div>