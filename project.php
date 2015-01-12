<?php
/*
tizo
[PROJECT]

*/

$page = 'Project'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>


		<!-- START #site-header: logo, menu, submenu -->
		<header id="site-header">


			<!-- START sub-navbar: submenu -->
			<!-- #sub-navbar es la barra azul, quitar si no es necesaria -->

			<div id="sub-navbar">

				<div class="row">

					<ul id="project-nav">
						<li>
							<a href="" class="project-link">
								<div class="submenu-icon"></div>
								Proyecto
							</a>
						</li>
						<li>
							<a href="" class="project-link">
								<div class="submenu-icon"></div>
								Actividad
							</a>
						</li>
						<li>
							<a href="" class="project-link">
								<div class="submenu-icon"></div>
								Colaboración
							</a>
						</li>
						<li>
							<a href="" class="project-link">
								<div class="submenu-icon"></div>
								Comentarios
							</a>
						</li>
						<li>
							<a href="" class="project-link">
								<div class="submenu-icon"></div>
								Editar
							</a>
						</li>
					</ul>

				</div>

			</div>
			<!-- END sub-navbar -->



				<!-- START content-header -->

				<div id="content-header" class="row">


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
						<h2>Archivo Alicia</h2>
						<ul>
							<li>Proyecto en curso</li>
							<li>María Muñoz</li>
							<li>Barcelona</li>
							<li>espacio urbano</li>
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

		<div id="site-content">


			<!-- ----------------------------------------------------------------
			Cambiar esta parte que viene de acuerdo a cada caso.
			Por ejemplo: cambiar id #project-main a #user-profile o a #form-login,
			luego cambiar contenido por el apropiado
			---------------------------------------------------------------- -->

			<!-- START project-main -->
			<div id="project-main" class="row">
				<div class="medium-8 columns medium-centered">

					<div class="short-info">
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
										<ul class="clearing-thumbs" data-clearing="" style="">
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