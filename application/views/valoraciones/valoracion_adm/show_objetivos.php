

<?php if ($estado == false) {
    include 'application/views/valoraciones/valoracion_adm/valoracion_no_registrada.php';
} else {
    if ($estado->estado == 'espera') {
        include 'application/views/valoraciones/valoracion_adm/success_objetivos.php'; ?>




<?php
    } else {
        include 'application/views/valoraciones/valoracion_adm/disable_objetivos.php';
    }
}
?>