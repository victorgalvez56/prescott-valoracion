<!-- Content Wrapper. Contains page content -->
<!-- Default box -->
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

				<div class="row">
					<div class="col-md-3 col-sm-6 col-12">
						<div class="info-box bg-gradient-info">
							<span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Promedio Valoraciones (SOFT)  </span>
								<span class="info-box-number"><?php echo $promediovaloraciones; ?></span>
								<div class="progress">
									<div class="progress-bar" style="width: 40%"></div>
								</div>
								40% Promedio Final
								</span>

							</div>
							<!-- /.info-box-content -->
						</div>
						<div class="info-box bg-gradient-success">
							<span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
							<div class="info-box-content">
								<span class="info-box-text">Valoración 1</span>
								<span class="info-box-number"><?php echo $total_valoracion_1; ?></span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<div class="info-box bg-gradient-success">
							<span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
							<div class="info-box-content">
								<span class="info-box-text">Valoración 2</span>
								<span class="info-box-number"><?php echo $total_valoracion_2; ?></span>

							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->

					<!-- /.col -->
					<div class="col-md-3 col-sm-6 col-12">
						<div class="info-box bg-gradient-info">
							<span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Valoración Objetivos (HARD)</span>
								<span class="info-box-number"><?php echo $total_valoracion_o; ?></span>

								<div class="progress">
									<div class="progress-bar" style="width: 70%"></div>
								</div>
								60% Promedio Final
								</span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-md-3 col-sm-6 col-12">
						<div class="info-box bg-gradient-primary">
							<span class="info-box-icon"><i class="fas fa-check"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Promedio Final</span>
								<span class="info-box-number"><?php echo $promedio_final; ?></span>

								<div class="progress">
									<div class="progress-bar" style="width: 100%"></div>
								</div>
								100% Promedio Final

							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
				</div>
			</div>
		</div>
	</div>
	<!-- /.box-body -->
</div>

<script>

</script>
