
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Usuarios
        <small>Editar</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>administrador/usuarios/update" method="POST">
                            <input type="hidden" name="idusuario" value="<?php echo $usuario->id_usu ?>">
                            <div class="form-group">
                                <label for="nombres">Nombres:</label>
                                <input type="text" id="nombres" name="nombres" class="form-control"  value="<?php echo $usuario->nombres_usu;?>" required>
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Apellidos:</label>
                                <input type="text" id="apellidos" name="apellidos" class="form-control" value="<?php echo $usuario->apellidos_usu;?>" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono:</label>
                                <input type="number" id="telefono" name="telefono" class="form-control" value="<?php echo $usuario->telefono;?>" required >
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" id="email" name="email" class="form-control" value="<?php echo $usuario->email;?>" required >
                            </div>
                            <div class="form-group">
                                <label for="username">Usuario:</label>
                                <input type="email" id="username" name="username" class="form-control" value="<?php echo $usuario->username;?>" required>
                            </div>
                             <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="text" id="password" name="password" class="form-control" value="<?php echo $usuario->password;?>" required>
                            </div>                          
                            <div class="form-group">
                                <label for="rol">Roles:</label>
                                <select name="rol" id="rol" class="form-control" required>
                                    <?php foreach($roles as $rol):?>
                                        <option value="<?php echo $rol->id_rol;?>" <?php echo $rol->id_rol == $usuario->id_rol ? "selected":"";?>><?php echo $rol->nombre_rol;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Guardar">
                            </div>
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
