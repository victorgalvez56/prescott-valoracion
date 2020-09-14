<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Nueva Área</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Agregar Área</li>
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
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Registro de visita</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<table id="example1" class="table table-bordered table-striped table-sm ">
										<thead>
										<tr>
											<th style="text-align: center">
											</th>
											<?php foreach ($ficha_pedagogica as $ficha) : ?>

												<th style="text-align: center">
													<?php echo $ficha["nombre"]; ?>
												</th>
											<?php endforeach; ?>
										</tr>

										</thead>
										<tbody>
										<tr class="bg-primary">
											<td colspan="2">
												<?php echo $enseñanzas[0]->nombre_tipo_item; ?>
											</td>
										</tr>
										<?php foreach ($enseñanzas as $enseñanza) : ?>
											<tr class="table-success">
												<td>
													<?php echo $enseñanza->nombre ?>
												</td>
												<td style="text-align: center">

																				<input  name="procesos[]" value="
													<?php echo $enseñanza->id;?>" type="checkbox">
												</td>
											</tr>

										<?php endforeach; ?>

										<?php for ($x = 0; $x < count($ficha_pedagogica); $x++) { ?>
											<?php for ($i = 0; $i < count($ficha_pedagogica[$x]["visitas"]); $i++) { ?>
												<?php for ($j = 0; $j < count($ficha_pedagogica[$x]["visitas"][$i]["data"]["item_id"]); $j++) { ?>
													<tr class="table-primary">
														<td>
															<?php echo json_encode($ficha_pedagogica[$x]["visitas"][$i]["data"]["item_id"][$j]); ?>
														</td>
													</tr>
												<?php }
											}
										} ?>
										<tr class="bg-success">
											<td colspan="2">
												<!--						--><?php //echo $procesos[0]->nombre_tipo_item;?>
											</td>
										</tr>
										<!--				--><?php //foreach ($procesos as $proceso) : ?>
										<tr class="table-success">
											<td>
												<!--							--><?php //echo $proceso->nombre?>
											</td>
											<td style="text-align: center">

												<!--							<input  name="procesos[]" value="-->
												<?php //echo $proceso->id;?><!--" type="checkbox">-->
											</td>
										</tr>
										<!--				--><?php //endforeach; ?>
										<tr class="bg-warning">
											<td colspan="2">
												<!--						--><?php //echo $manejos[0]->nombre_tipo_item;?>
											</td>
										</tr>
										<!--				--><?php //foreach ($manejos as $manejo) : ?>
										<tr class="table-warning">

											<td>
												<!--							--><?php //echo $manejo->nombre?>
											</td>
											<td style="text-align: center">
												<!--							<input name="manejos[]" value="-->
												<?php //echo $manejo->id;?><!--" type="checkbox">-->
											</td>
										</tr>
										<!--				--><?php //endforeach; ?>

										<tr class="bg-info">
											<td colspan="2">
												<!--						--><?php //echo $documentos[0]->nombre_tipo_item;?>
											</td>
										</tr>
										<!--				--><?php //foreach ($documentos as $documento) : ?>
										<tr class="table-info">
											<td>
												<!--							--><?php //echo $documento->nombre?>
											</td>
											<td style="text-align: center">
												<!--							<input name="documentos[]" value="-->
												<?php //echo $documento->id;?><!--" type="checkbox">-->
											</td>
										</tr>
										<!--				--><?php //endforeach; ?>
										</tbody>
										<tfoot>
										</tfoot>
									</table>
								</div>
								<div class="card-footer">
									<div class="form-group">
										<label for="exampleInputPassword1">Describo: <a href="#"> </a></label> <br>
										<textarea name="describo" class="form-control is-valid" rows="2"
												  placeholder="Escriba aquí su comentario ..." required></textarea>
									</div>

									<div class="form-group">
										<label for="exampleInputPassword1">Valoro: <a href="#"></a></label> <br>
										<textarea name="valoro" class="form-control is-valid" rows="2"
												  placeholder="Escriba aquí su comentario ..."
												  required></textarea>
									</div>

									<div class="form-group">
										<label for="exampleInputPassword1">Me pregunto: <a href="#"></a></label> <br>
										<textarea name="pregunto" class="form-control is-valid" rows="2"
												  placeholder="Escriba aquí su comentario ..." required></textarea>
									</div>

									<div class="form-group">
										<label for="exampleInputPassword1">Sugiero: <a href="#"></a></label> <br>
										<textarea name="sugiero" class="form-control is-valid" rows="2"
												  placeholder="Escriba aquí su comentario ..."
												  required></textarea>
									</div>
									<div class="input-group">
										<button type="submit" class="btn btn-success">Guardar</button>
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
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
