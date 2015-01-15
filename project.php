<?php
/*
tizo
[USER]

*/

$page = 'User'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>


		<!-- START #site-header: logo, menu, submenu -->
		<header id="site-header">


			<!-- START sub-navbar: submenu -->
			<!-- #sub-navbar es la barra azul, quitar si no es necesaria -->

			<div id="sub-navbar">

				<div class="row">

					<?php include('includes/project-nav.php'); ?>

				</div>

			</div>
			<!-- END sub-navbar -->



				<!-- START content-header -->

				<div id="content-header" class="row project-header">


					<!-- ----------------------------------------------------------------
					En #content-header va el encabezado del contenido,
					o sea, el bloque con fondo gris. Cambiar por contenido apropiado
					---------------------------------------------------------------- -->

					<!-- Cambiar esta parte siguiente por la que va en cada caso -->
					<div class="medium-4 columns">
						<div class="project-pic large">
							<img src="img/project-main.jpg" alt="Archivo Alicia" />
						</div>
					</div>
					<div class="medium-8 columns">
						<h2 class="project-name">Archivo Alicia <a href="http://arxiualicia.com" class="project-url">.</a></h2>
						<span class="active-txt">Proyecto activo</span>

						<ul class="project-meta">
							<li class="project-author"><a href="">María Muñoz</a></li>
							<li class="project-place">Barcelona</li>
							<li class="project-cat"><a href=""><span class="round label">Espacio urbano</span></a></li>
						</ul>
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

			<!-- START project-main -->
			<div id="project-main" class="row">
				<div class="medium-8 columns medium-centered">

					<div class="project-summary">
						<p>Archivo Alicia es una plataforma experimental y colaborativa que pone en primer término la perspectiva de la infancia sobre el espacio público. </p>

					</div>

					<div class="guided-info">
						<p><strong>Pregunta uno</strong></p>

						<p>En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor. Una olla de algo más vaca que carnero, salpicón las más noches, duelos y quebrantos los sábados, lantejas los viernes, algún palomino de añadidura los domingos, consumían las tres partes de su hacienda.</p>
					</div>



				</div>
			</div>
			<!-- END project-main -->

			<!-- START project-gallery -->
			<div id="project-gallery" class="row">
				<div class="medium-12 columns">
					<h3>Galería multimedia</h3>

					<div class="row">
						<div class="small-12 columns">

							<div class="clearing-assembled">
								<div class="">

									<a href="#" class="clearing-close">×</a>

									<div class="visible-img" style="display: none;">
										<div class="clearing-touch-label" style="margin-left: 0px; margin-top: -341px;">
										</div>

										<img src="project-gallery/projectgal-01.jpg" alt="" style="visibility: visible;">
										<p class="clearing-caption">Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum.</p>
										<a href="#" class="clearing-main-prev disabled">
											<span></span>
										</a>

										<a href="#" class="clearing-main-next">
											<span></span>
										</a>
									</div>

									<div class="carousel">
										<ul class="clearing-thumbs small-block-grid-2 medium-block-grid-4 large-block-grid-6" data-clearing="" style="">
											<li class="visible">
												<a class="th" href="project-gallery/projectgal-01.jpg">
													<img data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum." src="project-gallery/th-projectgal-01.jpg">
												</a>
											</li>
											<li class="visible">
												<a class="th" href="project-gallery/projectgal-02.jpg">
													<img data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum." src="project-gallery/th-projectgal-02.jpg">
												</a>
											</li>
											<li class="visible">
												<a class="th" href="project-gallery/projectgal-01.jpg">
													<img data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum." src="project-gallery/th-projectgal-01.jpg">
												</a>
											</li>
											<li class="visible">
												<a class="th" href="project-gallery/projectgal-01.jpg">
													<img data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum." src="project-gallery/th-projectgal-01.jpg">
												</a>
											</li>
											<li class="visible">
												<a class="th" href="project-gallery/projectgal-01.jpg">
													<img data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum." src="project-gallery/th-projectgal-01.jpg">
												</a>
											</li>
											<li class="visible">
												<a class="th" href="project-gallery/projectgal-01.jpg">
													<img data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum." src="project-gallery/th-projectgal-01.jpg">
												</a>
											</li>
											<li class="visible">
												<a class="th" href="project-gallery/projectgal-01.jpg">
													<img data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum." src="project-gallery/th-projectgal-01.jpg">
												</a>
											</li>
											<li class="visible">
												<a class="th" href="project-gallery/projectgal-01.jpg">
													<img data-caption="Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum." src="project-gallery/th-projectgal-01.jpg">
												</a>
											</li>



										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>
					<p class="text-center"><a href="" class="button">Ver más</a></p>
				</div>
			</div>
			<!-- END project-gallery -->

			<!-- START project-collab -->
			<div id="project-collab" class="row">
				<div class="small-12 columns">
					<h3>Colaboradores</h3>
				</div>
			</div>
			<!-- END project-collab -->

			<!-- ----------------------------------------------------------------
			Fin area editable para contenido
			---------------------------------------------------------------- -->



		</div>
		<!-- END main-content -->


<?php

include('includes/footer.php');

?>