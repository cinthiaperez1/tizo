<?php
/*
tizo
[HOME]

*/

/*
NOTAS MATI:
Ver lineas 56 y 59
*/

$page = 'Home'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>


		<!-- START #site-header: logo, menu, submenu -->
		<header id="site-header">

		<!--START Home-mainphoto-->

			<div id="home-mainphoto">
				<div class="row">
					<div class="small-10 medium-8 small-centered columns">
						<h2>Conéctate. Colabora. Aprende.</h2>
					</div>
					<div class="small-8 medium-6 small-centered columns">
						<p>Tizo es una plataforma digital para profesionales que
						buscan difundir y participar en proyectos para la niñez.</p>
					</div>
					<div id="home-button" class="small-10 medium-8 small-centered columns">
						<a class="small round button" href=""><span class="bigger">¡Únete a nosotros!</span></a>
					</div>
				</div>
			</div>


			<!-- START content-header -->

			<div id="content-header" class="row">

				<!-- ----------------------------------------------------------------
				En #content-header va el encabezado del contenido,
				o sea, el bloque con fondo gris. Cambiar por contenido apropiado
				---------------------------------------------------------------- -->

				<!-- Cambiar esta parte siguiente por la que va en cada caso -->

				<div class="small-8 medium-6 small-centered columns">
						<p>Entérate cómo funciona la plataforma ingresando <a href="">aquí</a> y así podrás</p>
						<ul class="home-content-header-icons">
							<li>
								<!-- Las imagenes siempre deben llevar alt="" para ayudar a la accesibilidad -->
								<img src="img/icons1.png" alt="Crear" />

								<!-- Lo que hice fue agregar span para el texto -->
								<span class="home-content-header-name">Crear</span>
							</li>
							<li>
								<img src="img/icons2.png" alt="Compartir" />
								<span class="home-content-header-name">Compartir</span>

							</li>
							<li>
								<img src="img/icons3.png" alt="Colaborar" />
								<span class="home-content-header-name">Colaborar</span>
							</li>
						</ul>
				</div>

			</div>
			<!-- END content-header -->


		</header>
		<!-- END #site-header -->


		<!-- START site-content -->
		<!-- Dentro de #site-content va el contenido principal -->

		<div id="site-content">


			<!-- ----------------------------------------------------------------
			Cambiar esta parte que viene de acuerdo a cada caso.
			Por ejemplo: cambiar id #project-main a #user-profile o a #form-login,
			luego cambiar contenido por el apropiado
			---------------------------------------------------------------- -->

			<!-- START MATI intro-project-gallery -->
			<div id="home-project-gallery" class="row">
				<div class="small-12 columns">

					<div id="intro-project-gallery" class="row">
						<div class="medium-8 large-9 columns">
							<h3>Proyectos (134)</h3>
						</div>
						<div class="medium-4 large-3 columns">
							<select class="order-projects">
								<option>Ordenar por</option>
								<option value="popular">Más seguidos</option>
								<option value="activity">Actividad reciente</option>
								<option value="collab">Buscan colaboradores</option>
							</select>
						</div>
					</div>

					<!-- START project-gallery -->
					<div id="home-gallery" class="row">
						<div class="small-12 columns">

							<ul class="medium-block-grid-3 large-block-grid-4 projects"><!-- .projects es para la cortina con jQuery -->
								<li>
									<div class="overlay"><!-- Esto es para hacer después la cortina con jQuery -->
										<img src="img/projects/1.jpg" />
									</div>
									<div class="gallery-block-grey clearfix">
										<h4>Por Ana Fuentes</h4>
										<h3><a href="project.php">Archivo Alicia ICONO</a></h3>
										<ul>
											<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
											<li><a href="project.php"><img src="img/icono-mas.svg" alt="Ver más"/></a></li>
											<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      									</ul>
      								</div>
	  							</li>
	  							<li>
	  								<div class="overlay"><!-- Esto es para hacer después la cortina con jQuery -->
										<img src="img/projects/2.jpg" />
	  								</div>
	  								<div class="gallery-block-grey clearfix">
	  									<h4>Por Carla Sabedra</h4>
	  									<h3><a href="project.php">Pintura y papel ICONO</a></h3>
	  									<ul>
	  										<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
	  										<li><a href="project.php"><img src="img/icono-mas.svg" alt="Ver más"/></a></li>
	  										<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      									</ul>
      								</div>
	  							</li>
	  							
	  							<li>
	  								<div class="overlay">
      									<img src="img/projects/3.jpg" alt="Creando cuentos" />
      								</div>
      								<div class="gallery-block-grey clearfix">
      									<h4>Por Roberto Casteja</h4>
      									<h3><a href="project.php">Creando cuentos</a></h3>
      									<ul>
      										<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
      										<li><a href="project.php"><img src="img/icono-mas.svg" alt="Ver más"/></a></li>
      										<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      									</ul>
      								</div>
      						</li>
      						
      						<li>
      							<div class="overlay">
      								<img src="img/projects/4.jpg" alt="Escuela y colores"/>
      							</div>
      							<div class="gallery-block-grey clearfix">
      								<h4>Por Juan Carrera</h4>
      								<h3><a href="project.php">Escuela y colores</a></h3>
      								<ul>
      									<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
      									<li><a href="project.php"><img src="img/icono-mas.svg" alt="Ver más"/></a></li>
      									<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      								</ul>
      							</div>
      						</li>
      						<li>
      						<div class="overlay">
      							<img src="img/projects/5.jpg" alt="Dueños de la ciudad" />
      						</div>
      						<div class="gallery-block-grey clearfix">
      							<h4>Por Arnoldo Álvarez</h4>
      							<h3><a href="project.php">Dueños de la ciudad</a></h3>
      							<ul>
      								<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
      								<li><a href="project.php"><img src="img/icono-mas.svg" alt="Ver más"/></a></li>
      								<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      							</ul>
      						</div>
      					</li>
      					<li>
      						<div class="overlay">
      							<img src="img/projects/7.jpg" alt="Método de audición"/>
      						</div>
							<div class="gallery-block-grey clearfix">
      							<h4>Por Ana Coll</h4>
      							<h3><a href="project.php">Método de audición</a></h3>
      							<ul>
      								<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
      								<li><a href="project.php"><img src="img/icono-mas.svg" alt="Ver más"/></a></li>
      								<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      							</ul>
      						</div>
      					</li>
      					<li>
      						<div class="overlay">
      							<img src="img/projects/6.jpg" alt="Innovando arte"/>
      						</div>
      						<div class="gallery-block-grey clearfix">
      							<h4>Por Julia Ibarra</h4>
      							<h3><a href="project.php">Innovando arte</a></h3>
      							<ul>
      								<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
      								<li><a href="project.php"><img src="img/icono-mas.svg" alt="Ver más"/></a></li>
      								<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      							</ul>
      						</div>
      					</li>
      					<li>
      						<div class="overlay">
      							<img src="img/projects/8.jpg" alt="Escultura"/>
      						</div>
      						<div class="gallery-block-grey clearfix">
      							<h4>Por Pedro Fuentes</h4>
      							<h3><a href="project.php">Escultura</a></h3>
      							<ul>
      								<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
      								<li><a href="project.php"><img src="img/icono-mas.svg" alt="Ver más"/></a></li>
      								<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      							</ul>
      						</div>
      					</li>
	  							
	  						</ul>

						</div>
					</div>

				</div>
			</div>

			<!-- END project-gallery -->


			<!--Compaginacion-->

			<div id="page-numbers" class="row">
          		<div class="small-12 medium-12 small-centered columns">
           			<ul class="pagination">
              			<li class="arrow unavailable"><a href="">&laquo;</a></li>
              			<li class="current"><a href="">1</a></li>
              			<li><a href="">2</a></li>
              			<li><a href="">3</a></li>
              			<li><a href="">4</a></li>
              			<li class="unavailable"><a href="">&hellip;</a></li>
              			<li><a href="">12</a></li>
              			<li><a href="">13</a></li>
              			<li class="arrow"><a href="">&raquo;</a></li>
            		</ul>
          		</div>
          	</div>


			<!-- ----------------------------------------------------------------
			Fin area editable para contenido
			---------------------------------------------------------------- -->



		</div>
		<!-- END main-content -->


<?php

include('includes/footer.php');

?>