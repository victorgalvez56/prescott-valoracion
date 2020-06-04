<footer class="main-footer">
  <div class="pull-right hidden-xs">

    <b>Version</b> 1.0
  </div>
  <strong>Copyright &copy; 2020 <a href="https://www.facebook.com/victor.galvezc">Victor E. Gálvez</a>.</strong> All rights
  reserved.
  </div>
</footer>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script><!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/plugins/jqvmap/jquery.vmap.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/plugins/moment/moment.min.js"></script>
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo BASE_URL(); ?>assets/newtemplate/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
  console.log('Prueba que carga bien el script')
</script>
</body>

</html>
<script>
  var BASE_URL = "<?php echo BASE_URL(); ?>";

  /*Datatables*/
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  /*Confirmación modal*/
  $("button[id='modalConfirmacionGerencia']").click(function() {
    url = BASE_URL + "mantenimiento/gerencias/delete/" + $(this).val();
    $("#elementModal").attr("href", url);
  });
  $("button[id='modalConfirmacionUsuarios']").click(function() {
    url = BASE_URL + "administrador/usuarios/delete/" + $(this).val();
    $("#elementModal").attr("href", url);
  });

  $(document).on('change', "#gerenciaFetch", async function() {
    const $selectRol = $('#selectRol')
    $selectRol.empty()
    $selectRol.append("<option value=''>Seleccione un rol</option>")
    const valorId = $(this).val();
    const body = new FormData();
    body.append('nombre', valorId);

    try {
      const response = await fetch(BASE_URL + 'administrador/usuarios/getRolesbyGerencia', {
        method: 'POST',
        body
      })
      const {
        roles
      } = await response.json();
      $selectRol.append(
        roles.map(rol => `<option value="${rol.id}">${rol.nombre}</option>`).join('')
      );
    } catch (error) {
      console.log(error)
    }
  })

  $(document).on('change', "#selectRol", async function() {
    const $idGerencia = $('#gerenciaFetch').val();
    const $selectArea = $('#selectArea')
    const $divArea = $('#campoArea')
    const $valorId = $(this).val();
    $selectArea.empty()
    $selectArea.append("<option value=''>Seleccione una área</option>")
    const body = new FormData();
    body.append('id', $idGerencia);
    try {
      if ($valorId == '2' || $valorId == '1' ) {
        $divArea.remove();
      } else {
        $divArea.remove();
        const response = await fetch(BASE_URL + 'administrador/usuarios/getAreasbyGerencia', {
          method: 'POST',
          body
        })
        const {
          areas
        } = await response.json();
        $("#cardBody").append("<div class='form-group' id='campoArea'><label for='area'>Área:</label><select name='area' id='selectArea' class='form-control' required></select></div>")
        $("#selectArea").append(
          areas.map(area => `<option value="${area.id}">${area.id}</option>`).join('')
        );
      }


    } catch (error) {
      console.log(error)
    }
  })

  $(document).on("click", "#modal-edit", function() {
    console.log('ga')
    valor_id = $(this).val();
    console.log(valor_id)
    $.ajax({
      url: BASE_URL + "valoracion/valoracion_adm/view",
      type: "POST",
      dataType: "html",
      data: {
        id: valor_id
      },
      success: function(data) {
        $("#modalEdit .modal-body").html(data);
      }
    });
  });


</script>
<style>
  input { 
    text-align: center; 
}
</style>