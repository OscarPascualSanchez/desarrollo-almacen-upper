<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE html>
<html class="no-js before-run" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title>RODRIGO EDUARDO LOPEZ REYES -
		<?php echo $web->identitas_website; ?>
	</title>
	<meta name="description" content="<?php echo $web->identitas_deskripsi; ?>" />
	<meta name="keywords" content="<?php echo $web->identitas_keyword; ?>" />
	<meta name="author" content="<?php echo $web->identitas_author; ?>" />

	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/<?php echo $web->identitas_favicon; ?>">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/<?php echo $web->identitas_favicon; ?>">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/backend/assets/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/backend/assets/css/bootstrap/bootstrap-extend.css">

	<!-- Style CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/backend/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/backend/assets/css/app.css">

	<!-- Libs CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/backend/assets/libs/animsition/animsition.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/backend/assets/libs/asscrollable/asScrollable.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/backend/assets/libs/intro-js/introjs.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/backend/assets/libs/slidepanel/slidePanel.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/backend/assets/libs/flag-icon-css/flag-icon.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/backend/assets/libs/formvalidation/formValidation.css">

	<!-- Fonts -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/backend/assets/fonts/web-icons/web-icons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/backend/assets/fonts/brand-icons/brand-icons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/backend/assets/fonts/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


	<script src="<?php echo base_url(); ?>templates/backend/assets/libs/jquery/jquery.js"></script>
	<!--[if lt IE 9]>
    <script src="../../<?php echo base_url(); ?>templates/admin/assets/libs/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

	<!--[if lt IE 10]>
    <script src="../../<?php echo base_url(); ?>templates/admin/assets/libs/media-match/media.match.min.js"></script>
    <script src="../../<?php echo base_url(); ?>templates/admin/assets/libs/respond/respond.min.js"></script>
    <![endif]-->

	<!-- Scripts -->
	<script src="<?php echo base_url(); ?>templates/backend/assets/libs/modernizr/modernizr.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/libs/breakpoints/breakpoints.js"></script>
	<script>
		Breakpoints();
	</script>

</head>

