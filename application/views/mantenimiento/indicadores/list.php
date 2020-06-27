  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Indicadores</h1>
            <?php if ($permisos->insert == 1) : ?>
              <a href="<?php echo base_url(); ?>mantenimiento/indicadores/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span>Agregar Indicador</a>
            <?php endif; ?>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Indicadores</li>
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
                <h3 class="card-title">Listado de Indicadores</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Descripción</th>
                      <th>Competencia</th>
                      <th>Creado por</th>
                      <th>Actualizado por</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($indicadores)) : ?>
                      <?php foreach ($indicadores as $indicador) : ?>
                        <tr>
                          <td><?php echo $indicador->descripcion; ?></td>
                          <td><?php echo $indicador->nombreCompetencia; ?></td>
                          <td><?php echo $indicador->create_by." ".$indicador->create_at; ?></td>
                          <td><?php echo $indicador->update_by." ".$indicador->update_at ?></td>

                          <td>
                            <div class="btn-group">
                              <?php if ($permisos->update == 1) : ?>
                                <a href="<?php echo base_url() ?>mantenimiento/indicadores/edit/<?php echo $indicador->id; ?>" class="btn btn-warning btn-lg"><span class="fas fa-edit"></span></a>
                              <?php endif; ?>
                              <?php if ($permisos->delete == 1) : ?>
                                <button class="btn btn-danger btn-lg" value="<?php echo $indicador->id;?>" id="modalConfirmacionIndicador" data-toggle="modal" data-target="#modal-default"><span class="fas fa-trash"></span></button>
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
