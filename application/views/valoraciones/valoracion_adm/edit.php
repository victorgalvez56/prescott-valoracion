<form action="<?php echo base_url(); ?>valoracion/valoracion_adm/update" method="POST">
    <input type="hidden" id="tipo_validacion" name="tipo_validacion" value=" <?php echo $tipo_validacion; ?>">
    <input type="hidden" id="nameUsuario" name="idUsuario" value=" <?php echo $usuario->nombres . " " . $usuario->apellidos; ?>">
    <input type="hidden" id="idUsuario" name="idUsuario" value=" <?php echo $usuario->id; ?>">

    <div class="row">
        <section class="connectedSortable ui-sortable ">
        </section>
        <section class="col-lg-6 connectedSortable ui-sortable center">
            <img src="<?php echo base_url(); ?>assets/img/leyendapuntajes.png" alt="Leyenda" class="img-fluid" style="width: 500px">
        </section>
        <section class="col-lg-6 connectedSortable ui-sortable">
            <!-- <textarea class="form-control textCenter" id="promedioValoracion" rows="1" placeholder="Promedio" disabled=""></textarea> -->
            <!-- <input type="number" class="form-control textCenter" name="promediovaloracion" id="promedioValoracion" placeholder="Promedio" readonly> -->
            <div class=" col-12">
                <div id="boxPromedio1" class="info-box">

                    <div class="info-box-content center">
                        <strong>Promedio</strong>
                        <h1 id="promedioValoracion1"></h1>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </section>
        <section class="col-lg-6 connectedSortable ui-sortable">
            <div class="card card-lightblue">
                <div class="card-header">
                    <h3 class="card-title"><?php echo $puntajes1_val1[0]->nombre; ?> </h3>
                    <div class="card-tools">
                        <input size="1" name="puntajeComunicacion" id="puntajeComunicacion1" readonly>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body" style="display: block;">
                    <dl class="row">
                        <?php foreach ($puntajes1_val1 as $puntaje1) : ?>
                            <dd class="col-sm-8"> <?php echo $puntaje1->descripcion; ?></dd>
                            <dt class="col-sm-4"> <input type="number" name="inputTrabajo[]" class="form-control indicadorComunicacion1" placeholder="Escriba del 1 a 4" min="1" max="4" value="<?php echo $puntaje1->puntaje; ?>">
                            </dt>
                        <?php endforeach; ?>
                    </dl>
                </div>
            </div>
            <div class="card card-lightblue">
                <div class="card-header">
                    <h3 class="card-title"><?php echo $puntajes2_val1[0]->nombre; ?> </h3>
                    <div class="card-tools">
                        <input size="1" name="puntajeTrabajosequipo" id="puntajeTrabajosequipo1" readonly>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body" style="display: block;">
                    <dl class="row">
                        <?php foreach ($puntajes2_val1 as $puntaje2) : ?>
                            <dd class="col-sm-8"> <?php echo $puntaje2->descripcion; ?></dd>
                            <dt class="col-sm-4"> <input type="number" class="form-control indicadorTrabajosequipo1" value="<?php echo $puntaje2->puntaje; ?>">
                            </dt>
                        <?php endforeach; ?>
                    </dl>
                </div>
            </div>

        </section>
        <section class="col-lg-6 connectedSortable ui-sortable">
            <div class="card card-lightblue">
                <div class="card-header">
                    <h3 class="card-title"><?php echo $puntajes3_val1[0]->nombre; ?> </h3>
                    <div class="card-tools">
                        <input size="1" name="puntajeProactividad" id="puntajeProactividad1" readonly>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body" style="display: block;">
                    <dl class="row">
                        <?php foreach ($puntajes3_val1 as $puntaje3) : ?>
                            <dd class="col-sm-8"> <?php echo $puntaje3->descripcion; ?></dd>
                            <dt class="col-sm-4"> <input type="number" class="form-control indicadorProactividad1" value="<?php echo $puntaje3->puntaje; ?>">
                            </dt>
                        <?php endforeach; ?>
                    </dl>
                </div>
            </div>
            <div class="card card-lightblue">
                <div class="card-header">
                    <h3 class="card-title"><?php echo $puntajes4_val1[0]->nombre; ?> </h3>
                    <div class="card-tools">
                        <input size="1" name="puntajeAprendizaje" id="puntajeAprendizaje1" readonly>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body" style="display: block;">
                    <dl class="row">
                        <?php foreach ($puntajes4_val1 as $puntaje4) : ?>
                            <dd class="col-sm-8"> <?php echo $puntaje4->descripcion; ?></dd>
                            <dt class="col-sm-4"> <input type="number" class="form-control indicadorAprendizaje1" value="<?php echo $puntaje4->puntaje; ?>">
                            </dt>
                        <?php endforeach; ?>
                    </dl>
                </div>
            </div>
        </section>
    </div>
    <div align="center">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    function sumaTrabajo1() {
        console.warn('gaaaaa')
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

        $inputPromedio.text($sumaIndicadores);


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

    sumaTrabajo1();
    pintarTrabajo1();
    cacularPromedio1();
    pintarPromedio1();
    sumaComunicacion1();
    pintarComunicacion1();
    cacularPromedio1();
    pintarPromedio1();
    sumaProactividad1();
    pintarProactividad1();
    cacularPromedio1();
    pintarPromedio1();
    sumaAprendizaje1();
    pintarAprendizaje1();
    cacularPromedio1();
    pintarPromedioBox1();

    $(document).on('change', ".indicadorTrabajosequipo1", function() {
        sumaTrabajo1();
        pintarTrabajo1();
        cacularPromedio1();
        pintarPromedio1();
        pintarPromedioBox1();

    })
    $(document).on('change', ".indicadorComunicacion1", function() {
        sumaComunicacion1();
        pintarComunicacion1();
        cacularPromedio1();
        pintarPromedio1();
        pintarPromedioBox1();

    })
    $(document).on('change', ".indicadorProactividad1", function() {
        sumaProactividad1();
        pintarProactividad1();
        cacularPromedio1();
        pintarPromedio1();
        pintarPromedioBox1();

    })
    $(document).on('change', ".indicadorAprendizaje1", function() {
        sumaAprendizaje1();
        pintarAprendizaje1();
        cacularPromedio1();
        pintarPromedio1();
        pintarPromedioBox1();

    })


</script>