<?php
/*
tizo
[USER_PROFILE]

*/

$page = 'User'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>


		<!-- START #site-header: logo, menu, submenu -->
		<header id="site-header">


			<a href="LINK"><img src="LINK IMAGEN"></a>


				<!-- START content-header -->

				<div id="content-header" class="row project-header">


					<!-- ----------------------------------------------------------------
					En #content-header va el encabezado del contenido,
					o sea, el bloque con fondo gris. Cambiar por contenido apropiado
					---------------------------------------------------------------- -->

					<!-- Cambiar esta parte siguiente por la que va en cada caso -->
					<div class="medium-4 columns">
						<!--<div class="user-pic large">-->
						<div class="user-pic">
							<img class="foto-user" src="img/users/user_2.jpg" alt="foto usuario" /> 
						</div>
					
					</div>
					<div class="medium-8 columns">
						
						<h2 class="user-name">Natalia Gisele Hayquel</h2>
						
						<ul class="project-meta">
							<li class="user-name">Profesora de primaria</li>
							<li class="user-place">Barcelona - España</li><br>
						
							<li class=user-datos>
								<img class="mail-ico" src="img/mail.svg" alt="icono mail"> natgiselle@gmail.com 
								<img class="phone-ico" src="img/phone.svg" alt="icono phone"> 034 - 23494885 
							</li>
							
							<li class="user-web">
								<a href="#">www.natagelle.org
									<img class="link-ico" src="img/link.svg" alt="icono link"></a> </li>
							
						
							</ul>
						
						<div class="user-redes">
							<a href="#"><img class="facebook-ico" src="img/fb.svg" alt="fb icono"></a> 
							<a href="#"><img class="twitter-ico" src="img/twitter.svg" alt="tw icono"></a> 
							<a href="#"><img class="linkedin-ico" src="img/linkedin.svg" alt="lin icono"></a> 
						</div>
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
			<div id="user-main" class="row">
				<div class="medium-8 columns medium-centered">

					<div class="project-summary">
						<p>Nacida en Italia, ha trabajado siempre en el mundo de la comunicación y de la educación. Con mucha energia y pasión por lo que hace, desde el principio ha sido una gran fan de trabajar con niños Le gustan las grandes y pequeñas ideas, y quiere crear una red de proyectos infantiles en Barcelona que nos ayuden a difundir la creatividad.</p>
					</div>
					
				</div>
			</div>
			<!-- END project-main -->

			<!-- START project-gallery -->
			<div id="user-gallery" class="row"><!--comienza la galería de proyetos, debería tener sus propios estilos-->
				<div class="medium-12 columns">
					<h3>Proyectos en los que trabaja</h3>

					<div class="row">
						<div class="small-12 columns">

							<div class="clearing-assembled"><!--cuál es su función?-->
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
									</div><!--llega hasta aqui , averiguar-->

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
										</ul>
									</div>
							   </div>
											<!--fin proyectos en que colabora-->
										<!--	<li class="visible">
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
									</div>-->
								 <!--aqui cierra una galeria de tres imagnes-->
								
								<div class="row"> <!--Aquí comienza galeria proyectos en que colabora-->
						<div class="small-12 columns">
							<h3>Proyectos en los que colabora</h3>
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
										</ul>
									</div>
								</div>
								
								
						<div class="row"><!--Aquí comienza galeria proyectos que sigue-->
						<div class="small-12 columns">
							<h3>Proyectos que sigue</h3>

							<div class="clearing-assembled"><!--cuál es su función?-->
								<div class="">

									<a href="#" class="clearing-close">×</a>

									<div class="visible-img" style="display: none;">
										<div class="clearing-touch-label" style="margin-left: 0px; margin-top: -341px;">
										</div>

										<img src="project-gallery/projectgal-01.jpg" alt="" style="visibility: visible;">
										<p class="clearing-caption">Nulla vitae elit libero, a pharetra augue. Cras mattis consectetur 
											purus sit amet fermentum.</p>
										<a href="#" class="clearing-main-prev disabled">
											<span></span>
										</a>

										<a href="#" class="clearing-main-next">
											<span></span>
										</a>
									</div><!--llega hasta aqui, averiguar cuál es su función-->

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