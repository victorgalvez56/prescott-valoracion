<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nuevo Usuario</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Agregar Usuario</li>
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
                        <form action="<?php echo base_url(); ?>administrador/usuarios/store" method="POST">
                            <div class="col-md-6">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Registre los datos para una nuevo usuario</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" id="cardBody">
                                        <div class="form-group">
                                            <label for="nombres">Nombres</label>
                                            <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="apellidos">Apellidos</label>
                                            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="usuario">Usuario</label>
                                            <input type="email" class="form-control" name="usuario" id="usuario" placeholder="Usuario" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="contraseña">Password</label>
                                            <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="Contraseña" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="gerencia">Gerencia:</label>
                                            <select name="gerencia" id="gerenciaFetch" class="form-control" required>
                                            <option value="">Seleccione una Gerencia</option>
                                                <?php foreach ($gerencias as $gerencia) : ?>
                                                    <option value="<?php echo $gerencia->id; ?>"><?php echo $gerencia->nombre; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="rol">Rol:</label>
                                            <select name="rol" id="rol" class="form-control" required>
                                            <option value="">Seleccione un Rol</option>
                                                <?php foreach ($roles as $rol) : ?>
                                                    <option value="<?php echo $rol->id; ?>"><?php echo $rol->nombre; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="padre">Padre:</label>
                                            <select name="padre" id="padre" class="form-control" required>
                                            <option value="">Seleccione un Padre</option>
                                                <?php foreach ($padres as $padre) : ?>
                                                    <option value="<?php echo $padre->id; ?>"><?php echo $padre->nombres." ".$padre->apellidos; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group" id="divArea">
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