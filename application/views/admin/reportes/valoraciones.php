<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Reportes
			<small>Valoraciones</small>
		</h1>
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<div class="box box-solid">
			<div class="box-body">
				<div class="row">
					<form action="<?php echo current_url();?>" method="POST" class="form-horizontal">
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="date" class="form-control" name="fechainicio" value="<?php echo !empty($fechainicio) ? $fechainicio:'';?>">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="date" class="form-control" name="fechafin" value="<?php  echo !empty($fechafin) ? $fechafin:'';?>">
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<table id="example1" class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>Nombre</th>
								<th>Valoracion 1</th>
								<th>Valoracion 2</th>
								<th>Promedio</th>
								<th>Opciones</th>
							</tr>
							</thead>
							<tbody>
							<?php if(!empty($valoraciones)):?>
								<?php foreach($valoraciones as $valoracion):?>
									<tr>
										<td><?php echo $valoracion->nombres." ".$valoracion->apellidos;?></td>
<!---->
<!--										<td>-->
<!--											<div class="btn-group">-->
<!--												<button type="button" class="btn btn-info btn-view-venta" value="--><?php //echo $venta->id_vent;?><!--" data-toggle="modal" data-target="#modal-default"><span class="fa fa-search"></span></button>-->
<!--											</div>-->
<!--										</td>-->
									</tr>
								<?php endforeach;?>
							<?php endif;?>
							</tbody>
						</table>
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

<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Informacion de la Venta</h4>
			</div>
			<div class="modal-body">

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
