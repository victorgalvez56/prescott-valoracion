<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nuevos Permisos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Agregar Permisos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
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
                        <form action="<?php echo base_url(); ?>administrador/parentesco/store_hijosPadres" method="POST">
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Registre los datos para una nuevo usuario</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" id="cardBody">

                                        <div class="input-group mb-3">
                                            <button type="button" class="btn btn-success" id="modalHijos" data-toggle="modal" data-target="#modal-defaultHijos">Buscar Hijos</button>
                                            <!-- /btn-group -->
                                        </div>
                                        <div class="card-body">
                                        <div class="inputHijosPermitions">
                                            </div>
                                            <!-- <h4>Listado de Hijos</h4>

                                            <table id="example5" class="table table-bordered table-striped">
                                                <thead>
                                                </thead>
                                                <tbody>
                                                    <tr id="agregarHijos">
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                </tfoot>
                                            </table> -->
                                        </div>
                                        <div class="input-group mb-3">
                                            <button type="button" class="btn btn-warning" id="modalPadres" data-toggle="modal" data-target="#modal-defaultPadres">Buscar Padres</button>
                                            <!-- /btn-group -->
                                        </div>
                                        <div class="card-body">
                                        <div class="inputPadresPermitions">
                                            </div>
                                            <!-- <h4>Listado de Padres</h4>

                                            <table id="example5" class="table table-bordered table-striped">
                                                <thead>
                                                </thead>
                                                <tbody>
                                                    <tr id="agregarHijos">
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                </tfoot>
                                            </table> -->
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </div>
                                <!-- /.card -->
                                <!-- Form Element sizes -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-defaultHijos">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Listado de Usuarios</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Gerencia</th>
                                <th>Rol</th>
                                <th>Área</th>
                                <th>Registrar</th>
                                <th>Leer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($usuarios)) : ?>
                                <?php foreach ($usuarios as $usuario) : ?>
                                    <tr>
                                        <td> <?php echo $usuario->nombres . " " . $usuario->apellidos; ?></td>
                                        <td><?php echo $usuario->nombreGerencia; ?></td>
                                        <td><?php echo $usuario->nombreRol; ?></td>
                                        <td><?php echo $usuario->nombreArea; ?></td>
                                        <td>
                                            <input type="checkbox" value="<?php echo $usuario->id; ?>" id="registrarPermitions" name=""> </td>
                                        <td>
                                            <input type="checkbox" value="<?php echo $usuario->id; ?>" id="leerPermitions" name="">
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="añadirHijos" class="btn btn-primary">Añadir Hijos</button>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="modal-defaultPadres">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Listado de Usuarios</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Gerencia</th>
                                <th>Rol</th>
                                <th>Área</th>
                                <th>Agregar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($usuarios)) : ?>
                                <?php foreach ($usuarios as $usuario) : ?>
                                    <tr>
                                        <td> <?php echo $usuario->nombres . " " . $usuario->apellidos; ?></td>
                                        <td><?php echo $usuario->nombreGerencia; ?></td>
                                        <td><?php echo $usuario->nombreRol; ?></td>
                                        <td><?php echo $usuario->nombreArea; ?></td>
                                        <td>
                                            <input type="checkbox" value="<?php echo $usuario->id; ?>" id="addPadres" name=""> 
                                        </td>
                                      
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="añadirPadres" class="btn btn-primary">Añadir Padres</button>
            </div>
        </div>
    </div>
</div>