<!-- Content Wrapper. Contains page content -->
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

                <?php if ($previo_registro == true) { ?>

                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Alerta!</h5>
                        Está valoración ya se ha registrado, si presiona guardar se sobreescribirán los datos.
                    </div>
                    <?php include 'application/views/valoraciones/valoracion_adm/edit.php'; ?>
                <?php } else {  ?>

                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Atención!</h5>
                        Califique con veracidad los datos, una vez guardados solo se podrá modificar hasta el tiempo establecido.
                    </div>
                    <?php include 'application/views/valoraciones/valoracion_adm/registro_valoracion.php'; ?>
                <?php }  ?>



            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>

<script>

</script>