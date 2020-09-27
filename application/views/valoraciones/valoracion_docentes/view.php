<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<?php if($observaciones == true) {?>
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Ficha Pedagógica  <a href="#"><?php echo $observaciones[0]->nombres." ".$observaciones[0]->apellidos;?></a></h1>

				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Ficha Pedagógica</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="box box-solid">
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<?php if ($this->session->flashdata("error")) : ?>
							<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
								</button>
								<p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
							</div>
						<?php endif; ?>
						<input type="hidden" id="id_profesor" value="<?php echo $id_profesor; ?>">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Registro de visitas</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<table id="mostrar_visitas_bimestre1" class="table table-bordered text-justify">
										<thead>
										<tr>
										</tr>
										</thead>
										<tbody>

										</tbody>
									</table>
									<table id="mostrar_niveles_dominio" class="table table-bordered text-center">
										<thead>
										<tr>
										</tr>
										</thead>
										<tbody>
<!--										<tr>-->
<!--											<td colspan="10">Promedio</td>-->
<!--										--><?php //if (!empty($puntajes)) : ?>
<!--											--><?php //foreach ($puntajes as $puntaje) : ?>
<!--													<td><input type="checkbox"></td>-->
<!--											--><?php //endforeach; ?>
<!--										--><?php //endif; ?>
<!--										</tr>-->

										</tbody>
									</table>

								</div>
								<div class="card-footer">

									<div class="row">
										<div class="col-md-6">
											<!-- general form elements -->
											<div class="card card-primary">
												<div class="card-header">
													<h3 class="card-title">Describo</h3>
												</div>
													<div class="card-body">
														<div class="form-group">
															<?php if (!empty($observaciones)) : ?>
																<?php foreach ($observaciones as $observacion_describo) : ?>
																	<label for="exampleInputEmail1">Evaluador  <a href="#"><?php  echo $observacion_describo->create_by;?></a> - <?php  echo $observacion_describo->create_at;?></label>
																	<textarea class="form-control" rows="2"
																			  disabled=""><?php  echo $observacion_describo->describo_eval;?></textarea>

																<?php endforeach; ?>
															<?php endif; ?>

														</div>
													</div>
											</div>
											<!-- /.card -->
											<div class="card card-primary">
												<div class="card-header">
													<h3 class="card-title">Valoro</h3>
												</div>
												<form role="form">
													<div class="card-body">
														<div class="form-group">
															<?php if (!empty($observaciones)) : ?>
																<?php foreach ($observaciones as $observacion_valoro) : ?>
																	<label for="exampleInputEmail1">Evaluador  <a href="#"><?php  echo $observacion_valoro->create_by;?></a> - <?php  echo $observacion_valoro->create_at;?></label>
																	<textarea class="form-control" rows="2"
																			  disabled=""><?php  echo $observacion_valoro->valoro_eval;?></textarea>


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
													<h3 class="card-title">Me pregunto</h3>
												</div>
												<form role="form">
													<div class="card-body">
														<div class="form-group">
															<?php if (!empty($observaciones)) : ?>
																<?php foreach ($observaciones as $observacion_pregunto) : ?>
																	<label for="exampleInputEmail1">Evaluador  <a href="#"><?php  echo $observacion_pregunto->create_by;?></a> - <?php  echo $observacion_pregunto->create_at;?></label>
																	<textarea class="form-control" rows="2"
																			  disabled=""><?php  echo $observacion_pregunto->pregunto_eval;?></textarea>
																<?php endforeach; ?>
															<?php endif; ?>
														</div>
													</div>
												</form>
											</div>
											<!-- /.card -->
											<div class="card card-primary">
												<div class="card-header">
													<h3 class="card-title">Quick Example</h3>
												</div>
												<form role="form">
													<div class="card-body">
														<div class="form-group">
															<?php if (!empty($observaciones)) : ?>
																<?php foreach ($observaciones as $observacion_sugiero) : ?>
																	<label for="exampleInputEmail1">Evaluador  <a href="#"><?php  echo $observacion_sugiero->create_by;?></a> - <?php  echo $observacion_sugiero->create_at;?></label>
																	<textarea class="form-control" rows="2"
																			  disabled=""><?php  echo $observacion_sugiero->sugiero_eval;?></textarea>

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
	<?php } else{?>

		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<div class="alert alert-warning alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h5><i class="icon fas fa-exclamation-triangle"></i> ¡Importante!</h5>
							Aún no se ha registrado ninguna visita a este colaborador.
						</div>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Ficha Pedagógica</li>
						</ol>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>

	<?php } ?>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->



