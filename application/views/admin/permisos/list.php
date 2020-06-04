  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Permisos</h1>
                      <?php if ($permisos->insert == 1) : ?>
                          <a href="<?php echo base_url(); ?>administrador/permisos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span>Agregar Área</a>
                      <?php endif; ?>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Permisos</li>
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
                              <h3 class="card-title">Listado de Permisos</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>Menu</th>
                                          <th>Rol</th>
                                          <th>Leer</th>
                                          <th>Insertar</th>
                                          <th>Actualizar</th>
                                          <th>Eliminar</th>
                                          <th>opciones</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php if (!empty($permisos2)) : ?>
                                          <?php foreach ($permisos2 as $permiso) : ?>
                                              <tr>
                                                  <td><?php echo $permiso->menu; ?></td>
                                                  <td><?php echo $permiso->rol; ?></td>
                                                  <td>
                                                      <?php if ($permiso->read == 0) : ?>
                                                          <span class="fa fa-times"></span>
                                                      <?php else : ?>
                                                          <span class="fa fa-check"></span>
                                                      <?php endif; ?>
                                                  </td>
                                                  <td>
                                                      <?php if ($permiso->insert == 0) : ?>
                                                          <span class="fa fa-times"></span>
                                                      <?php else : ?>
                                                          <span class="fa fa-check"></span>
                                                      <?php endif; ?>
                                                  </td>
                                                  <td>
                                                      <?php if ($permiso->update == 0) : ?>
                                                          <span class="fa fa-times"></span>
                                                      <?php else : ?>
                                                          <span class="fa fa-check"></span>
                                                      <?php endif; ?>
                                                  </td>
                                                  <td>
                                                      <?php if ($permiso->delete == 0) : ?>
                                                          <span class="fa fa-times"></span>
                                                      <?php else : ?>
                                                          <span class="fa fa-check"></span>
                                                      <?php endif; ?>
                                                  </td>
                                                  <td>
                                                      <div class="btn-group">
                                                          <a href="<?php echo base_url() ?>administrador/permisos/edit/<?php echo $permiso->id; ?>" class="btn btn-warning"><span class="fas fa-edit"></span></a>
                                                          <a href="<?php echo base_url(); ?>administrador/permisos/delete/<?php echo $permiso->id; ?>" class="btn btn-danger"><span class="fas fa-trash"></span></a>
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
  <div class="modal fade" id="modal-default">
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


