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
						<img class="user" src="#" alt="icono-usu"> 
						<h2 class="form-name">Crear perfil de usuario </h2>
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

							<!--cominza un campo de texto--><div class="row">
								<div class="large-3 column">
									<label>Nombre</label>
								</div>
								<div class="large-9 column">
									<input type="text" name="create-project-name" id="create-project-name" placeholder=""/>
								</div>
							</div>
							<!--termina-->
							<div class="row">
								<div class="large-3 column">
									<label>Apellidos</label>
								</div>
								<div class="large-9 column">
									<input type="text" name="create-project-name" id="create-project-name" placeholder=""/>
								</div>
							</div>
							
							<div class="row">
								<div class="large-3 column">
									<label>Mail</label>
								</div>
								<div class="large-9 column">
									<input type="text" name="create-project-name" id="create-project-name" placeholder=""/>
								</div>
							</div>
							
							<div class="row">
								<div class="large-3 column">
									<label>Profesión</label>
								</div>
								<div class="large-9 column">
									<input type="text" name="create-project-name" id="create-project-name" placeholder=""/>
								</div>
							</div>

							<div class="row">
								<div class="large-3 column">
									<label>País</label>
								</div>
								<div class="large-9 column">
									<input type="text" name="create-project-name" id="create-project-name" placeholder=""/>
								</div>
							</div>
							
							<div class="row">
								<div class="large-3 column">
									<label>Ciudad</label>
								</div>
								<div class="large-9 column">
									<input type="text" name="create-project-name" id="create-project-name" placeholder=""/>
								</div>
							</div>
							
							<div class="row">
								<div class="large-3 column">
									<label>Teléfono</label>
								</div>
								<div class="large-9 column">
									<input type="text" name="create-project-name" id="create-project-name" placeholder=""/>							</d

							
								<div class="row">
								<div class="large-3 column">
									<label>Descripción</label>
								</div>
								<div class="large-9 column">
									<textarea name="" id="" placeholder="Escribe algo breve sobre ti y tú profesión"></textarea>
								</div>
							</div>
							

						</fields		

						<fieldset>
							<legend>Redes sociales de contacto</legend>

							<div class="row">
								<div class="large-3 column">
									
								</div>
								<div class="large-9 column">
									<input type="text" name="create-project-name" id="create-project-name" placeholder=""/>
								</div>
							</div>

							
								<div class="row">
								<div class="large-3 column">
									
								</div>
								<div class="large-9 column">
									<input type="text" name="create-project-name" id="create-project-name" placeholder=""/>
								</div>
							</div>

							
								<div class="row">
								<div class="large-3 column">
									
								</div>
								<div class="large-9 column">
									<input type="text" name="create-project-name" id="create-project-name" placeholder=""/>
								</div>
							</div>

							
								<div class="row">
								<div class="large-3 column">
									
								</div>
								<div class="large-9 column">
									<input type="text" name="create-project-name" id="create-project-name" placeholder=""/>
								</div>
							</div>

						</fieldset>

						
						<div class="row">
							<div class="small-12 column">
								<button type=submit name="create-submit" id="create-submit">Guardar</button>
							</div>
						</div>
						
					</form>

					
					
					
					<div class="row">
								<div class="large-12 column">
									<section class="tags">
									
									<h2>Tags de búsqueda</h2>
									<p>Escoge tus temas de preferencia para personalizar tu área de exploración <br>
										y encontrar los proyectos relacionados que más te interesan</p>
										
										<div class="row">

											<div class="large-12 column">
												
												<div id="tags">
													 
													<button  type="submit" onclick=""> Arte
														<img class="mail-ico" src="img/mail.svg" alt="icono mail"> </button>
								
													 <button  type="submit" onclick=""> Ecología y medio ambiente
														 <img class="mail-ico" src="img/mail.svg" alt="icono mail"> </button>
													
														  <button  type="submit" onclick=""> Multicultura
														<img class="mail-ico" src="img/mail.svg" alt="icono mail"> 
												
												    </button>
												</div>	
										
											</div>
										
										
														 </div>	
									
									</section>
				</div>
			
										
										
			</div>
					
					
					
					
					
					
					
					
					

					
					
					
			<!-- END fom-main -->




			<!-- ----------------------------------------------------------------
			Fin area editable para contenido
			---------------------------------------------------------------- -->



		</div>
		<!-- END main-content -->


