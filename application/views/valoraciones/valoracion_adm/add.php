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
                        <h5><i class="icon fas fa-exclamation-triangle"></i> ¡Importante!</h5>
                        Recuerde que esta valoración es importante para medir el desempeño del colaborador a lo largo del año. 
                Una vez guardada y solo se podrá modificar hasta el tiempo establecido. Quedan <?php echo $dias_faltantes; ?> días.
                    </div>
                    <?php include 'application/views/valoraciones/valoracion_adm/edit.php'; ?>
                <?php } else {  ?>

                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> ¡Importante!</h5>
                        Recuerde que esta valoración es importante para medir el desempeño del colaborador a lo largo del año. 
                Una vez guardada y solo se podrá modificar hasta el tiempo establecido. Quedan <?php echo $dias_faltantes; ?> días.
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