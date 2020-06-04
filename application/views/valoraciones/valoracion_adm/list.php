  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Valoraciones</h1>
            <?php if ($permisos->insert == 1) : ?>
              <a href="<?php echo base_url(); ?>valoracion/valoracion_adm/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span>Agregar Área</a>
            <?php endif; ?>
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
                      <th>Promedio Final</th>

                      <th>Valoración por objetivos</th>

                      <th>Promedio valoración 1</th>
                      <th>Promedio valoración 2</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($valoraciones)) : ?>
                      <?php foreach ($valoraciones as $valoracion) : ?>
                        <tr>
                          <td><?php echo $valoracion->nombres . " " . $valoracion->apellidos; ?></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="btn-group">
                              <button class="btn btn-info btn-lg" value="<?php echo $valoracion->id; ?>" id="modalConfirmacion" data-toggle="modal" data-target="#modal-info"><span class="fas fa-search"></span></button>
                              <?php if ($permisos->update == 1) : ?>
                                <button class="btn btn-warning btn-lg" value="<?php echo $valoracion->id; ?>" id="modal-edit" data-toggle="modal" data-target="#modalEdit"><span class="fas fa-edit"></span></button>
                              <?php endif; ?>
                              <?php if ($permisos->delete == 1) : ?>
                                <button class="btn btn-danger btn-lg" value="<?php echo $valoracion->id; ?>" id="modalConfirmacion" data-toggle="modal" data-target="#modal-delete"><span class="fas fa-trash"></span></button>
                              <?php endif; ?>
                            </div>
                          </td>
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


  <div class="modal fade" id="modal-info">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Extra Large Modal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p>One fine body…</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
  </div>


  <div class="modal fade" id="modalEdit">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Extra Large Modal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p>One fine body…</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
  </div>