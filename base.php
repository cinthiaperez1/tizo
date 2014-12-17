<?php
/*
tizo
[BASE]

*/

$page = 'NOMBREPAGINA'; //Por ejemplo 'home', 'userprofile', etc

include('includes/header.php');

?>


		<!-- START #site-header: logo, menu, submenu -->
		<header id="site-header">


			<!-- START sub-navbar: submenu -->
			<!-- #sub-navbar es la barra azul, quitar si no es necesaria -->

			<div id="sub-navbar">

				<div class="row">

					<!-- Lo que va dentro de la barra azul va aquí -->

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
						<div class="project-pic large"></div>
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
						<p>Archivo Alicia es una plataforma experimental y colaborativa que pone en primer término la perspectiva de la infancia sobre el espacio público. PRUEBA CINTHIA</p>

					</div>

					<div class="guided-info">
						<p><strong>Pregunta uno</strong></p>

						<p>En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor. Una olla de algo más vaca que carnero, salpicón las más noches, duelos y quebrantos los sábados, lantejas los viernes, algún palomino de añadidura los domingos, consumían las tres partes de su hacienda.</p>
					</div>

					<div class="guided-info">
						<p><strong>Pregunta número dos</strong></p>

						<p>El resto della concluían sayo de velarte, calzas de velludo para las fiestas, con sus pantuflos de lo mesmo, y los días de entresemana se honraba con su vellorí de lo más fino. </p>
					</div>


					<div class="guided-info"></strong></p>

						<p><strong>Pregunta número tres</strong></p>

						<p>Tenía en su casa una ama que pasaba de los cuarenta, y una sobrina que no llegaba a los veinte, y un mozo de campo y plaza, que así ensillaba el rocín como tomaba la podadera.</p>
					</div>

					<div class="guided-info">
						<p><strong>Pregunta número cuatro</strong></p>

						<p>Frisaba la edad de nuestro hidalgo con los cincuenta años; era de complexión recia, seco de carnes, enjuto de rostro, gran madrugador y amigo de la caza. Quieren decir que tenía el sobrenombre de Quijada, o Quesada, que e unque, por conjeturas verosímiles, se deja entender que se llamaba Quejana.</p>
					</div>


				</div>
			</div>
			<!-- END project-main -->

			<!-- START project-gallery -->
			<div id="project-gallery" class="row">
				<div class="medium-12 columns">
					GAllery
				</div>
			</div>
			<!-- END project-gallery -->

			<!-- START project-collab -->
			<div id="project-collab" class="row">
				<div class="small-12 columns">
					Colaboradores
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