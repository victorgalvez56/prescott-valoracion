<div class="row">
	<section class="connectedSortable ui-sortable ">
	</section>
	<section class="col-lg-12 connectedSortable ui-sortable center">
		<form action="<?php echo base_url(); ?>valoracion/anecdotario_adm/store" method="POST">
			<div class="col-md-12">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Registre los su opinión en el anecdotario</h3>
					</div>
					<div class="card-body">
						<div class="form-group">
							<!--							<label for="nombre">Descripción</label>-->
							<input type="hidden" name="id_usuario" value="<?php echo $id_usuario ?>">
							<textarea name="anedotario" class="form-control is-valid" rows="3"
									  placeholder="" required></textarea>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
		</form>
	</section>
	<?php if (!empty($anecdotarios)) : ?>
		<section class="col-lg-12 connectedSortable ui-sortable center">
			<div class="col-md-12">
				<div class="col-md-12">
					<!-- general form elements disabled -->
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Anecdotario</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<div class="row">
								<div class="col-sm-12">
									<?php foreach ($anecdotarios as $anecdotario) : ?>
										<div class="form-group">
											<label><?php echo $anecdotario->create_at; ?></label>
											<textarea class="form-control" rows="1" disabled=""><?php echo $anecdotario->descripcion; ?></textarea>
										</div>
									<?php endforeach; ?>

								</div>
							</div>
						</div>

						<div class="form-group">

						</div>
						<div class="form-group">
						</div>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
		</section>
		<!--				<div class="col-12">-->
		<!--					<div class="card">-->
		<!--						<div class="card-header">-->
		<!--							<h3 class="card-title">Anecdotarios</h3>-->
		<!--						</div>-->
		<!--						<div class="card-body">-->
		<!--								<table id="tabla_anecdotario" class="stripe row-border order-column" style="width:100%">-->
		<!--								<thead>-->
		<!--								<tr>-->
		<!--									<th>Fecha</th>-->
		<!--									<th>Descripción</th>-->
		<!--								</tr>-->
		<!--								</thead>-->
		<!--								<tbody>-->

		<!--								</tbody>-->
		<!--								<tfoot>-->
		<!--								</tfoot>-->
		<!--							</table>-->
		<!--						</div>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</section>-->
	<?php endif; ?>

</div>
<script>

	$(tabla_anecdotario).ready(function () {
		var table = $('#example').removeAttr('width').DataTable({
			scrollY: "300px",
			scrollX: true,
			scrollCollapse: true,
			paging: false,
			columnDefs: [
				{width: 200, targets: 0}
			],
			fixedColumns: true
		});
	});

</script>
