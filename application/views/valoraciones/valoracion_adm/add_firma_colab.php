<div>
    <i class="fas fa-comments bg-yellow"></i>
    <div class="timeline-item">
        <!-- <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span> -->
        <h3 class="timeline-header"><a href="#"><?php echo $colaborador; ?></a> por favor registre su firma en el siguiente panel. ¡Gracias! </h3>
        <form action="<?php echo base_url(); ?>valoracion/mi_valoracion_adm/firma_colab_registro" id="usrform" method="POST">
            <div class="timeline-body is-valid">
                <div class="wrapper">
                    <canvas id="signature-pad" class="signature-pad" width=500 height=200></canvas>
                    <input type="hidden" name="firma_colab" id="imagen_firma">
                    <input type="hidden" name="colaborador" value="<?php echo $colaborador; ?>">

                </div>

            </div>
            <div class="timeline-footer">
                <button type="submit" id="save-png" class="btn btn-success btn-sm">Guardar</button>
        </form>
        <button type="reset" id="undo" class="btn btn-warning btn-sm">Regresar</button>
        <button type="reset" id="clear" class="btn btn-danger btn-sm">Limpiar</button>
    </div>
</div>
</div>