<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Valoraciones</h1>
				</div>
				<div class="col-sm-6">
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
						<div class="card-header">
							<h3 class="card-title">Listado de Valoraciones</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
								<tr>
									<th>Nombres</th>
									<th>Promedio General</th>
									<th>Valoración Pedagógica</th>
								</tr>
								</thead>
								<tbody>
								<?php if (!empty($hijos)) : ?>
									<?php foreach ($hijos as $hijo) : ?>
										<tr>
											<td><?php echo $hijo->nombres . " " . $hijo->apellidos; ?></td>
											<td>
												<button class="btn btn-info btn-lg"
														value="<?php echo $hijo->hijo_id; ?>"
														id="modal-promedio_general" data-toggle="modal"
														data-target="#modal-promedio-general"><span
															class="fas fa-search"></span></button>
											</td>

											<td>
												<div class="btn-group">
													<a href="<?php echo base_url() ?>valoracion/valoracion_docentes/ver_ficha_pedagogica/<?php echo $hijo->hijo_id; ?>"
													   class="btn btn-info btn-lg"
													   value="<?php echo $hijo->hijo_id; ?>"><span
																class="fas fa-search"></span></a>

													<button class="btn btn-primary btn-lg"
															value="<?php echo $hijo->hijo_id; ?>"
															id="modal-registro_visita" data-toggle="modal"
															data-target="#modal-registrar-visita"><span
																class="fas fa-edit"></span></button>
													<button class="btn btn-warning btn-lg"
															value="<?php echo $hijo->hijo_id; ?>"
															id="modal-visita_rapida" data-toggle="modal"
															data-target="#modal-registrar-visita"><span
																class="fas fa-edit"></span></button>

												</div>
											</td>

										</tr>

								<?php endforeach; ?>
								<?php endif; ?>
								</tbody>
								<tfoot>
								</tfoot>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>

<div class="modal fade" id="modal-leer-val">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><input type="button" value="" id="titleValoracion"
											   class="btn btn-block bg-gradient-success btn-lg"></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Error algo ocurrió</p>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</button>
				<!--<button type="button" class="btn btn-primary">Save changes</button> -->
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
</div>

<div class="modal fade" id="modal-registrar-visita">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><input type="button" value="" id="titleValoracion"
											   class="btn btn-block bg-gradient-success btn-lg"></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Error algo ocurrió</p>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</button>
				<!--<button type="button" class="btn btn-primary">Save changes</button> -->
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
</div>
