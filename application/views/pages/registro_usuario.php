<!-- banner Page
    ==========================================-->
<div id="page-banner" style="background-image: url(assets/img/photo-typo.jpg);">
	<div class="content  wow fdeInUp">
		<div class="container ">
			<h1>Typography </h1>
		</div>
	</div>
</div>

<!--page body-->

<div id="page-body">
	<div class="container">
		<div class="row  wow fdeInUp">
			<div class="col-md-9 col-sm-7 col-xs-12 page-block ">
				<h1>Registro de Usuarios</h1>
				<form action="">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_nombre">Nombre completo</label>
								<input type="text" class="form-control" id="txt_nombre" placeholder="Nombre">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_apellido">Apellidos</label>
								<input type="text" class="form-control" id="txt_apellido" placeholder="Apellido">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_nombre">Documento de identidad</label>
								<input type="text" class="form-control" id="txt_nombre" placeholder="Nombre">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_apellido">Teléfono</label>
								<input type="text" class="form-control" id="txt_apellido" placeholder="Apellido">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
								<label for="txt_nombre">Departamento</label>
								<input type="text" class="form-control" id="txt_nombre" placeholder="Nombre">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="txt_apellido">Provincia</label>
								<input type="text" class="form-control" id="txt_apellido" placeholder="Apellido">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="txt_apellido">Distrito</label>
								<input type="text" class="form-control" id="txt_apellido" placeholder="Apellido">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_apellido">Dirección</label>
								<input type="text" class="form-control" id="txt_apellido" placeholder="Apellido">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_apellido">Base rondera</label>
								<input type="text" class="form-control" id="txt_apellido" placeholder="Apellido">
							</div>
						</div>

					</div>
					<div class="row">
						<div class="checkbox checkbox-success">
							<input name="checkCargo" id="checkCargo" type="checkbox"
								onchange="javascript:mostrarCargos()">
							<label> ¿Tiene Cargo Especial?</label>
						</div>
						<div class="col-lg-6" id="cargoRepresentante" style="display: block;">
							<div class="form-group">
								<label for="txt_cargo">Cargo</label>
								<input type="text" class="form-control" id="txt_cargo" placeholder="Cargo">
							</div>
						</div>
						<div class="col-lg-6" id="cargoNormal" style="display: none;">
							<div class="form-group">
								<label for="txt_cargo">Cargo</label>
								<div class="dropdown">
									<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1"
										data-toggle="dropdown" aria- haspopup="true"
										aria-expanded="true">Cargo&nbsp;<span
											class="glyphicon glyphicon-chevron-down"></span></button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li><a href="#">Action 1</a></li>
										<li><a href="#">Action 2</a></li>
										<li><a href="#">Action 3</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="checkbox checkbox-success">
							<input type="checkbox" value="yes" checked>
							<label> ¿Agregar fotografía?</label>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_apellido">Fotografía</label>
								<input type="file" class="form-control" id="txt_apellido" placeholder="Apellido">
							</div>
						</div>

					</div>
					<div class="row">
						<div class="checkbox checkbox-success">
							<input type="checkbox" value="yes" checked>
							<label> ¿Agregar firma? </label>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="txt_apellido">Firma</label>
								<input type="file" class="form-control" id="txt_apellido" placeholder="Apellido">
							</div>
						</div>

					</div>
				</form>
			</div>
			<aside class="col-md-3 col-sm-5" style="padding:0;">

				<section class="widget widget_categories  wow fdeInUp">
					<h2 class="widget-title">Actividades</h2>
					<ul>
						<li><a href="registrar_usuario"> Registrar Usuarios </a> </li>
						<li><a href="listado_usuarios"> Ver usuarios registrados</a> </li>
						<li><a href="#"> Reporte de usuarios </a> </li>
						<li><a href="perfil"> Mi perfil</a> </li>
						<li><a href="logout"> Cerrar sesión</a> </li>
					</ul>
				</section>

			</aside>
		</div>
	</div>
</div>

<div id="page-body">
	<div class="container">
		<div class="row wow fdeInUp">
			<!--blog posts container-->

			<!--blog posts container-->
			<div class="clearfix"></div>
		</div>
	</div>

</div>
