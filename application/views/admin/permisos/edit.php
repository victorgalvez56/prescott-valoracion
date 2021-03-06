<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Permiso</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Editar Permiso</li>
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
                        <form action="<?php echo base_url();?>administrador/permisos/update" method="POST">
                        <input type="hidden" name="idpermiso" value="<?php echo $permiso->id;?>">                 
                            <div class="col-md-6">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Registre los datos para una nueva área</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body">
                                    <div class="form-group">
                                <label for="rol">Roles:</label>
                                <select name="rol" id="rol" class="form-control" disabled="disabled">
                                    <?php foreach($roles as $rol):?>
                                        <option value="<?php echo $rol->id;?>" <?php echo $rol->id == $permiso->id ? "selected":"";?>><?php echo $rol->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="menu">Menus:</label>
                                <select name="menu" id="menu" class="form-control" disabled="disabled">
                                    <?php foreach($menus as $menu):?>
                                        <option value="<?php echo $menu->id;?>" <?php echo $menu->id == $permiso->id ? "selected":"";?>><?php echo $menu->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="read">Leer:</label>
                                <label class="radio-inline">
                                    <input type="radio" name="read" value="1" <?php echo $permiso->read == 1 ? "checked":"";?>>Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="read" value="0" <?php echo $permiso->read == 0 ? "checked":"";?>>No
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="read">Agregar:</label>
                                <label class="radio-inline">
                                    <input type="radio" name="insert" value="1" <?php echo $permiso->insert == 1 ? "checked":"";?>>Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="insert" value="0" <?php echo $permiso->insert == 0 ? "checked":"";?>>No
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="read">Editar:</label>
                                <label class="radio-inline">
                                    <input type="radio" name="update" value="1" <?php echo $permiso->update == 1 ? "checked":"";?>>Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="update" value="0" <?php echo $permiso->update == 0 ? "checked":"";?>>No
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="read">Eliminar:</label>
                                <label class="radio-inline">
                                    <input type="radio" name="delete" value="1" <?php echo $permiso->delete == 1 ? "checked":"";?>>Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="delete" value="0" <?php echo $permiso->delete == 0 ? "checked":"";?>>No
                                </label>
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




                                        