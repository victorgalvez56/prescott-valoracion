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
						<input type="text" id="id_profesor" value="<?php echo $id_profesor; ?>">

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Registro de visita</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<table id="mostrar_visitas_bimestre1" class="table table-bordered text-center">
										<thead>
										<tr>
										</tr>
										</thead>
										<tbody>

										</tbody>
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



