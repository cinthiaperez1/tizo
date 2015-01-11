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
						<h2>Conectate. Colabora. Aprende.</h2>
					</div>
					<div class="small-8 medium-6 small-centered columns">
						<p>Tizo es una plataforma digital para profesionales que
						buscan difundir y participar de proyectos para la niñez.</p>
					</div>
					<div id="home-button" class="small-10 medium-8 small-centered columns">
						<a class="small round button" href="">¡Unéte a nosotros!</a>
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
						<p>Entérate como funciona la plataforma ingresando <a href="">aquí</a> y así podrás</p>
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

			<!-- START intro-project-gallery -->
			<div id="intro-project-gallery" class="row">
				<div class="medium-12 columns medium-centered">
					<ul>
						<li>
							<div class="intro-gallery">
								<p>Proyectos <span class=".span-proyecto">(134)</span></p>
							</div>
						</li>
						<li>
							<div class="small-3 columns right">
								<input type="text" placeholder="Ordenar...">
							</div>
						</li>
					</ul>
				</div>

				</div>
			</div>
			<!-- END intro-project-gallery-->

			<!-- START project-gallery -->
			<div id="home-gallery" class="row">

				<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
      				<li>
      					<img src="img/projects/1.jpg" />
      					<div class="gallery-block-grey clearfix">
      						<h4>Por Ana Fuentes</h4>
      						<h3>Archivo Alicia</h3>
      						<ul>
      							<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
      							<li><img src="img/icono-mas.svg" alt="Ver más"/></li>
      							<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      						</ul>
      					</div>
      				</li>
      				<li>
      					<img src="img/projects/2.jpg" />
      					<div class="gallery-block-grey clearfix">
      						<h4>Por Carla Sabedra</h4>
      						<h3>Pintura y papel</h3>
      						<ul>
      							<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
      							<li><img src="img/icono-mas.svg" alt="Ver más"/></li>
      							<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      						</ul>
      					</div>
      				</li>
      				<li>
      					<img src="img/projects/3.jpg" />
      					<div class="gallery-block-grey clearfix">
      						<h4>Por Roberto Casteja</h4>
      						<h3>Creando cuentos</h3>
      						<ul>
      							<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
      							<li><img src="img/icono-mas.svg" alt="Ver más"/></li>
      							<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      						</ul>
      					</div>
      				</li>
      				<li>
      					<img src="img/projects/4.jpg" />
      					<div class="gallery-block-grey clearfix">
      						<h4>Por Juan Carrera</h4>
      						<h3>Escuela y colores</h3>
      						<ul>
      							<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
      							<li><img src="img/icono-mas.svg" alt="Ver más"/></li>
      							<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      						</ul>
      					</div>
      				</li>
      				<li>
      					<img src="img/projects/5.jpg" />
      					<div class="gallery-block-grey clearfix">
      						<h4>Por Arnoldo Alvaréz</h4>
      						<h3>Dueños de la ciudad</h3>
      						<ul>
      							<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
      							<li><img src="img/icono-mas.svg" alt="Ver más"/></li>
      							<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      						</ul>
      					</div>
      				</li>
      				<li>
      					<img src="img/projects/7.jpg" />
						<div class="gallery-block-grey clearfix">
      						<h4>Por Ana Coll</h4>
      						<h3>Método de audición</h3>
      						<ul>
      							<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
      							<li><img src="img/icono-mas.svg" alt="Ver más"/></li>
      							<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      						</ul>
      					</div>
      				</li>
      				<li>
      					<img src="img/projects/6.jpg" />
      					<div class="gallery-block-grey clearfix">
      						<h4>Por Julia Ibarra</h4>
      						<h3>Innovando arte</h3>
      						<ul>
      							<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
      							<li><img src="img/icono-mas.svg" alt="Ver más"/></li>
      							<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      						</ul>
      					</div>
      				</li>

      				<li>
      					<img src="img/projects/8.jpg" />
      					<div class="gallery-block-grey clearfix">
      						<h4>Por Pedro Fuentes</h4>
      						<h3>Escultura</h3>
      						<ul>
      							<li><img src="img/icono-colaborador.svg" alt="Colaborar"/></li>
      							<li><img src="img/icono-mas.svg" alt="Ver más"/></li>
      							<li><img src="img/icono-follow.svg" alt="Seguir"/></li>
      						</ul>
      					</div>
      				</li>
    			</ul>
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