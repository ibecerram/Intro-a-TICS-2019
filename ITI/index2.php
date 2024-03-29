<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Web by Isaac Becerra</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/charts/echarts/pies_donuts.js"></script>
	<!-- /theme JS files -->

	<script src="global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="global_assets/js/demo_pages/dashboard.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>



</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index2.php" class="d-inline-block">
				<img src="assets/img/Logo.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Actualizaciones</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">8</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Actualizaciones</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Cambio de logo principal
										<div class="text-muted font-size-sm">25 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Implementación de sweet alerts
										<div class="text-muted font-size-sm">5 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										Omar Jasso modificó el grupo ITI 1 - 1
										<div class="text-muted font-size-sm">Nov 29, 13:45</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										Actualización transporte (sistema abierto)
										<div class="text-muted font-size-sm">Nov 28, 07:24</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Implementación de gráficos
										<div class="text-muted font-size-sm">Nov 25, 20:00</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">Todas las actualizaciones</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Conectado</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Usuarios</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Usuarios conectados</span>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="assets/img/userIsaac.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Isaac Becerra</a>
										<span class="d-block text-muted font-size-sm">Administrador</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/img/logoJasso.png" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Omar Jasso</a>
										<span class="d-block text-muted font-size-sm">Diseñador</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/img/logoMario.png" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Mario Rodríguez</a>
										<span class="d-block text-muted font-size-sm">Administrador</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Mensajes</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Mensajes</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="assets/img/logoUPV2.png" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="http://www.upvictoria.edu.mx/">
												<span class="font-weight-semibold">Servicios escolares</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">Ya están los cursos disponibles para nuevo ingreso...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="assets/img/logoTranspais.png" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="https://www.transpaisturismo.com.mx/">
												<span class="font-weight-semibold">Transpais</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">Sistema actualizado para venta de boletos...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/img/logoUPV.png" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="http://www.upvictoria.edu.mx/">
												<span class="font-weight-semibold">Dirección General</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">Necesitamos una modificación en el sistema...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="assets/img/logoJasso.png" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="https://academia.ojasso.me">
												<span class="font-weight-semibold">Omar Jasso</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">Necesito el repositorio en Git actualizado...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Cargar mensajes"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="assets/img/userIsaac.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Isaac</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<div class="dropdown-divider"></div>
						<a href="http://ibecerram.systems/" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="assets/img/userIsaac.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Isaac Becerra</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Cd. Victoria, Tam, MX.
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Principal</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index2.php" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-users"></i> <span>Alumnos</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								
								<li class="nav-item"><a href="formAgregarAlumnos2.php" class="nav-link">Agregar alumnos</a></li>
								<li class="nav-item"><a href="formEditarAlumnos2.php" class="nav-link">Editar alumnos</a></li>
								<li class="nav-item"><a href="datatable_mostrarAlumnos2.php" class="nav-link">Mostrar alumnos</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-user-tie"></i> <span>Profesores</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="formAgregarProfesores2.php" class="nav-link">Agregar profesores</a></li>
								<li class="nav-item"><a href="formEditarProfesores2.php" class="nav-link">Editar profesores</a></li>
								<li class="nav-item"><a href="datatable_mostrarProfesores2.php" class="nav-link">Mostrar profesores</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-books"></i> <span>Materias</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								
								<li class="nav-item"><a href="formAgregarMateria2.php" class="nav-link">Agregar materias</a></li>
								<li class="nav-item"><a href="formEditarMaterias2.php" class="nav-link">Editar materias</a></li>
								<li class="nav-item"><a href="datatable_mostrarMaterias2.php" class="nav-link">Mostrar materias</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-collaboration"></i> <span>Grupos</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								
								<li class="nav-item"><a href="formAgregarGrupos2.php" class="nav-link">Agregar grupos</a></li>
								<li class="nav-item"><a href="formEditarGrupos2.php" class="nav-link">Editar grupos</a></li>
								<li class="nav-item"><a href="datatable_mostrarGrupos2.php" class="nav-link">Mostrar grupos</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-bus"></i> <span>Tranporte</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								
								<li class="nav-item"><a href="formAgregarPago2.php" class="nav-link">Reservar transporte (pagar)</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-reading"></i> <span>Tutorías</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								
								<li class="nav-item"><a href="formAgregarTutorias2.php" class="nav-link">Agregar tutorías</a></li>
								<li class="nav-item"><a href="formEditarTutorias2.php" class="nav-link">Editar tutorías</a></li>
								<li class="nav-item"><a href="datatable_mostrarTutorias2.php" class="nav-link">Mostrar tutorías</a></li>
							</ul>
						</li>

						<!-- /main -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="#" class="breadcrumb-item">Dashboard</a>
							<span class="breadcrumb-item active">Dashboard</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="http://ibecerram.systems/imfreelancer/mylightblog/#contact-block" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Contacto
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
				
				<!-- Quick stats boxes -->
						<div class="row">
							<div class="col-lg-4">

								<!-- Members online -->
								<div class="card bg-teal-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">3,450</h3>
											<span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+53,6%</span>
					                	</div>
					                	
					                	<div>
											Alumnos registrados
											<div class="font-size-sm opacity-75">+123 el día de hoy</div>
										</div>
									</div>

									<div class="container-fluid">
										<div id="members-online"></div>
									</div>
								</div>
								<!-- /members online -->

							</div>

							<div class="col-lg-4">

								<!-- Current server load -->
								<div class="card bg-pink-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">321</h3>
											<div class="list-icons ml-auto">
						                		<div class="list-icons-item dropdown">
						                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-sync"></i> Actualizar</a>
														<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Estadísticas (Ver)</a>
													</div>
						                		</div>
					                		</div>
					                	</div>
					                	
					                	<div>
											Maestros registrados
											<div class="font-size-sm opacity-75">+3 al día</div>
										</div>
									</div>

									<div id="server-load"></div>
								</div>
								<!-- /current server load -->

							</div>



							<div class="col-lg-4">

								<!-- Today's revenue -->
								<div class="card bg-blue-400">
									<div class="card-body">
										<div class="d-flex">
											<h3 class="font-weight-semibold mb-0">3,526</h3>
											<div class="list-icons ml-auto">
						                		<a class="list-icons-item" data-action="reload"></a>
						                	</div>
					                	</div>
					                	
					                	<div>
											Visitas
											<div class="font-size-sm opacity-75">+87 el día de hoy</div>
										</div>
									</div>

									<div id="today-revenue"></div>
								</div>
								<!-- /today's revenue -->

							</div>
						</div>
						<!-- /quick stats boxes -->

				<!-- Pie and donut -->
				<div class="row">
					<div class="col-xl-6">

						<!-- Basic pie -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Carreras</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart has-fixed-height" id="pie_basic"></div>
								</div>
							</div>
						</div>
						<!-- /basic pie -->

					</div>

					<div class="col-xl-6">

						<!-- Basic donut -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Total de alumnos</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart has-fixed-height" id="pie_donut"></div>
								</div>
							</div>
						</div>
						<!-- /basic donut -->

					</div>
				</div>	
				<!-- /pie and donut -->


				<!-- Nested and infographic -->
				<div class="row">

					<div class="col-xl-6">

						<!-- Infographic style -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Maestros</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart has-fixed-height" id="pie_infographic"></div>
								</div>
							</div>
						</div>
						<!-- /infographic style -->

					</div>

					<div class="col-xl-6">
						
						<!-- Multi levels and timeline -->
						<div class="row">
		
							<div class="col-xl-12">
		
								<!-- Pie chart timeline -->
								<div class="card">
									<div class="card-header header-elements-inline">
										<h5 class="card-title">Egresados por generación</h5>
										<div class="header-elements">
											<div class="list-icons">
						                		<a class="list-icons-item" data-action="collapse"></a>
						                		<a class="list-icons-item" data-action="reload"></a>
						                		<a class="list-icons-item" data-action="remove"></a>
						                	</div>
			   		             	</div>
									</div>
		
									<div class="card-body">
										<div class="chart-container">
											<div class="chart has-fixed-height" id="pie_timeline"></div>
										</div>
									</div>
								</div>
								<!-- /pie chart timeline -->
		
							</div>
						</div>
				<!-- /multi levels and timeline -->
					</div>
				</div>	
				<!-- /nested and infographic -->
					

					<div class="row">
						<div class="col-xl-6">
							
						
							<!-- Daily financials -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Reporte diario</h5>
								<div class="header-elements">
									<div class="form-check form-check-inline form-check-right form-check-switchery form-check-switchery-sm">
										<label class="form-check-label">
											<input type="checkbox" class="form-input-switchery" id="realtime" checked data-fouc>
											Actividades en tiempo real
										</label>
									</div>
									<span class="badge bg-danger-400 badge-pill">+86</span>
								</div>
							</div>

							<div class="card-body">
								<div class="chart mb-3" id="bullets"></div>

								<ul class="media-list">
									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-pink text-pink rounded-round border-2 btn-icon"><i class="icon-statistics"></i></a>
										</div>
										
										<div class="media-body">
											Eliminado registro: "Jasso" de profesores
											<div class="text-muted">2 hours ago</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-checkmark3"></i></a>
										</div>
										
										<div class="media-body">
											Se agregó "Química" en BD materias
											<div class="text-muted">Oct 14, 10:36</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-alignment-unalign"></i></a>
										</div>
										
										<div class="media-body">
											UserUPV agregó 10 maestros
											<div class="text-muted">Oct 13 08:30</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon"><i class="icon-spinner11"></i></a>
										</div>

										<div class="media-body">
											User ha realizado cambios en BD Alumnos
											<div class="text-muted">Oct. 13 10:24</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon"><i class="icon-redo2"></i></a>
										</div>
										
										<div class="media-body">
											User eliminó BD Alumnos
											<div class="text-muted">Oct 13, 09:46</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon"><i class="icon-redo2"></i></a>
										</div>
										
										<div class="media-body">
											User realizó cambios en BD Grupos
											<div class="text-muted">Oct 12, 06:46</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- /daily financials -->


						</div>

						<div class="col-xl-6">
							
						
							<!-- Daily sales -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Reporte diario tranporte</h5>
								<div class="header-elements">
									<span class="font-weight-bold text-danger-600 ml-2">$4,378</span>
									<div class="list-icons ml-3">
				                		<div class="list-icons-item dropdown">
				                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
												<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
												<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
											</div>
				                		</div>
				                	</div>
								</div>
							</div>

							<div class="card-body">
								<div class="chart" id="sales-heatmap"></div>
							</div>

							<div class="table-responsive">
								<table class="table text-nowrap">
									<thead>
										<tr>
											<th class="w-100">Transpais (Movimientos)</th>
											<th>Hora</th>
											<th>Precio</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-primary-400 rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Sofía Hernández</a>
														<div class="text-muted font-size-sm"><i class="icon-checkmark3 font-size-sm mr-1"></i> Pagó ticket</div>
													</div>
												</div>
											</td>
											<td>
												<span class="text-muted font-size-sm">06:28 pm</span>
											</td>
											<td>
												<h6 class="font-weight-semibold mb-0">$125.00</h6>
											</td>
										</tr>

										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-danger-400 rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Aldo López</a>
														<div class="text-muted font-size-sm"><i class="icon-spinner11 font-size-sm mr-1"></i> Renovó transporte</div>
													</div>
												</div>
											</td>
											<td>
												<span class="text-muted font-size-sm">04:52 pm</span>
											</td>
											<td>
												<h6 class="font-weight-semibold mb-0">$515.00</h6>
											</td>
										</tr>

										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-indigo-400 rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Diana González</a>
														<div class="text-muted font-size-sm"><i class="icon-lifebuoy font-size-sm mr-1"></i> Compra redondo $515.00</div>
													</div>
												</div>
											</td>
											<td>
												<span class="text-muted font-size-sm">01:26 pm</span>
											</td>
											<td>
												<h6 class="font-weight-semibold mb-0">$545.00</h6>
											</td>
										</tr>

										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-success-400 rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Omar Mendoza</a>
														<div class="text-muted font-size-sm"><i class="icon-lifebuoy font-size-sm mr-1"></i> Compra redondo $515.00</div>
													</div>
												</div>
											</td>
											<td>
												<span class="text-muted font-size-sm">11:46 am</span>
											</td>
											<td>
												<h6 class="font-weight-semibold mb-0">$550.00</h6>
											</td>
										</tr>

										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="mr-3">
														<a href="#" class="btn bg-danger-400 rounded-round btn-icon btn-sm">
															<span class="letter-icon"></span>
														</a>
													</div>
													<div>
														<a href="#" class="text-default font-weight-semibold letter-icon-title">Alondra Badillo</a>
														<div class="text-muted font-size-sm"><i class="icon-spinner11 font-size-sm mr-2"></i> Renovación transporte</div>
													</div>
												</div>
											</td>
											<td>
												<span class="text-muted font-size-sm">10:29 am</span>
											</td>
											<td>
												<h6 class="font-weight-semibold mb-0">$250.00</h6>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- /daily sales -->
						</div>
					</div>


						<!-- Progress counters -->
						<div class="row">
							<div class="col-xl-6">

								<!-- Donut multiples -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Aplicaciones usadas para asesorías</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="chart-container">
							<div class="chart has-fixed-height" id="pie_multiples"></div>
						</div>
					</div>
				</div>
				<!-- /donut multiples -->

							</div>

							<div class="col-xl-6">

							<!-- Traffic sources -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Tutorías en tiempo real...</h5>
								<div class="header-elements">
									<div class="form-check form-check-right form-check-switchery form-check-switchery-sm">
										<label class="form-check-label">
											Actualmente
											<input type="checkbox" class="form-input-switchery" checked data-fouc>
										</label>
									</div>
								</div>
							</div>

							<div class="card-body py-0">
								<div class="row">
									<div class="col-sm-4">
										<div class="d-flex align-items-center justify-content-center mb-2">
											<a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
												<i class="icon-plus3"></i>
											</a>
											<div>
												<div class="font-weight-semibold">Tutorías en total</div>
												<span class="text-muted">1,458 tutorías</span>
												<p class="text-muted">+58.5%</p>
											</div>
										</div>
										<div class="w-75 mx-auto mb-3" id="new-visitors"></div>
									</div>

									<div class="col-sm-4">
										<div class="d-flex align-items-center justify-content-center mb-2">
											<a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon mr-3">
												<i class="icon-watch2"></i>
											</a>
											<div>
												<div class="font-weight-semibold">Agregadas hoy</div>
												<span class="text-muted">14 agregadas hoy</span>
												<p class="text-muted">+37.9%</p>
											</div>
										</div>
										<div class="w-75 mx-auto mb-3" id="new-sessions"></div>
									</div>

									<div class="col-sm-4">
										<div class="d-flex align-items-center justify-content-center mb-2">
											<a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon mr-3">
												<i class="icon-people"></i>
											</a>
											<div>
												<div class="font-weight-semibold">Alumnos ayudados</div>
												<span class="text-muted">

													<span class="badge badge-mark border-success mr-2">
													</span> 5,684 temas resueltos
													<p class="text-muted">+35.6%</p>
												</span>
											</div>
										</div>
										<div class="w-75 mx-auto mb-3" id="total-online"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- /traffic sources -->

							</div>
						</div>

		

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						Derechos reservados &copy; 2019.  <a href="http://ibecerram.systems/sistema/ITI/">Sistema UPV</a> by <a href="http://ibecerram.systems/" target="_blank">IB Systems</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="http://ibecerram.systems/imfreelancer/mylightblog/#contact-block" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Ayuda</a></li>
						<li class="nav-item"><a href="http://ibecerram.systems/imfreelancer/mylightblog/?page_id=275" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-embed2 mr-2"></i> Información del programador</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
