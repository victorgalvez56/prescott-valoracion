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


<script src="<?php echo BASE_URL(); ?>assets/newtemplate/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

<script>
  console.log('Prueba que carga bien el script')
</script>
</body>

</html>
<script>
$('.tt_large').tooltip({
    template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner large"></div></div>'
});
</script>

<style>
  .large.tooltip-inner {
    max-width: 900px;
    width: 800px;
  }
</style>
<script>
  var BASE_URL = "<?php echo BASE_URL(); ?>";

  /*Datatables*/
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "ordering": false,
	});
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

  });
  $(document).ready(function() {
	  $('.ir-arriba').click(function() {
	  	console.warn('ga')
		  $('#arriba').animate({
			  scrollTop: '0px'
		  }, 750);
	  });
	  $('.ir-abajo').click(function() {
		  $('#arriba').animate({
			  scrollTop: '1000px'
		  }, 750);
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
  $("button[id='modalConfirmacionIndicador']").click(function() {
    url = BASE_URL + "mantenimiento/indicadores/delete/" + $(this).val();
    $("#elementModal").attr("href", url);
  });

  $(document).on('change', "#gerenciaFetch", async function() {
    const $selectRol = $('#selectRol')
    $selectRol.empty()
    $selectRol.append("<option value=''>Seleccione un rol</option>")
    const valorId = $(this).val();
    const body = new FormData();
    body.append('id', valorId);
    try {
      const response = await fetch(BASE_URL + 'administrador/parentesco/getRolesbyGerencia', {
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


  $(document).on('change', "#gerenciaFetch", async function() {
    const $selectArea = $('#selectArea')
    const valorId = $(this).val();
    $selectArea.empty()
    $selectArea.append("<option value=''>Seleccione una área</option>")
    const body = new FormData();
    body.append('id', valorId);
    try {
      const response = await fetch(BASE_URL + 'administrador/parentesco/getAreasbyGerencia', {
        method: 'POST',
        body
      })
      const {
        areas
      } = await response.json();
      $("#selectArea").append(
        areas.map(area => `<option value="${area.id}">${area.nombre}</option>`).join('')
      );
    } catch (error) {
      console.log(error)
    }
  })


  /* Modal para agregar anedotario */
  $(document).on("click", "#modal-anedotario_registro", function() {
	  valor_id = $(this).val();
	  $.ajax({
		  url: BASE_URL + "valoracion/Anecdotario_adm/add_anecdotario",
		  type: "POST",
		  dataType: "html",
		  data: {
			  id: valor_id
		  },
		  success: function(data) {
			  $("#modal-anecdotario-val .modal-body").html(data);
		  }
	  });
  });


  /* Modal para agregar valoracione1 */
  $(document).on("click", "#modal-valoracion1_registro", function() {
    valor_id = $(this).val();
    console.log(valor_id)
    $.ajax({
      url: BASE_URL + "valoracion/valoracion_adm/validacion1_registro",
      type: "POST",
      dataType: "html",
      data: {
        id: valor_id
      },
      success: function(data) {
        $("#modal-registro-val .modal-body").html(data);
        console.log($("#tipo_validacion").val())
        $("#titleValoracion").val("Valoración 1");
      }
    });
  });

  $(document).on("click", "#modal-promedio_general", function() {
    valor_id = $(this).val();
    $.ajax({
      url: BASE_URL + "valoracion/valoracion_adm/show_promedio_general",
      type: "POST",
      dataType: "html",
      data: {
        id: valor_id
      },
      success: function(data) {
        $("#modal-promedio-general .modal-body").html(data);
      }
    });
  });



  /* Modal para agregar valoracione2 */
  $(document).on("click", "#modal-valoracion2_registro", function() {
    valor_id = $(this).val();
    $.ajax({
      url: BASE_URL + "valoracion/valoracion_adm/validacion2_registro",
      type: "POST",
      dataType: "html",
      data: {
        id: valor_id
      },
      success: function(data) {
        $("#modal-registro-val .modal-body").html(data);
        $("#titleValoracion").val("Valoración 2");
      }
    });
  });

  /* Modal para agregar valoracioneobjetivos */
  $(document).on("click", "#modal-valoracion3_registro", function() {
    valor_id = $(this).val();
    console.log(valor_id)
    $.ajax({
      url: BASE_URL + "valoracion/valoracion_adm/validacion3_registro",
      type: "POST",
      dataType: "html",
      data: {
        id: valor_id
      },
      success: function(data) {
        $("#modal-registro-val .modal-body").html(data);
        $("#titleValoracion").val("Valoración de Objetivos");
      }
    });
  });

  /* Modal para leer valoracion1 */
  $(document).on("click", "#modal-valoracion1_leer", function() {
    valor_id = $(this).val();
    console.log(valor_id)
    $.ajax({
      url: BASE_URL + "valoracion/valoracion_adm/validacion1_leer",
      type: "POST",
      dataType: "html",
      data: {
        id: valor_id
      },
      success: function(data) {
        $("#modal-leer-val .modal-body").html(data);
        console.log($("#tipo_validacion").val())
        $("#modal-leer-val #titleValoracion").val("Valoración 1");
      }
    });
  });


  $(document).on("click", "#modal-valoracion2_leer", function() {
    valor_id = $(this).val();
    console.warn('GAADDA')
    $.ajax({
      url: BASE_URL + "valoracion/valoracion_adm/validacion2_leer",
      type: "POST",
      dataType: "html",
      data: {
        id: valor_id
      },
      success: function(data) {
        $("#modal-leer-val .modal-body").html(data);
        $("#modal-leer-val #titleValoracion").val("Valoración 2");
      }
    });
  });

  $(document).on("click", "#modal-valoracion3_leer", function() {
    valor_id = $(this).val();
    $.ajax({
      url: BASE_URL + "valoracion/valoracion_adm/validacion3_leer",
      type: "POST",
      dataType: "html",
      data: {
        id: valor_id
      },
      success: function(data) {
        $("#modal-leer-val .modal-body").html(data);
        $("#modal-leer-val #titleValoracion").val("Valoración de Objetivos");
      }
    });
  });

  $(document).on("click", "#modal-valoracion3_final", function() {
  	console.warn('ga')
	  valor_id = $(this).val();
	  $.ajax({
		  url: BASE_URL + "valoracion/valoracion_adm/validacion3_leer_final",
		  type: "POST",
		  dataType: "html",
		  data: {
			  id: valor_id
		  },
		  success: function(data) {
			  $("#modal-leer-val .modal-body").html(data);
			  $("#modal-leer-val #titleValoracion").val("Valoración de Objetivos");
		  }
	  });
  });


  /* Calculo valoraciones para agregar valoraciones */






  function sumaTrabajo1() {
    const $indicador = $(".indicadorTrabajosequipo1");
    const $puntaje = $("#puntajeTrabajosequipo1");
    var add = 0;
    $indicador.each(function() {
      if (!isNaN($(this).val()) && $(this).val() < 5) {
        add += Number($(this).val());
      } else {
        alert('Por favor escriba un número del 1 al 4')
        $(this).val(' ')
      }
    });
    $puntaje.val(add);
  };

  function pintarTrabajo1() {
    const $puntaje = $("#puntajeTrabajosequipo1");
    if ($puntaje.val() > 0 && $puntaje.val() < 6) {
      $puntaje.css("background", "red")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 5 && $puntaje.val() < 13) {
      $puntaje.css("background", "yellow")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 12 && $puntaje.val() < 19) {
      $puntaje.css("background", "green")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 18 && $puntaje.val() < 21) {
      $puntaje.css("background", "blue")
      $puntaje.css("color", "white")
    }
  };

  function sumaComunicacion1() {
    const $indicador = $(".indicadorComunicacion1");
    const $puntaje = $("#puntajeComunicacion1");
    var add = 0;
    $indicador.each(function() {
      if (!isNaN($(this).val()) && $(this).val() < 5) {
        add += Number($(this).val());
      } else {
        alert('Por favor escriba un número del 1 al 4')
        $(this).val(' ')
      }
    });
    $puntaje.val(add);
  };

  function pintarComunicacion1() {
    const $puntaje = $("#puntajeComunicacion1");
    if ($puntaje.val() > 0 && $puntaje.val() < 6) {
      $puntaje.css("background", "red")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 5 && $puntaje.val() < 13) {
      $puntaje.css("background", "yellow")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 12 && $puntaje.val() < 19) {
      $puntaje.css("background", "green")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 18 && $puntaje.val() < 21) {
      $puntaje.css("background", "blue")
      $puntaje.css("color", "white")
    }
  };



  function sumaProactividad1() {
    const $indicador = $(".indicadorProactividad1");
    const $puntaje = $("#puntajeProactividad1");
    var add = 0;
    $indicador.each(function() {
      if (!isNaN($(this).val()) && $(this).val() < 5) {
        add += Number($(this).val());
      } else {
        alert('Por favor escriba un número del 1 al 4')
        $(this).val(' ')
      }
    });
    $puntaje.val(add);
  };

  function pintarProactividad1() {
    const $puntaje = $("#puntajeProactividad1");
    if ($puntaje.val() > 0 && $puntaje.val() < 6) {
      $puntaje.css("background", "red")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 5 && $puntaje.val() < 13) {
      $puntaje.css("background", "yellow")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 12 && $puntaje.val() < 19) {
      $puntaje.css("background", "green")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 18 && $puntaje.val() < 21) {
      $puntaje.css("background", "blue")
      $puntaje.css("color", "white")
    }
  };



  function sumaAprendizaje1() {
    const $indicador = $(".indicadorAprendizaje1");
    const $puntaje = $("#puntajeAprendizaje1");
    var add = 0;
    $indicador.each(function() {
      if (!isNaN($(this).val()) && $(this).val() < 5) {
        add += Number($(this).val());
      } else {
        alert('Por favor escriba un número del 1 al 4')
        $(this).val(' ')
      }
    });
    $puntaje.val(add);
  };

  function pintarAprendizaje1() {
    const $puntaje = $("#puntajeAprendizaje1");
    if ($puntaje.val() > 0 && $puntaje.val() < 6) {
      $puntaje.css("background", "red")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 5 && $puntaje.val() < 13) {
      $puntaje.css("background", "yellow")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 12 && $puntaje.val() < 19) {
      $puntaje.css("background", "green")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 18 && $puntaje.val() < 21) {
      $puntaje.css("background", "blue")
      $puntaje.css("color", "white")
    }
  };




  function cacularPromedio1() {
    const $indicadorTrabajo = $("#puntajeTrabajosequipo1");
    const $indicadorComunicacion = $("#puntajeComunicacion1");
    const $indicadorProactividad = $("#puntajeProactividad1");
    const $indicadorAprendizaje = $("#puntajeAprendizaje1");


    let $sumaIndicadores = Math.round(((
      Number($indicadorTrabajo.val()) +
      Number($indicadorComunicacion.val()) +
      Number($indicadorProactividad.val()) +
      Number($indicadorAprendizaje.val())
    ) / 4));
    const $inputPromedio = $("#promedioValoracion1");
    const $promedioValoracion1 = $("#promedioValoracion1");


    $inputPromedio.val($sumaIndicadores);
    $promedioValoracion1.text($sumaIndicadores);


  };

  function pintarPromedio1() {
    const $puntaje = $("#promedioValoracion1");
    if ($puntaje.val() > 0 && $puntaje.val() < 6) {
      $puntaje.css("background", "red")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 5 && $puntaje.val() < 13) {
      $puntaje.css("background", "yellow")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 12 && $puntaje.val() < 19) {
      $puntaje.css("background", "green")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 18 && $puntaje.val() < 21) {
      $puntaje.css("background", "blue")
      $puntaje.css("color", "white")
    }
  };

  function pintarPromedioBox1() {
    const $puntaje = $("#promedioValoracion1").text();
    const $box = $("#boxPromedio1");
    const $numberPuntaje = Number($puntaje);

    if ($numberPuntaje > 0 && $numberPuntaje < 6) {
      $box.removeClass("bg-red")
      $box.removeClass("bg-yellow")
      $box.removeClass("bg-green")
      $box.removeClass("bg-blue")
      $box.addClass("bg-red")
    } else if ($numberPuntaje > 5 && $numberPuntaje < 13) {
      $box.removeClass("bg-red")
      $box.removeClass("bg-yellow")
      $box.removeClass("bg-green")
      $box.removeClass("bg-blue")
      $box.addClass("bg-yellow")
    } else if ($numberPuntaje > 12 && $numberPuntaje < 19) {
      $box.removeClass("bg-red")
      $box.removeClass("bg-yellow")
      $box.removeClass("bg-green")
      $box.removeClass("bg-blue")
      $box.addClass("bg-green")
    } else if ($numberPuntaje > 18 && $numberPuntaje < 21) {
      $box.removeClass("bg-red")
      $box.removeClass("bg-yellow")
      $box.removeClass("bg-green")
      $box.removeClass("bg-blue")
      $box.addClass("bg-blue")
    }
  };





  sumaTrabajo1();

  pintarTrabajo1();

  sumaComunicacion1();

  pintarComunicacion1();


  sumaProactividad1();

  pintarProactividad1();

  sumaAprendizaje1();

  pintarAprendizaje1();




  cacularPromedio1();
  pintarPromedio1();
  pintarPromedioBox1();



  function sumaTrabajo() {
    const $indicador = $(".indicadorTrabajosequipo");
    const $puntaje = $("#puntajeTrabajosequipo");
    var add = 0;
    $indicador.each(function() {
      if (!isNaN($(this).val()) && $(this).val() < 5) {
        add += Number($(this).val());
      } else {
        alert('Por favor escriba un número del 1 al 4')
        $(this).val(' ')
      }
    });
    $puntaje.val(add);
  };

  function pintarTrabajo() {
    const $puntaje = $("#puntajeTrabajosequipo");
    if ($puntaje.val() > 0 && $puntaje.val() < 6) {
      $puntaje.css("background", "red")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 5 && $puntaje.val() < 13) {
      $puntaje.css("background", "yellow")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 12 && $puntaje.val() < 19) {
      $puntaje.css("background", "green")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 18 && $puntaje.val() < 21) {
      $puntaje.css("background", "blue")
      $puntaje.css("color", "white")
    }
  };


  function sumaComunicacion() {
    const $indicador = $(".indicadorComunicacion");
    const $puntaje = $("#puntajeComunicacion");
    var add = 0;
    $indicador.each(function() {
      if (!isNaN($(this).val()) && $(this).val() < 5) {
        add += Number($(this).val());
      } else {
        alert('Por favor escriba un número del 1 al 4')
        $(this).val(' ')
      }
    });
    $puntaje.val(add);
  };

  function pintarComunicacion() {
    const $puntaje = $("#puntajeComunicacion");
    if ($puntaje.val() > 0 && $puntaje.val() < 6) {
      $puntaje.css("background", "red")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 5 && $puntaje.val() < 13) {
      $puntaje.css("background", "yellow")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 12 && $puntaje.val() < 19) {
      $puntaje.css("background", "green")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 18 && $puntaje.val() < 21) {
      $puntaje.css("background", "blue")
      $puntaje.css("color", "white")
    }
  };

  function sumaProactividad() {
    const $indicador = $(".indicadorProactividad");
    const $puntaje = $("#puntajeProactividad");
    var add = 0;
    $indicador.each(function() {
      if (!isNaN($(this).val()) && $(this).val() < 5) {
        add += Number($(this).val());
      } else {
        alert('Por favor escriba un número del 1 al 4')
        $(this).val(' ')
      }
    });
    $puntaje.val(add);
  };

  function pintarProactividad() {
    const $puntaje = $("#puntajeProactividad");
    if ($puntaje.val() > 0 && $puntaje.val() < 6) {
      $puntaje.css("background", "red")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 5 && $puntaje.val() < 13) {
      $puntaje.css("background", "yellow")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 12 && $puntaje.val() < 19) {
      $puntaje.css("background", "green")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 18 && $puntaje.val() < 21) {
      $puntaje.css("background", "blue")
      $puntaje.css("color", "white")
    }
  };



  function sumaAprendizaje() {
    const $indicador = $(".indicadorAprendizaje");
    const $puntaje = $("#puntajeAprendizaje");
    var add = 0;
    $indicador.each(function() {
      if (!isNaN($(this).val()) && $(this).val() < 5) {
        add += Number($(this).val());
      } else {
        alert('Por favor escriba un número del 1 al 4')
        $(this).val(' ')
      }
    });
    $puntaje.val(add);
  };

  function pintarAprendizaje() {
    const $puntaje = $("#puntajeAprendizaje");
    if ($puntaje.val() > 0 && $puntaje.val() < 6) {
      $puntaje.css("background", "red")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 5 && $puntaje.val() < 13) {
      $puntaje.css("background", "yellow")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 12 && $puntaje.val() < 19) {
      $puntaje.css("background", "green")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 18 && $puntaje.val() < 21) {
      $puntaje.css("background", "blue")
      $puntaje.css("color", "white")
    }
  };


  function cacularPromedio() {
    const $indicadorTrabajo = $("#puntajeTrabajosequipo");
    const $indicadorComunicacion = $("#puntajeComunicacion");
    const $indicadorProactividad = $("#puntajeProactividad");
    const $indicadorAprendizaje = $("#puntajeAprendizaje");


    let $sumaIndicadores = Math.round(((
      Number($indicadorTrabajo.val()) +
      Number($indicadorComunicacion.val()) +
      Number($indicadorProactividad.val()) +
      Number($indicadorAprendizaje.val())
    ) / 4));
    const $inputPromedio = $("#promedioValoracion");
    const $promedioValoracion1 = $("#promedioValoracion1");


    $inputPromedio.val($sumaIndicadores);
    $promedioValoracion1.text($sumaIndicadores);


  };

  function pintarPromedio() {
    const $puntaje = $("#promedioValoracion1");
    if ($puntaje.val() > 0 && $puntaje.val() < 6) {
      $puntaje.css("background", "red")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 5 && $puntaje.val() < 13) {
      $puntaje.css("background", "yellow")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 12 && $puntaje.val() < 19) {
      $puntaje.css("background", "green")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 18 && $puntaje.val() < 21) {
      $puntaje.css("background", "blue")
      $puntaje.css("color", "white")
    }
  };

  function pintarPromedioBox1() {
    const $puntaje = $("#promedioValoracion1").text();
    const $box = $("#boxPromedio1");
    const $numberPuntaje = Number($puntaje);

    if ($numberPuntaje > 0 && $numberPuntaje < 6) {
      $box.removeClass("bg-red")
      $box.removeClass("bg-yellow")
      $box.removeClass("bg-green")
      $box.removeClass("bg-blue")
      $box.addClass("bg-red")
    } else if ($numberPuntaje > 5 && $numberPuntaje < 13) {
      $box.removeClass("bg-red")
      $box.removeClass("bg-yellow")
      $box.removeClass("bg-green")
      $box.removeClass("bg-blue")
      $box.addClass("bg-yellow")
    } else if ($numberPuntaje > 12 && $numberPuntaje < 19) {
      $box.removeClass("bg-red")
      $box.removeClass("bg-yellow")
      $box.removeClass("bg-green")
      $box.removeClass("bg-blue")
      $box.addClass("bg-green")
    } else if ($numberPuntaje > 18 && $numberPuntaje < 21) {
      $box.removeClass("bg-red")
      $box.removeClass("bg-yellow")
      $box.removeClass("bg-green")
      $box.removeClass("bg-blue")
      $box.addClass("bg-blue")
    }
  };


  $(document).on('change', ".indicadorTrabajosequipo", function() {
    sumaTrabajo();
    pintarTrabajo();
    cacularPromedio();
    pintarPromedio();
    pintarPromedioBox1();
  })
  $(document).on('change', ".indicadorComunicacion", function() {
    sumaComunicacion();
    pintarComunicacion();
    cacularPromedio();
    pintarPromedio();
    pintarPromedioBox1();

  })
  $(document).on('change', ".indicadorProactividad", function() {
    sumaProactividad();
    pintarProactividad();
    cacularPromedio();
    pintarPromedio();
    pintarPromedioBox1();

  })
  $(document).on('change', ".indicadorAprendizaje", function() {
    sumaAprendizaje();
    pintarAprendizaje();
    cacularPromedio();
    pintarPromedio();
    pintarPromedioBox1();

  })











  function sumaTrabajo2() {
    const $indicador = $(".indicadorTrabajosequipo2");
    const $puntaje = $("#puntajeTrabajosequipo2");
    var add = 0;
    $indicador.each(function() {
      if (!isNaN($(this).val()) && $(this).val() < 5) {
        add += Number($(this).val());
      } else {
        alert('Por favor escriba un número del 1 al 4')
        $(this).val(' ')
      }
    });
    $puntaje.val(add);
  };

  function pintarTrabajo2() {
    const $puntaje = $("#puntajeTrabajosequipo2");
    if ($puntaje.val() > 0 && $puntaje.val() < 6) {
      $puntaje.css("background", "red")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 5 && $puntaje.val() < 13) {
      $puntaje.css("background", "yellow")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 12 && $puntaje.val() < 19) {
      $puntaje.css("background", "green")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 18 && $puntaje.val() < 21) {
      $puntaje.css("background", "blue")
      $puntaje.css("color", "white")
    }
  };


  function sumaComunicacion2() {
    const $indicador = $(".indicadorComunicacion2");
    const $puntaje = $("#puntajeComunicacion2");
    var add = 0;
    $indicador.each(function() {
      if (!isNaN($(this).val()) && $(this).val() < 5) {
        add += Number($(this).val());
      } else {
        alert('Por favor escriba un número del 1 al 4')
        $(this).val(' ')
      }
    });
    $puntaje.val(add);
  };

  function pintarComunicacion2() {
    const $puntaje = $("#puntajeComunicacion2");
    if ($puntaje.val() > 0 && $puntaje.val() < 6) {
      $puntaje.css("background", "red")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 5 && $puntaje.val() < 13) {
      $puntaje.css("background", "yellow")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 12 && $puntaje.val() < 19) {
      $puntaje.css("background", "green")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 18 && $puntaje.val() < 21) {
      $puntaje.css("background", "blue")
      $puntaje.css("color", "white")
    }
  };

  function sumaProactividad2() {
    const $indicador = $(".indicadorProactividad2");
    const $puntaje = $("#puntajeProactividad2");
    var add = 0;
    $indicador.each(function() {
      if (!isNaN($(this).val()) && $(this).val() < 5) {
        add += Number($(this).val());
      } else {
        alert('Por favor escriba un número del 1 al 4')
        $(this).val(' ')
      }
    });
    $puntaje.val(add);
  };

  function pintarProactividad2() {
    const $puntaje = $("#puntajeProactividad2");
    if ($puntaje.val() > 0 && $puntaje.val() < 6) {
      $puntaje.css("background", "red")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 5 && $puntaje.val() < 13) {
      $puntaje.css("background", "yellow")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 12 && $puntaje.val() < 19) {
      $puntaje.css("background", "green")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 18 && $puntaje.val() < 21) {
      $puntaje.css("background", "blue")
      $puntaje.css("color", "white")
    }
  };



  function sumaAprendizaje2() {
    const $indicador = $(".indicadorAprendizaje2");
    const $puntaje = $("#puntajeAprendizaje2");
    var add = 0;
    $indicador.each(function() {
      if (!isNaN($(this).val()) && $(this).val() < 5) {
        add += Number($(this).val());
      } else {
        alert('Por favor escriba un número del 1 al 4')
        $(this).val(' ')
      }
    });
    $puntaje.val(add);
  };

  function pintarAprendizaje2() {
    const $puntaje = $("#puntajeAprendizaje2");
    if ($puntaje.val() > 0 && $puntaje.val() < 6) {
      $puntaje.css("background", "red")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 5 && $puntaje.val() < 13) {
      $puntaje.css("background", "yellow")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 12 && $puntaje.val() < 19) {
      $puntaje.css("background", "green")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 18 && $puntaje.val() < 21) {
      $puntaje.css("background", "blue")
      $puntaje.css("color", "white")
    }
  };


  function cacularPromedio2() {
    const $indicadorTrabajo = $("#puntajeTrabajosequipo2");
    const $indicadorComunicacion = $("#puntajeComunicacion2");
    const $indicadorProactividad = $("#puntajeProactividad2");
    const $indicadorAprendizaje = $("#puntajeAprendizaje2");


    let $sumaIndicadores = Math.round(((
      Number($indicadorTrabajo.val()) +
      Number($indicadorComunicacion.val()) +
      Number($indicadorProactividad.val()) +
      Number($indicadorAprendizaje.val())
    ) / 4));
    const $inputPromedio = $("#promedioValoracion2");

    $inputPromedio.text($sumaIndicadores);


  };

  function pintarPromedio2() {
    const $puntaje = $("#promedioValoracion2");
    if ($puntaje.val() > 0 && $puntaje.val() < 6) {
      $puntaje.css("background", "red")
      $puntaje.css("color", "white")
    } else if ($puntaje.val() > 5 && $puntaje.val() < 13) {
      $puntaje.css("background", "yellow")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 12 && $puntaje.val() < 19) {
      $puntaje.css("background", "green")
      $puntaje.css("color", "black")
    } else if ($puntaje.val() > 18 && $puntaje.val() < 21) {
      $puntaje.css("background", "blue")
      $puntaje.css("color", "white")
    }
  };



  function pintarPromedioBox2() {
    const $puntaje = $("#promedioValoracion2").text();
    const $box = $("#boxPromedio2");
    const $numberPuntaje = Number($puntaje);

    if ($numberPuntaje > 0 && $numberPuntaje < 6) {
      $box.addClass("bg-red")
    } else if ($numberPuntaje > 5 && $numberPuntaje < 13) {
      $box.addClass("bg-yellow")
    } else if ($numberPuntaje > 12 && $numberPuntaje < 19) {
      $box.addClass("bg-green")
    } else if ($numberPuntaje > 18 && $numberPuntaje < 21) {
      $box.addClass("bg-blue")
    }
  };

  sumaTrabajo2();
  pintarTrabajo2();
  cacularPromedio2();
  pintarPromedio2();
  sumaComunicacion2();
  pintarComunicacion2();
  cacularPromedio2();
  pintarPromedio2();
  sumaProactividad2();
  pintarProactividad2();
  cacularPromedio2();
  pintarPromedio2();
  sumaAprendizaje2();
  pintarAprendizaje2();
  cacularPromedio2();
  pintarPromedioBox2();



  $("#añadirPadre").click(function() {
    $('#registrarValoracion:checked').each(
      function() {
        $(".press").append("<input type='hidden' class='form-control rounded-2' id='inputPadres' name='valoracion[]' value='" + $(this).val() + "'>");
      }
    );
    $('#leerValoracion:checked').each(
      function() {
        $(".press").append("<input type='hidden' class='form-control rounded-2' id='inputPadres' name='leer[]' value='" + $(this).val() + "'>");
      }
    );
    $("#modal-buscarUsuario").modal("hide");
  });


  $(document).on("click", ".btn-view-padres", function() {
    valor_id = $(this).val();
    $.ajax({
      url: BASE_URL + "administrador/parentesco/view",
      type: "POST",
      dataType: "html",
      data: {
        id: valor_id
      },
      success: function(data) {
        $("#modal-defaultinfo .modal-body").html(data);
        $("#modal-defaultinfo .modal-body").html(data);
      }
    });
  });
  $("#añadirHijos").click(function() {
    $(".inputHijosPermitions").empty();

    $('#registrarPermitions:checked').each(
      function() {
        $(".inputHijosPermitions").append("<input type='hidden' class='form-control rounded-2' id='inputPadres' name='valoracion[]' value='" + $(this).val() + "'>");
      }
    );
    $('#leerPermitions:checked').each(
      function() {
        $(".inputHijosPermitions").append("<input type='hidden' class='form-control rounded-2' id='inputPadres' name='leer[]' value='" + $(this).val() + "'>");
      }
    );
    $("#modal-buscarUsuario").modal("hide");
    $("#modal-defaultHijos").modal("hide");
  });
  $("#añadirPadres").click(function() {
    $('#addPadres:checked').each(
      function() {
        $(".inputPadresPermitions").append("<input type='hidden' class='form-control rounded-2' id='inputPadres' name='idPadres[]' value='" + $(this).val() + "'>");
      }
    );
    $("#modal-buscarUsuario").modal("hide");
    $("#modal-defaultPadres").modal("hide");
  });


  $(document).on("click", ".btn-remove", function() {
    $(this).closest("tr").remove();
  });

  /* Busca periodo por años list */
  $(document).on("change", "#selectPeriodo", function() {
    $('#bodytable tr').empty();
    valor_id = $(this).val();
    $.ajax({
      url: BASE_URL + "administrador/periodos/getDetallePeriodo",
      type: "POST",
      dataType: "json",
      data: {
        id: valor_id
      },
      success: function(data) {

        html = "<tr>";
        html += "<td>" + data.detallesPeriodo[0]['nombre'] + "</td>";
        html += "<td>" + data.detallesPeriodo[0]['fecha_inicio'] + "</td>";
        html += "<td>" + data.detallesPeriodo[0]['fecha_fin'] + "</td>";
        html += "<td><div class='btn-group'><a href='" + BASE_URL + "administrador/periodos/edit/" + data.detallesPeriodo[0]['id'] + "' class='btn btn-warning btn-lg'><span class='fas fa-edit'></span></a>";
        html += "</div>";
        html += "</tr>";

        html += "<tr>";
        html += "<td>" + data.detallesPeriodo[1]['nombre'] + "</td>";
        html += "<td>" + data.detallesPeriodo[1]['fecha_inicio'] + "</td>";
        html += "<td>" + data.detallesPeriodo[1]['fecha_fin'] + "</td>";
        html += "<td><div class='btn-group'><a href='" + BASE_URL + "administrador/periodos/edit/" + data.detallesPeriodo[1]['id'] + "' class='btn btn-warning btn-lg'><span class='fas fa-edit'></span></a>";
        html += "</div>";
        html += "</tr>";


        html += "<tr>";
        html += "<td>" + data.detallesPeriodo[2]['nombre'] + "</td>";
        html += "<td>" + data.detallesPeriodo[2]['fecha_inicio'] + "</td>";
        html += "<td>" + data.detallesPeriodo[2]['fecha_fin'] + "</td>";
        html += "<td><div class='btn-group'><a href='" + BASE_URL + "administrador/periodos/edit/" + data.detallesPeriodo[2]['id'] + "' class='btn btn-warning btn-lg'><span class='fas fa-edit'></span></a>";
        html += "</div>";
        html += "</tr>";

        html += "<tr>";
        html += "<td>" + data.detallesPeriodo[3]['nombre'] + "</td>";
        html += "<td>" + data.detallesPeriodo[3]['fecha_inicio'] + "</td>";
        html += "<td>" + data.detallesPeriodo[3]['fecha_fin'] + "</td>";
        html += "<td><div class='btn-group'><a href='" + BASE_URL + "administrador/periodos/edit/" + data.detallesPeriodo[3]['id'] + "' class='btn btn-warning btn-lg'><span class='fas fa-edit'></span></a>";
        html += "</div>";
        html += "</tr>";
        $('#bodytable tr:last').empty();
        $('#bodytable tr:last').after(html);
      }
    });
  });

  if ($("#calif_1").val() == 1) {
    $("#customRadio1").prop("checked", true);
  } else {
    $("#customRadio2").prop("checked", true);
  }
  if ($("#calif_2").val() == 1) {
    $("#customRadio3").prop("checked", true);
  } else {
    $("#customRadio4").prop("checked", true);
  }
  if ($("#calif_3").val() == 1) {
    $("#customRadio5").prop("checked", true);
  } else {
    $("#customRadio6").prop("checked", true);
  }

  $(document).on("click", ".btn-print", function() {
    $("#modal-leer-val .modal-body").print({
      title: "Valoración por objetivos"
    });
  });
</script>
<style>
  input {
    text-align: center;
  }

  .center {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .textCenter {
    display: flex;
    text-align: center;
    font-size: 55px;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script src="<?php echo base_url(); ?>assets/template/jquery-print/jquery.print.js"></script>
