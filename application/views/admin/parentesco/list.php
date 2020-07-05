  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
            <?php if ($permisos->insert == 1) : ?>
              <a href="<?php echo base_url(); ?>administrador/parentesco/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span>Agregar Usuario</a>
              <a href="<?php echo base_url(); ?>administrador/parentesco/permitions" class="btn btn-success btn-flat"><span class="fa fa-plus"></span>Agregar Permisos</a>
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
                <h3 class="card-title">Listado de Usuarios</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Padre</th>
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
                          <td><?php echo $usuario->nombres . " " . $usuario->apellidos; ?></td>
                          <td><?php echo $usuario->username; ?></td>
                          <td><?php echo $usuario->nombreGerencia; ?></td>
                          <td><?php echo $usuario->nombreRol; ?></td>
                          <td><?php echo $usuario->nombreArea; ?></td>
                          <td>
                            <div class="btn-group">
                              <button class="btn btn-info btn-lg btn-view-padres" value="<?php echo $usuario->id; ?>" id="modalInfoUsuarios" data-toggle="modal" data-target="#modal-defaultinfo"><span class="fas fa-search"></span></button>
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
  <div class="modal fade" id="modal-defaultinfo">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Listado de Usuarios</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
       
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>