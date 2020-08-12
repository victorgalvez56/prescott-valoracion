<div>
    <i class="fas fa-comments bg-yellow"></i>
    <div class="timeline-item">
        <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
        <h3 class="timeline-header"><a href="#"><?php echo $evaluador; ?></a> por favor realice su firma en el panel de color celeste si está de acuerdo con su calificación</h3>
        <form action="<?php echo base_url(); ?>valoracion/mi_valoracion_adm/firma_evalu_registro" id="usrform" method="POST">
            <div class="timeline-body is-valid">
                <div class="wrapper-pad">
                    <canvas id="signature-pad" class="signature-pad" width="500" height="200" ></canvas>
                    <input type="hidden" name="firma_evalu" id="imagen_firma">
                    <input type="hidden" name="evaluador" value="<?php echo $evaluador; ?>">

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
<script>

</script>

<style>

</style>


<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

<script>


    var canvas = document.getElementById('signature-pad');

    // Adjust canvas coordinate space taking into account pixel ratio,
    // to make it look crisp on mobile devices.
    // This also causes canvas to be cleared.
    function resizeCanvas() {

    }

    window.onresize = resizeCanvas;
    resizeCanvas();

    var signaturePad = new SignaturePad(canvas, {
  
        backgroundColor: '#EEE8F3',
        penColor: "black",
        // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
    });

    document.getElementById('save-png').addEventListener('click', function() {
        if (signaturePad.isEmpty()) {
            return alert("Por favor realice su firma.");
        }

        var data = signaturePad.toDataURL('image/png');
        console.log(data);
        $("#imagen_firma").val(data);
    });
    document.getElementById('clear').addEventListener('click', function() {
        signaturePad.clear();
    });

    document.getElementById('undo').addEventListener('click', function() {
        var data = signaturePad.toData();
        if (data) {
            data.pop(); // remove the last dot or line
            signaturePad.fromData(data);
        }
    });

    
</script>