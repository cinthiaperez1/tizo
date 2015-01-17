<?php
/*
tizo
[USER FORM]

*/

$page = 'User form'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>


		<!-- START #site-header: logo, menu, submenu -->
		<header id="site-header">



				<!-- START content-header -->

				<div id="content-header" class="row project-header">


					<!-- ----------------------------------------------------------------
					En #content-header va el encabezado del contenido,
					o sea, el bloque con fondo gris. Cambiar por contenido apropiado
					---------------------------------------------------------------- -->

					<!-- Cambiar esta parte siguiente por la que va en cada caso -->

					<div class="small-12 columns">
						<h2 class="form-name">Crear perfil usuario </h2>
					</div>

					<!-- ----------------------------------------------------------------
					Fin cambios
					---------------------------------------------------------------- -->


				</div>
			<!-- END content-header -->


		</header>
		<!-- END #site-header -->


		<!-- START site-content -->
		<!-- Dentro de #site-content va el contenido principal -->

		<div id="site-content" class="project-content">


			<!-- ----------------------------------------------------------------
			Cambiar esta parte que viene de acuerdo a cada caso.
			Por ejemplo: cambiar id #project-main a #user-profile o a #form-login,
			luego cambiar contenido por el apropiado
			---------------------------------------------------------------- -->

			<!-- START form-main -->
			<div id="form-main" class="row">
				<div class="medium-8 columns medium-centered">

					<form id="create-project">
						<fieldset>
							<legend>Información básica</legend>

							<div class="row">
								<div class="large-3 column">
									<label>Nombre del proyecto</label>
								</div>
								<div class="large-9 column">
									<input type="text" name="create-project-name" id="create-project-name" placeholder="El nombre de tu proyecto" />
								</div>
							</div>

							<div class="row">
								<div class="large-3 column">
									<label>Descripción (140 caracteres)</label>
								</div>
								<div class="large-9 column">
									<textarea name="create-desc" id="create-desc" placeholder="Una breve descripción de tu proyecto"></textarea>
								</div>
							</div>

							<div class="row">
								<div class="large-3 column">
									<label>¿Mi proyecto está activo actualmente?</label>
								</div>
								<div class="large-9 column">
									<input type="radio" name="is-active" value="Yes" id="active-yes" checked><label for="active-yes">Sí</label>
									<input type="radio" name="is-active" value="No" id="active-no"><label for="active-no">No</label>
								</div>
							</div>

							<div class="row">
								<div class="large-3 column">
									<label>Imagen principal</label>
								</div>
								<div class="large-9 column">
									SUBIR IMAGEN
								</div>
							</div>

						</fieldset>

						<fieldset>
							<legend>Colaboración</legend>

							<div class="row">
								<div class="large-3 column">
									<label>Colaboradores</label>
								</div>
								<div class="large-9 column">
									<input type="text" name="create-contributer1" id="create-contributer1" placeholder="Escribe el nombre o correo de tu colaborador" />
									<input type="text" name="create-contributer2" id="create-contributer2" placeholder="Escribe el nombre o correo de tu colaborador" />
									<a class="more-contributors button tiny secondary" href="#">Agregar más</a>
								</div>
							</div>

							<div class="row">
								<div class="large-3 column">
									<label>¿Quiero encontrar colaboradores?</label>
								</div>
								<div class="large-9 column">
									<input type="radio" name="find-contributors" value="Yes" id="find-yes" checked><label for="find-yes">Sí</label>
									<input type="radio" name="find-contributors" value="No" id="find-no"><label for="find-no">No</label>
								</div>
							</div>

							<div class="row">
								<div class="large-3 column">
									<label>Tipo de colaboración que busco</label>
								</div>
								<div class="large-9 column">
									<input name="contribute-type" id="contribute-time" type="checkbox"><label for="contribute-time">Tiempo (quiero ser voluntario)</label><br />
									<input name="contribute-type" id="contribute-materials" type="checkbox"><label for="contribute-materials">Materiales</label><br />
									<input name="contribute-type" id="contribute-knowledge" type="checkbox"><label for="contribute-knowledge">Conocimiento</label><br />
									<input name="contribute-type" id="contribute-funds" type="checkbox"><label for="contribute-funds">Fondos</label><br />
									<input name="contribute-type" id="contribute-other" type="checkbox"><label for="contribute-other">Otro (describir abajo)</label><br />
									<input type="text" name="contribute-other-type" id="contribute-other-type" placeholder="Cómo puedo colaborar con el proyecto" />



								</div>
							</div>

						</fieldset>

						<fieldset>
							<legend>Más detalles</legend>

							<div class="row">
								<div class="large-3 column">
									<label>Pregunta 1</label>
								</div>
								<div class="large-9 column">
									<textarea name="" id="" placeholder=""></textarea>
								</div>
							</div>

							<div class="row">
								<div class="large-12 column">
									<label>Pregunta 1</label>

									<textarea name="" id="" placeholder=""></textarea>
								</div>
							</div>

						</fieldset>

						<fieldset>
							<legend>Galería</legend>

							<div class="row">
								<div class="large-12 column">
									Subir archivos
								</div>
							</div>

						</fieldset>

						<div class="row">
							<div class="small-12 column">
								<button type=submit name="create-submit" id="create-submit">Crear proyecto</button>
								<button class="secondary" type=submit name="create-draft-submit" id="create-draft-submit">Guardar borrador</button>
							</div>
						</div>

					</form>


				</div>
			</div>
			<!-- END fom-main -->




			<!-- ----------------------------------------------------------------
			Fin area editable para contenido
			---------------------------------------------------------------- -->



		</div>
		<!-- END main-content -->


<?php

include('includes/footer.php');

?>