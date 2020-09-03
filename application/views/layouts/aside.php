<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">

		<img src="<?php echo base_url(); ?>assets/img/logoprescottblanco.jpg" alt="AdminLTE Logo"
			 class="brand-image img-circle elevation-3" style="opacity: .8">

		<span class="brand-text font-weight-light">Prescott</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<!--
			<div class="image">
			  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			 -->
			<div class="info">
				<a href="#"
				   class="d-block"><?php echo $this->session->userdata("nombres") . " " . $this->session->userdata("apellidos") ?> </a>
				<a href="#" class="d-block"><?php echo $this->session->userdata("nombreRol") ?> </a>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<?php if ($this->session->userdata("gerencia") == 'No docentes') { ?>
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
					data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
						 with font-awesome or any other icon font library -->
					<li class="nav-item has-treeview menu-open">
						<a href="<?php echo base_url(); ?>" class="nav-link active">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>
								Dashboard
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url(); ?>valoracion/mi_valoracion_adm/" class="nav-link">
							<i class="nav-icon fas fa-th"></i>
							<p>
								Mi Valoración
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url(); ?>valoracion/valoracion_adm/" class="nav-link">
							<i class="nav-icon fas fa-th"></i>
							<p>
								Registro Valoración
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url(); ?>valoracion/valoracion_adm/show" class="nav-link">
							<i class="nav-icon fas fa-th"></i>
							<p>
								Valoraciones
							</p>
						</a>
					</li>
					<?php if ($this->session->userdata("nombreRol") == "Administrador sistema") { ?>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Mantenimiento
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>mantenimiento/gerencias/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Gerencias</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>mantenimiento/areas/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Áreas</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>mantenimiento/competencias/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Competencias</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>mantenimiento/indicadores/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Indicadores</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>
									Administrador
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="<?php echo base_url(); ?>administrador/usuarios/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Usuarios</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>administrador/parentesco/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Parentesco</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>administrador/permisos/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Permisos</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>administrador/periodos/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Periodos</p>
									</a>
								</li>
							</ul>
						</li>
					<?php } ?>


					<li class="nav-item">
						<a href="<?php echo base_url(); ?>administrador/mapa_covid/" class="nav-link">
							<i class="far fa-map nav-icon"></i>
							<p>Mapa Covid</p>
						</a>
					</li>
				</ul>
			</nav>
			<?php
		} else {
			?>
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
					data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
						 with font-awesome or any other icon font library -->
					<li class="nav-item has-treeview menu-open">
						<a href="<?php echo base_url(); ?>" class="nav-link active">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>
								Dashboard
								<i class="right fas fa-angle-left"></i>
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url(); ?>valoracion/mi_valoracion_docentes/" class="nav-link">
							<i class="nav-icon fas fa-th"></i>
							<p>
								Mi Valoración
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url(); ?>valoracion/valoracion_docentes/" class="nav-link">
							<i class="nav-icon fas fa-th"></i>
							<p>
								Registro Valoración
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url(); ?>valoracion/valoracion_docentes	/show" class="nav-link">
							<i class="nav-icon fas fa-th"></i>
							<p>
								Valoraciones
							</p>
						</a>
					</li>
					<?php if ($this->session->userdata("nombreRol") == "Administrador sistema") { ?>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Mantenimiento
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>mantenimiento/gerencias/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Gerencias</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>mantenimiento/areas/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Áreas</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>mantenimiento/competencias/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Competencias</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>mantenimiento/indicadores/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Indicadores</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>
									Administrador
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">

								<li class="nav-item">
									<a href="<?php echo base_url(); ?>administrador/usuarios/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Usuarios</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>administrador/parentesco/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Parentesco</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>administrador/permisos/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Permisos</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url(); ?>administrador/periodos/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Periodos</p>
									</a>
								</li>
							</ul>
						</li>
					<?php } ?>


					<li class="nav-item">
						<a href="<?php echo base_url(); ?>administrador/mapa_covid/" class="nav-link">
							<i class="far fa-map nav-icon"></i>
							<p>Mapa Covid</p>
						</a>
					</li>
				</ul>
			</nav>
			<?php
		}
		?>

	</div>
	<!-- /.sidebar -->
</aside>
