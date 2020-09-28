<form action="<?php echo base_url(); ?>valoracion/Valoracion_docentes/registro_ficha_pedagogica" method="POST">
	<input name="id_profesor" type="text" value="<?php echo $id_profesor; ?>">

	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Registro de visita</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<div class="row">
				<div class="form-group">
					<label for="apellidos">Grado y sección</label>
					<input type="text" class="form-control" name="grado_seccion" placeholder="Grado y sección" required>
				</div>

			</div>

			<table id="example1" class="table table-bordered table-striped table-sm ">
				<thead>
				<tr>
					<th style="text-align: center">
						<?php echo $bimestre->nombre; ?>
						<input type="text" name="id_bimestre" value="<?php echo $bimestre->id ?>">
					</th>
					<th style="text-align: center">
						Fecha Actual
						<?php echo $fecha_hoy; ?>
					</th>
				</tr>

				</thead>
				<tbody>
				<tr class="bg-primary">
					<td colspan="2">
						<?php echo $enseñanzas[0]->nombre_tipo_item; ?>
					</td>
				</tr>
				<?php foreach ($enseñanzas as $enseñanza) : ?>
					<tr class="table-primary">

						<td>
							<?php echo $enseñanza->nombre; ?>
						</td>
						<td style="text-align: center">
							<input name="items[]" value="<?php echo $enseñanza->id; ?>" type="checkbox">
						</td>
					</tr>
				<?php endforeach; ?>
				<tr class="bg-success">
					<td colspan="2">
						<?php echo $procesos[0]->nombre_tipo_item; ?>
					</td>
				</tr>
				<?php foreach ($procesos as $proceso) : ?>
					<tr class="table-success">
						<td>
							<?php echo $proceso->nombre ?>
						</td>
						<td style="text-align: center">

							<input name="items[]" value="<?php echo $proceso->id; ?>" type="checkbox">
						</td>
					</tr>
				<?php endforeach; ?>
				<tr class="bg-warning">
					<td colspan="2">
						<?php echo $manejos[0]->nombre_tipo_item; ?>
					</td>
				</tr>
				<?php foreach ($manejos as $manejo) : ?>
					<tr class="table-warning">

						<td>
							<?php echo $manejo->nombre ?>
						</td>
						<td style="text-align: center">
							<input name="items[]" value="<?php echo $manejo->id; ?>" type="checkbox">
						</td>
					</tr>
				<?php endforeach; ?>

				<tr class="bg-info">
					<td colspan="2">
						<?php echo $documentos[0]->nombre_tipo_item; ?>
					</td>
				</tr>
				<?php foreach ($documentos as $documento) : ?>
					<tr class="table-info">
						<td>
							<?php echo $documento->nombre ?>
						</td>
						<td style="text-align: center">
							<input name="items[]" value="<?php echo $documento->id; ?>" type="checkbox">
						</td>
					</tr>
				<?php endforeach; ?>
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
						  placeholder="Escriba aquí su comentario ..." required></textarea>
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Me pregunto: <a href="#"></a></label> <br>
				<textarea name="pregunto" class="form-control is-valid" rows="2"
						  placeholder="Escriba aquí su comentario ..." required></textarea>
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Sugiero: <a href="#"></a></label> <br>
				<textarea name="sugiero" class="form-control is-valid" rows="2"
						  placeholder="Escriba aquí su comentario ..." required></textarea>
			</div>
			<div class="input-group">
				<button type="submit" class="btn btn-success">Guardar</button>
			</div>
		</div>
	</div>
</form>