<body>
	<nav class="site-navbar navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="navbar-header" style="background-color: rgba(242, 118, 3, .95);">
			<button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided" data-toggle="menubar">
				<span class="sr-only">Toggle navigation</span>
				<span class="hamburger-bar"></span>
			</button>
			<button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
				<i class="icon wb-more-horizontal" aria-hidden="true"></i>
			</button>
			<div class="navbar-brand orange navbar-brand-center">
				<img class="navbar-brand-logo" src="<?php echo base_url(); ?>assets/<?php echo $web->identitas_favicon; ?>" title="Remark">
				<span class="navbar-brand-text">
					<?php echo $web->identitas_website; ?>
				</span>
			</div>
		</div>

		<div class="navbar-container container-fluid">
			<div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
				<ul class="nav navbar-toolbar">
					<li class="hidden-float" id="toggleMenubar">
						<a data-toggle="menubar" href="" role="button">
							<i class="icon hamburger hamburger-arrow-left">
								<span class="sr-only">Toggle menubar</span>
								<span class="hamburger-bar"></span>
							</i>
						</a>
					</li>
				</ul>
				<ul class="breadcrumb">
					<li class="active">
						<a href="<?php echo base_url(); ?>admin">Dashboard Gonzalez</a>
					</li>
					<li>
						<?php echo $breadcrumb; ?>
					</li>
				</ul>
				<ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
					<li>
						<a>
							<?php echo $admin->admin_nama ?> -
							<span style="text-transform: uppercase;">
								<?php echo $admin->admin_level_nama ?>
								<span>
						</a>
					</li>
					<li class="dropdown">
						<a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="" aria-expanded="false" data-animation="slide-bottom" role="button">
							<span class="avatar avatar-online">
								<img src="<?php echo base_url(); ?>templates/backend/assets/images/avatar/avatar.jpg" alt="...">
								<i></i>
							</span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li role="presentation">
								<a href="<?php echo base_url(); ?>pengaturan/edit_password" role="menuitem">
									<i class="icon wb-user" aria-hidden="true"></i> Editar contraseña</a>
							</li>
							<li class="divider" role="presentation"></li>
							<li role="presentation">
								<a href="<?php echo site_url(); ?>login/keluar" role="menuitem">
									<i class="icon wb-power" aria-hidden="true"></i> Cerrar sesión</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="site-menubar">
		<div class="site-menubar-body">
			<div>
				<div>
					<ul class="site-menu">
						<li class="site-menu-category">Menú Principal</li>
						<li class='site-menu-item'>
							<a href='<?php echo base_url(); ?>admin' class='animsition-link'>
								<i class='site-menu-icon fas fa-tachometer-alt'></i>
								<span class='site-menu-title'>
									Dashboard
								</span>
							</a>
						</li>

						<li class='site-menu-item has-sub'>
							<a href='javascript:void(0)' class='animsition-link'>
								<span class='site-menu-arrow'></span>
								<i class='site-menu-icon fa fa-archive'></i>
								<span class='site-menu-title'>Gestor de inventarios</span> <!--Master List-->
							</a>
							<ul class='site-menu-sub'>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/all_arrivals' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Gestión de arribos
												<!--Customer-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/inventory' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Gestor de inventarios
												<!--Customer-->
											</span>
										</a>
									</li>
								<?php } ?>
							</ul>
						</li>
						<li class='site-menu-item has-sub'>
							<a href='javascript:void(0)' class='animsition-link'>
								<span class='site-menu-arrow'></span>
								<i class='site-menu-icon fa fa-truck'></i>
								<span class='site-menu-title'>Gestión de transporte</span> <!--Master List-->
							</a>
							<ul class='site-menu-sub'>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '2') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/transport' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Medios de transporte
												<!--Supplier-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '2') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/container' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Caja / Contenedor
												<!--Supplier-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '2') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/driver' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Conductores
												<!--Supplier-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/destination' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Destino
												<!--Customer-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '2') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/origin' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Origen
												<!--Supplier-->
											</span>
										</a>
									</li>
								<?php } ?>
							</ul>
						</li>
						<?php if ($admin->admin_level_kode === '1') : ?>
							<li class='site-menu-item'>
								<a href='<?php echo base_url(); ?>website/stock/edit/1' class='animsition-link'>
									<i class='site-menu-icon fa fa-list'></i>
									<span class='site-menu-title'>
										<!--Minimum Stock-->
										Stock mínimo
									</span>
								</a>
							</li>
						<?php endif; ?>
						<li class='site-menu-item has-sub'>
							<a href='javascript:void(0)' class='animsition-link'>
								<span class='site-menu-arrow'></span>
								<i class='site-menu-icon fas fa-exchange-alt'></i>
								<span class='site-menu-title'>Operaciones Logísticas</span> <!--Transaction-->
							</a>
							<ul class='site-menu-sub'>
								<li class='site-menu-item has-sub'>
									<a href='javascript:void(0)' class='animsition-link'>
										<span class='site-menu-arrow'></span>
										<i class=" site-menu-icon fa fa-solid fa-clipboard-check"></i>
										<span class='site-menu-title'>Arribo</span> <!--Transaction-->
									</a>
									<ul class='site-menu-sub'>
										<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '2') { ?>
											<li class='site-menu-item'>
												<a href='<?php echo base_url(); ?>website/arrival/view' class='animsition-link'>
													<i class='site-menu-icon fa fa-angle-right'></i>
													<span class='site-menu-title'>
														<!--Incoming Goods-->
														Agregar
													</span>
												</a>
											</li>
										<?php } ?>
										
										<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '2') { ?>
											<li class='site-menu-item'>
												<a href='<?php echo base_url(); ?>website/arrival/view2' class='animsition-link'>
													<i class='site-menu-icon fa fa-angle-right'></i>
													<span class='site-menu-title'>
														<!--Incoming Goods-->
														Modificar
													</span>
												</a>
											</li>
										<?php } ?>

									</ul>
								</li>

								
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/boarding' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												<!--Outgoing Goods-->
												Embarque
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/penyesuaian' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Ajustamiento
											</span>
										</a>
									</li>
								<?php } ?>
							</ul>
						</li>

						<?php if ($admin->admin_level_kode === '1') { ?>
							<li class='site-menu-item has-sub'>
								<a href='javascript:void(0)' class='animsition-link'>
									<span class='site-menu-arrow'></span>
									<i class='site-menu-icon fa fa fa-bar-chart'></i>
									<span class='site-menu-title'>Reportes</span>
								</a>
								<ul class='site-menu-sub'>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/laporanmasuk' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												<!--Incoming Goods-->
												Mercancía entrante
											</span>
										</a>
									</li>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/laporankeluar' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												<!--Outgoing Goods-->
												Mercancías salientes
											</span>
										</a>
									</li>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/laporanpenyesuaian' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Ajustamiento
											</span>
										</a>
									</li>
								</ul>
							</li>
						<?php } ?>
						<li class='site-menu-item has-sub'>
							<a href='javascript:void(0)' class='animsition-link'>
								<span class='site-menu-arrow'></span>
								<i class='site-menu-icon fa fa-users'></i>
								<span class='site-menu-title'>Gestión de usuarios</span> <!--Master List-->
							</a>
							<ul class='site-menu-sub'>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '2') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/supplier' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Proveedores
												<!--Supplier-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/customer' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Clientes
												<!--Customer-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/consignees' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Consignatarios
												<!--Customer-->
											</span>
										</a>
									</li>
								<?php } ?>
								<li class='site-menu-item'>
									<a href='<?php echo base_url(); ?>pengaturan/pengguna' class='animsition-link'>
										<i class='site-menu-icon fa fa-angle-right'></i>
										<span class='site-menu-title'>
											Usuarios del Sistema
											<!--System Users-->
										</span>
									</a>
								</li>
							</ul>
						</li>
						<li class='site-menu-item has-sub'>
							<a href='javascript:void(0)' class='animsition-link'>
								<span class='site-menu-arrow'></span>
								<i class='site-menu-icon fa fa-solid fa-gears'></i>

								<span class='site-menu-title'>Configuración de Logística</span> <!--Master List-->
							</a>
							<ul class='site-menu-sub'>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '2') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/products' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Productos
												<!--Supplier-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '2') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/category' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Categoría Productos
												<!--Supplier-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/presentation' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Presentación Productos
												<!--Customer-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/maneuver' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Tipo de Maniobra
												<!--Customer-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/operation' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Tipo de Operación
												<!--Customer-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/event' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Estatus de Evento
												<!--Customer-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/platform' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Tipo de Tarima
												<!--Customer-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/measurement' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Unidad de Medida
												<!--Customer-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/position' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Ubicación
												<!--Customer-->
											</span>
										</a>
									</li>
								<?php } ?>
								<?php if ($admin->admin_level_kode === '1' || $admin->admin_level_kode === '3') { ?>
									<li class='site-menu-item'>
										<a href='<?php echo base_url(); ?>website/type_movement' class='animsition-link'>
											<i class='site-menu-icon fa fa-angle-right'></i>
											<span class='site-menu-title'>
												Tipo de movimiento
												<!--Customer-->
											</span>
										</a>
									</li>
								<?php } ?>
							</ul>
						</li>
						<?php if ($admin->admin_level_kode === '1') : ?>
							<li class='site-menu-item'>
								<a href='<?php echo base_url(); ?>website/identitas/edit/1' class='animsition-link'>
									<i class='site-menu-icon fa  fa-info'></i>
									<span class='site-menu-title'>
										<!--System Information-->
										Información del sistema
									</span>
								</a>
							</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="site-menubar-footer">
			<a href="<?php echo site_url(); ?>admin" class="fold-show" data-placement="top" data-toggle="tooltip" data-original-title="Dashboard">
				<span class="icon wb-home" aria-hidden="true"></span>
			</a>
			<a href="<?php echo site_url(); ?>pengaturan/edit_password" data-placement="top" data-toggle="tooltip" data-original-title="Editar contraseña">
				<span class="icon wb-lock" aria-hidden="true"></span>
			</a>
			<a href="<?php echo site_url(); ?>login/keluar" data-placement="top" data-toggle="tooltip" data-original-title="Cerrar sesión">
				<span class="icon wb-power" aria-hidden="true"></span>
			</a>
		</div>
	</div>

	<!-- Content -->
	<?php $this->load->view($content); ?>
	<!-- End Content -->

	<footer class="site-footer">
		<span class="site-footer-legal">© <?php echo date('Y'); ?>
			<?php echo $web->identitas_website; ?>
		</span>
		<div class="site-footer-right">
			<?php echo $web->identitas_author; ?>
		</div>
	</footer>

	<script>
		$('#modal-konfirmasi').on('show.bs.modal', function(event) {
			var div = $(event.relatedTarget)
			var id = div.data('id')
			var modal = $(this)
			modal.find('#hapus-pengguna').attr("href", "<?php echo site_url(); ?>pengaturan/pengguna/hapus/" + id);
			modal.find('#hapus-supplier').attr("href", "<?php echo site_url(); ?>website/supplier/hapus/" + id);
			modal.find('#hapus-customer').attr("href", "<?php echo site_url(); ?>website/customer/hapus/" + id);
			modal.find('#hapus-barang').attr("href", "<?php echo site_url(); ?>website/barang/hapus/" + id);
			modal.find('#hapus-transport').attr("href", "<?php echo site_url(); ?>website/transport/hapus/" + id);
			modal.find('#hapus-driver').attr("href", "<?php echo site_url(); ?>website/driver/hapus/" + id);
			modal.find('#hapus-destination').attr("href", "<?php echo site_url(); ?>website/destination/hapus/" + id);
			modal.find('#hapus-consignees').attr("href", "<?php echo site_url(); ?>website/consignees/hapus/" + id);
			modal.find('#hapus-category').attr("href", "<?php echo site_url(); ?>website/category/hapus/" + id);
			modal.find('#hapus-presentation').attr("href", "<?php echo site_url(); ?>website/presentation/hapus/" + id);
			modal.find('#hapus-maneuver').attr("href", "<?php echo site_url(); ?>website/maneuver/hapus/" + id);
			modal.find('#hapus-operation').attr("href", "<?php echo site_url(); ?>website/operation/hapus/" + id);
			modal.find('#hapus-event').attr("href", "<?php echo site_url(); ?>website/event/hapus/" + id);
			modal.find('#hapus-platform').attr("href", "<?php echo site_url(); ?>website/platform/hapus/" + id);
			modal.find('#hapus-measurement').attr("href", "<?php echo site_url(); ?>website/measurement/hapus/" + id);
			modal.find('#hapus-products').attr("href", "<?php echo site_url(); ?>website/products/hapus/" + id);
			modal.find('#hapus-container').attr("href", "<?php echo site_url(); ?>website/container/hapus/" + id);
			modal.find('#hapus-origin').attr("href", "<?php echo site_url(); ?>website/origin/hapus/" + id);
			modal.find('#hapus-arrival').attr("href", "<?php echo site_url(); ?>website/arrival/hapus/" + id);
			modal.find('#hapus-position').attr("href", "<?php echo site_url(); ?>website/position/hapus/" + id);
			modal.find('#hapus-type_movement').attr("href", "<?php echo site_url(); ?>website/type_movement/hapus/" + id);
			modal.find('#hapus-masuk').attr("href", "<?php echo site_url(); ?>website/masuk/hapus/" + id);
			modal.find('#hapus-keluar').attr("href", "<?php echo site_url(); ?>website/keluar/hapus/" + id);
			modal.find('#hapus-penyesuaian').attr("href", "<?php echo site_url(); ?>website/penyesuaian/hapus/" + id);

		});
	</script>

	<script src="<?php echo base_url(); ?>templates/backend/assets/libs/bootstrap/bootstrap.js"></script>

	<script src="<?php echo base_url(); ?>templates/backend/assets/libs/animsition/jquery.animsition.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/libs/asscroll/jquery-asScroll.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/libs/mousewheel/jquery.mousewheel.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/libs/asscrollable/jquery.asScrollable.all.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/libs/ashoverscroll/jquery-asHoverScroll.js"></script>
	<!-- Plugins -->
	<script src="<?php echo base_url(); ?>templates/backend/assets/libs/intro-js/intro.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/libs/screenfull/screenfull.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/libs/slidepanel/jquery-slidePanel.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/libs/jquery-placeholder/jquery.placeholder.js"></script>


	<script src="<?php echo base_url(); ?>templates/backend/assets/libs/formvalidation/formValidation.min.js"></script>

	<script src="<?php echo base_url(); ?>templates/backend/assets/libs/formvalidation/framework/bootstrap.min.js"></script>

	<!-- Scripts -->
	<script src="<?php echo base_url(); ?>templates/backend/assets/js/core/core.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/js/site/site.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/js/sections/menu.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/js/sections/menubar.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/js/sections/sidebar.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/js/configs/config-colors.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/js/configs/config-tour.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/js/components/asscrollable.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/js/components/animsition.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/js/components/slidepanel.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/js/components/jquery-placeholder.js"></script>
	<script src="<?php echo base_url(); ?>templates/backend/assets/js/components/material.js"></script>
	<script>
		(function(document, window, $) {
			'use strict';
			var Site = window.Site;
			$(document).ready(function($) {
				Site.run();
			});

			(function() {
				$('#exampleStandardForm').formValidation({
					framework: "bootstrap",
					button: {
						selector: '#validateButton2',
						disabled: 'disabled'
					},
					icon: null,
				});
			})();

			(function() {
				$('.summary-errors').hide()
			})();
		})(document, window, jQuery);
	</script>
</body>

</html>