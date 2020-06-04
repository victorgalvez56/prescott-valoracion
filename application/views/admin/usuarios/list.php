  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
            <?php if ($permisos->insert == 1) : ?>
              <a href="<?php echo base_url(); ?>administrador/usuarios/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span>Agregar Usuario</a>
            <?php endif; ?>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
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
                <h3 class="card-title">Listado de Áreas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Usuario</th>
                      <th>Gerencia</th>
                      <th>Rol</th>
                      <th>Área</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($usuarios)) : ?>
                      <?php foreach ($usuarios as $usuario) : ?>
                        <tr>
                          <td><?php echo $usuario->nombres." ".$usuario->apellidos; ?></td>
                          <td><?php echo $usuario->username; ?></td>
                          <td><?php echo $usuario->nombreGerencia; ?></td>
                          <td><?php echo $usuario->nombreRol; ?></td>
                          <td><?php echo $usuario->area; ?></td>
                          <td>
                            <div class="btn-group">
                              <?php if ($permisos->update == 1) : ?>
                                <a href="<?php echo base_url() ?>administrador/usuarios/edit/<?php echo $usuario->id; ?>" class="btn btn-warning btn-lg"><span class="fas fa-edit"></span></a>
                              <?php endif; ?>
                              <?php if ($permisos->delete == 1) : ?>
                                <button class="btn btn-danger btn-lg" value="<?php echo $usuario->id;?>" id="modalConfirmacionUsuarios" data-toggle="modal" data-target="#modal-default"><span class="fas fa-trash"></span></button>
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
          <a href="" id="elementModal"class="btn btn-outline-light"><span class="fas fa-trash"></span></a>
        </div>
      </div>
    </div>
  </div>
