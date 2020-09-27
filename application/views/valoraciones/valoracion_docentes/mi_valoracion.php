<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<input type="hidden" id="id_profesor" value="<?php echo $this->session->userdata("id"); ?>">

	<section class="content-header">
		<div class="container-fluid">
			<div class="row ">
				<div class="col-sm-2">
					<h1>Valoraciones</h1>
				</div>
				<div class="col-sm-2">
					<?php if ($promediovaloraciones != false) : ?>
						<div class="info-box bg--info">
							<div class="info-box-content">
								<span class="info-box-text">Promedio Valoraciones (SOFT)  </span>
								<span class="info-box-number"><?php echo $promediovaloraciones; ?></span>
								40% Promedio Final
							</div>
						</div>
					<?php endif; ?>

				</div>
				<div class="col-sm-2">
					<?php if ($total_valoracion_o != false) : ?>
						<div class="info-box bg--info">
							<div class="info-box-content">
								<span class="info-box-text">Promedio Valoraciones (HARD)  </span>
								<span class="info-box-number"><?php echo $total_valoracion_o; ?></span>

								60% Promedio Final
							</div>
						</div>
					<?php endif; ?>
				</div>
				<div class="col-sm-2">
					<?php if ($promedio_final != false) : ?>
						<div class="info-box bg-gradient-<?php echo $color_tarjeta_promedio; ?>">
							<div class="info-box-content">
								<span class="info-box-text">Promedio Final  </span>
								<span class="info-box-number"><?php echo $promedio_final; ?></span>
								100% Promedio Final
							</div>
							<!-- /.info-box-content -->
						</div>
					<?php endif; ?>

				</div>
				<div class="col-sm-4">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Valoraciones</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- Main content -->

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header d-flex p-0">
							<?php
							if ($padre_registrador == false) {
								?>
								<h3 class="card-title p-3">
									<strong>Este usuario no tiene quien lo registre. Contactar a sistemas.
									</strong>
								</h3>
							<?php } else { ?>
								<ul class="nav nav-pills ml-auto p-2">
									<li class="nav-item"><a class="nav-link" href="#tab_1" data-toggle="tab">Valoración
											1</a></li>
									<li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Valoración
											2</a></li>
									<li class="nav-item"><a class="nav-link active" href="#tab_3" data-toggle="tab">Valoración
											Pedagógica</a></li>
								</ul>
							<?php } ?>
						</div>
						<div class="card-body">
							<div class="tab-content">
								<div class="tab-pane" id="tab_1">
									<div class="box box-solid">
										<div class="box-body">
											<div class="row">
												<div class="col-md-12">
													<?php if ($puntajes1_val1 == true) { ?>
														<?php include 'application/views/valoraciones/valoracion_adm/valoracion1.php'; ?>
													<?php } else { ?>
														<?php include 'application/views/valoraciones/valoracion_adm/valoracion_no_registrado.php'; ?>
													<?php } ?>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab_2">
									<div class="box box-solid">
										<div class="box-body">
											<div class="row">
												<div class="col-md-12">
													<?php if ($puntajes1_val2 == true) { ?>
														<?php include 'application/views/valoraciones/valoracion_adm/valoracion2.php'; ?>
													<?php } else { ?>
														<?php include 'application/views/valoraciones/valoracion_adm/valoracion_no_registrado.php'; ?>
													<?php } ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane active" id="tab_3">
									<?php if($observaciones == true) {?>
									<section class="content">
										<div class="container-fluid">
											<!-- Timelime example  -->
										</div>
										<!-- END timeline item -->
										<!-- timeline item -->
										<div>
											<section class="content">
												<!-- Default box -->
												<div class="box box-solid">
													<div class="box-body">
														<div class="row">
															<div class="col-md-12">
																<div class="col-md-12">
																	<div class="card">
																		<div class="card-header">
																			<h3 class="card-title">Registro de
																				visitas</h3>
																		</div>
																		<!-- /.card-header -->
																		<div class="card-body">
																			<table id="mostrar_visitas_bimestre1"
																				   class="table table-bordered text-justify">
																				<thead>
																				<tr>
																				</tr>
																				</thead>
																				<tbody>

																				</tbody>
																			</table>
																			<table id="mostrar_niveles_dominio"
																				   class="table table-bordered text-center">
																				<thead>
																				<tr>
																				</tr>
																				</thead>
																				<tbody>
																				</tbody>
																			</table>

																		</div>
																		<div class="card-footer">

																			<div class="row">
																				<div class="col-md-6">
																					<!-- general form elements -->
																					<div class="card card-primary">
																						<div class="card-header">
																							<h3 class="card-title">
																								Describo</h3>
																						</div>
																						<div class="card-body">
																							<div class="form-group">
																								<?php if (!empty($observaciones)) : ?>
																									<?php foreach ($observaciones as $observacion_describo) : ?>
																										<label for="exampleInputEmail1">Evaluador
																											<a href="#"><?php echo $observacion_describo->create_by; ?></a>
																											- <?php echo date("d-m-Y",strtotime($observacion_describo->create_at)); ?>
																										</label>
																										<textarea
																												class="form-control"
																												rows="2"
																												disabled=""><?php echo $observacion_describo->describo_eval; ?></textarea>

																									<?php endforeach; ?>
																								<?php endif; ?>

																							</div>
																						</div>
																					</div>
																					<!-- /.card -->
																					<div class="card card-primary">
																						<div class="card-header">
																							<h3 class="card-title">
																								Valoro</h3>
																						</div>
																						<form role="form">
																							<div class="card-body">
																								<div class="form-group">
																									<?php if (!empty($observaciones)) : ?>
																										<?php foreach ($observaciones as $observacion_valoro) : ?>
																											<label for="exampleInputEmail1">Evaluador
																												<a href="#"><?php echo $observacion_valoro->create_by; ?></a>
																												- <?php echo date("d-m-Y",strtotime($observacion_valoro->create_at)); ?>
																											</label>
																											<textarea
																													class="form-control"
																													rows="2"
																													disabled=""><?php echo $observacion_valoro->valoro_eval; ?></textarea>


																										<?php endforeach; ?>
																									<?php endif; ?>
																								</div>
																							</div>
																						</form>
																					</div>
																				</div>
																				<div class="col-md-6">
																					<!-- general form elements -->
																					<div class="card card-primary">
																						<div class="card-header">
																							<h3 class="card-title">Me
																								pregunto</h3>
																						</div>
																						<form role="form">
																							<div class="card-body">
																								<div class="form-group">
																									<?php if (!empty($observaciones)) : ?>
																										<?php foreach ($observaciones as $observacion_pregunto) : ?>
																											<label for="exampleInputEmail1">Evaluador
																												<a href="#"><?php echo $observacion_pregunto->create_by; ?></a>
																												- <?php echo date("d-m-Y",strtotime($observacion_pregunto->create_at)); ?>
																											</label>
																											<textarea
																													class="form-control"
																													rows="2"
																													disabled=""><?php echo $observacion_pregunto->pregunto_eval; ?></textarea>
																										<?php endforeach; ?>
																									<?php endif; ?>
																								</div>
																							</div>
																						</form>
																					</div>
																					<!-- /.card -->
																					<div class="card card-primary">
																						<div class="card-header">
																							<h3 class="card-title">Quick
																								Example</h3>
																						</div>
																						<form role="form">
																							<div class="card-body">
																								<div class="form-group">
																									<?php if (!empty($observaciones)) : ?>
																										<?php foreach ($observaciones as $observacion_sugiero) : ?>
																											<label for="exampleInputEmail1">Evaluador
																												<a href="#"><?php echo $observacion_sugiero->create_by; ?></a>
																												- <?php echo date("d-m-Y",strtotime($observacion_sugiero->create_at)); ?>
																											</label>
																											<textarea
																													class="form-control"
																													rows="2"
																													disabled=""><?php echo $observacion_sugiero->sugiero_eval; ?></textarea>

																										<?php endforeach; ?>
																									<?php endif; ?>
																								</div>
																							</div>
																						</form>
																					</div>
																				</div>
																			</div>

																		</div>
																	</div>
																</div>
																<!-- /.card -->
																<!-- Form Element sizes -->
															</div>
														</div>
													</div>
													<!-- /.box-body -->
												</div>
												<!-- /.box -->
											</section>
										</div>
									</section>
									<?php } else{?>

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

														<div class="alert alert-danger alert-dismissible">
															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
															<h5><i class="icon fas fa-ban"></i> Alerta!</h5>
															La valoración aún no ha sido registrada.
														</div>
													</div>
												</div>
											</div>
											<!-- /.box-body -->
										</div>

									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>

<style>
	.bg-red {
		background-color: red !important;
	}

	.bg-yellow {
		background-color: yellow !important;
	}

	.bg-green {
		background-color: green !important;
	}

	.bg-blue {
		background-color: blue !important;
	}

	/*Flecha para hacer la pagina hacia arriba*/
	.ir-arriba {
		background-repeat: no-repeat;
		font-size: 20px;
		color: black;
		cursor: pointer;
		position: fixed;
		bottom: 500px;
		right: 10px;
		z-index: 2;
	}

	.ir-abajo {
		background-repeat: no-repeat;
		font-size: 20px;
		color: black;
		cursor: pointer;
		position: fixed;
		bottom: 500px;
		right: 50px;
		z-index: 2;
	}
</style>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

<script>

	var canvas = document.getElementById('signature-pad');

	// Adjust canvas coordinate space taking into account pixel ratio,
	// to make it look crisp on mobile devices.
	// This also causes canvas to be cleared.
	function resizeCanvas() {
		// When zoomed out to less than 100%, for some very strange reason,
		// some browsers report devicePixelRatio as less than 1
		// and only part of the canvas is cleared then.
		var ratio = Math.max(window.devicePixelRatio || 1, 1);
		canvas.width = canvas.offsetWidth * ratio;
		canvas.height = canvas.offsetHeight * ratio;
		canvas.getContext("2d").scale(ratio, ratio);
	}

	window.onresize = resizeCanvas;
	resizeCanvas();

	var signaturePad = new SignaturePad(canvas, {

		backgroundColor: '#EEE8F3',
		penColor: "black",
		// necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
	});

	document.getElementById('save-png').addEventListener('click', function () {
		if (signaturePad.isEmpty()) {
			return alert("Por favor realice su firma.");
		}

		var data = signaturePad.toDataURL('image/png');
		console.log(data);
		$("#imagen_firma").val(data);
	});
	document.getElementById('clear').addEventListener('click', function () {
		signaturePad.clear();
	});

	document.getElementById('undo').addEventListener('click', function () {
		var data = signaturePad.toData();
		if (data) {
			data.pop(); // remove the last dot or line
			signaturePad.fromData(data);
		}
	});
</script>
