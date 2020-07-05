<div class="card-body">
    <table id="example4" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Gerencia</th>
                <th>Rol</th>
                <th>Área</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($usuarios)) : ?>
                <?php foreach ($usuarios as $usuario) : ?>
                    <tr>
                        <td><?php echo $usuario->nombres . " " . $usuario->apellidos; ?></td>
                        <td><?php echo $usuario->nombreGerencia; ?></td>
                        <td><?php echo $usuario->nombreRol; ?></td>
                        <td><?php echo $usuario->nombreArea; ?></td>
                        <td>
                            <button class="btn btn-danger btn-lg modaldeletusuarios" value="<?php echo $usuario->id; ?>" id="modalConfirmacionUsuarios" data-toggle="modal" data-target="#modal-default"><span class="fas fa-trash"></span></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
</div>
<script>
    /*Datatables*/
    $("#example4").DataTable({
        "responsive": true,
        "autoWidth": false,
        "ordering": false,
    });
    $(".modaldeletusuarios").click(function() {
        $("#modal-defaultinfo").modal("hide");
    });
    $("button[id='modalConfirmacionUsuarios']").click(function() {
        url = BASE_URL + "administrador/parentesco/delete/" + $(this).val();
        $("#elementModal").attr("href", url);
    });
</script>