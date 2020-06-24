<form action="<?php echo base_url(); ?>mantenimiento/areas/store" method="POST">
    <div class="row">
        <section class="col-lg-6 connectedSortable ui-sortable center">
            <h1>Valoración por objetivos</h1>
        </section>
        <section class="col-lg-6 connectedSortable ui-sortable center" style="text-align: center;">
            <select class="form-control" placeholder="Escribir valoración por objetivos" required>
                <option value="" selected>Seleccione puntaje</option>
                <option value="7">7</option>
                <option value="14">14</option>
                <option value="20">20</option>
            </select>
        </section>
    </div>
    <div align="center">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>