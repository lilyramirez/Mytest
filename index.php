<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta name="description" content="El periodico más chismoso de todos, en el Estado de Guerrero" />
	<title>AcaTeck</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/normalize.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bscss/bootstrap.min.css">
	<!-- <link href="css/bscss/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
</head>
<body>

<!-- <div class="tnav">
	<div class="navbar navbar-fixed-top" role="banner">
	    <div class="navbar-inner-sm">
			  <div class="container">
			    <div class="navbar-header">
			      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
			      </button>
			    </div>
			    <nav class="collapse navbar-collapse" role="navigation">
				      <ul class="nav navbar-nav pull-right">
					        <li class="active">
					          <a href="../getting-started">F</a>
					        </li>
					        <li>
					          <a href="../components">T</a>
					        </li>
					        <li>
					          <a href="../javascript">Y</a>
					        </li>
					        <li>
					          <a href="../customize">H</a>
					        </li>					         
				      </ul>
			    </nav>
			  </div>
	    </div>
	</div>
</div> -->

<!-- Aqui inicia el Header de la página -->
	<header class="header_Principal">
		<figure>
			<a href="http://www.elrincondelvago.com">
				<img src="img/logo.png" />
			</a>			
		</figure>
		<hgroup>
			<h1>
				 AcaTeck
			</h1>	
			<h2>
			El periodico más chismoso
			</h2>
		</hgroup>
	</header>

	

<div id="boot">
	<!-- NavBar de BootStrap -->
	<nav role="navigation" class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">AcaTeck</a>
        </div>

        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>                
                <li class="dropdown">
   					 <a data-toggle="dropdown" class="dropdown-toggle" href="#">Noticias<b class="caret"></b></a>
				        <ul role="menu" class="dropdown-menu">
				            <li><a href="include/artnuevos.php">Articulos Nuevos</a></li>
				            <li><a href="include/artviejos.php">Articulos Viejos</a></li>
				        </ul>
				</li>                
                <li><a href="include/deportes.php">Deportes</a></li>
                <li><a href="include/vidaestilos.php">Vida y Estilos</a></li>
                <li><a href="include/comics.php">Comics</a></li>
                <li class="dropdown">
   					 <a data-toggle="dropdown" class="dropdown-toggle" href="include/acerca.php">Acerca de <b class="caret"></b></a>
				        <ul role="menu" class="dropdown-menu">
				            <li><a href="acerca.php#quien">Quienes somos</a></li>
				            <li><a href="acerca.php#ubicacion">Ubicación</a></li>
				            <li><a href="acerca.php#historia">Historia</a></li>
				        </ul>
				</li>
				<li><a href="include/contactos.php">Contactos</a></li>
            </ul>
        </div>
	</nav>
</div>	

<!-- Barra de Carga de las Imagenes -->
	<div class="carga">
		<div class="relleno"></div>
	</div>

<!-- Galeria de la página -->
<!--se modifico la calidad de las imagenes  -->
	<div id="slides" class="slides">
      <img src="img/slider/img1.jpg">
      <img src="img/slider/img2.jpg">
      <img src="img/slider/img3.jpg">
      <img src="img/slider/img4.jpg">
      <img src="img/slider/img5.jpg">
      <img src="img/slider/img6.jpg">
      <img src="img/slider/img7.jpg">
      <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left"></i></a>
      <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right"></i></a>
    </div>

	<!-- Barra de Redes Sociales -->
    <div class="navbar-social">
    	<ul>
    		<li><a href="http://www.facebook.com" class="icon-facebook-sign"></a></li>
    		<li><a href="http://www.twitter.com"  class="icon-twitter-sign"></a></li>
    		<li><a href="http://www.github.com"   class="icon-github"></a></li>
    		<li><a href="http://www.google.com"   class="icon-cloud-upload"></a></li>	
    	</ul>
    </div>

	<section id="container">	

		<hgroup>
			<h2>Artículos Recientes</h2>
		</hgroup>
		<article class="parrafo" id="container_p1">
			<hgroup>
				<h1>Suspención de clases en ITA por Huracan Marty</h1>
			</hgroup>
			<figure class="figure_wrapper">
				<img src="img/huracan.jpg" alt="" />
				<figcaption>
					Tomado por:
					<a href="http://www.twitter.com/Villanueva0110">
						<strong>@Villanueva0110</strong>
					</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Lorem ipsum</a> Quibusdam totam, explicabo corporis qui optio beatae provident laborum vitae sit inventore eligendi et dolorem voluptatum reiciendis quo, assumenda neque possimus sint!	<a href="#">Lorem ipsum</a> dolor sit amet, consectetur adipisicing elit. Fugit officiis quam veritatis, obcaecati at eveniet rerum similique, ex ut aliquid dignissimos cupiditate, officia qui nihil architecto quae accusamus rem explicabo.
			</p>			
		</article>

		<article class="parrafo" id="container_p2">
			<hgroup>
				<h1>7 muertos resultaron heridos en una balacera</h1>
			</hgroup>
			<figure class="figure_wrapper">
				<img src="img/balacera.jpg" alt="" />
				<figcaption>
					Tomado por:
					<a href="http://www.twitter.com/">
						<strong>@Agora Guerrero</strong>
					</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. At voluptatibus debitis maiores, sint asperiores, laudantium. Libero laboriosam <a href="#">Lorem ipsum</a>praesentium dignissimos debitis? Repellendus fuga, quae dicta dolorum totam placeat hic quia itaque!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo <a href="#">Lorem ipsum</a>temporibus nisi suscipit enim modi, voluptatem, nobis magni odio cumque quaerat illo quae quasi nam tempore doloribus dolorem repudiandae dolore officiis!
			</p>			
		</article>

		<article class="parrafo" id="container_p3">
			<hgroup>
				<h1>El pollito ya dijo pio</h1>
			</hgroup>
			<figure class="figure_wrapper">
				<img src="img/pollito.jpg" alt="" />
				<figcaption>
					Tomado por:
					<a href="http://www.twitter.com/">
						<strong>@Los mexicanos</strong>
					</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque non quos laboriosam tenetur! Qui odit et voluptatibus necessitatibus <a href="#">Lorem ipsum</a>ad est quaerat atque aspernatur vel provident, repudiandae facere quia esse repellendus!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda <a href="#">Lorem ipsum</a>debitis perspiciatis voluptas a, deserunt optio commodi eveniet sed earum iure eaque rem adipisci obcaecati alias esse labore. Nesciunt, veniam, blanditiis.
			</p>			
		</article>

		<article class="parrafo" id="container_p4">
			<hgroup>
				<h1>Cetec Zocalo crea los mejores frontEnd de Acapulco</h1>
			</hgroup>
			<figure class="figure_wrapper">
				<img src="img/cetec.jpg" alt="" />
				<figcaption>
					Tomado por:
					<a href="http://www.twitter.com/">
						<strong>@Noticias Reales</strong>
					</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ipsa minima a nemo nihil optio iure consectetur deleniti illum nesciunt corporis id molestias numquam, officia aperiam necessitatibus, quia quas in.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Lorem ipsum</a>Debitis nostrum temporibus id laborum alias perferendis aliquam, dolores quis odio vitae itaque corrupti rem est, repellat corporis eveniet animi amet consequatur.
			</p>			
		</article>

		<article class="parrafo" id="container_p5">
			<hgroup>
				<h1>Lluvia intensa en Chilpancingo</h1>
			</hgroup>
			<figure class="figure_wrapper">
				<img src="img/lluvia.jpg" alt="" />
				<figcaption>
					Tomado por:
					<a href="http://www.twitter.com/">
						<strong>@Red Noticias</strong>
					</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus libero quisquam atque quis dolorum eius incidunt et aspernatur fugit consectetur. Ipsa eos alias fugiat, <a href="#">Lorem ipsum</a> voluptatem natus laudantium quibusdam blanditiis soluta.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus inventore atque, temporibus dolore error nesciunt iure neque, at distinctio hic sapiente aliquid, facilis a. Tempora, eaque vitae unde deserunt nulla?
			</p>			
		</article>

		<article class="parrafo" id="container_p6">
			<hgroup>
				<h1>Y los 43 que se llevaron donde estan?</h1>
			</hgroup>
			<figure class="figure_wrapper">
				<img src="img/ayotzi.jpg" alt="" />
				<figcaption>
					Tomado por:
					<a href="http://www.twitter.com/">
						<strong>@TV Azteca</strong>
					</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam eius officia excepturi minus inventore temporibus nulla corporis modi nemo, obcaecati dolorem, eaque, quas, perspiciatis. <a href="#">Lorem ipsum</a> Dolores aperiam ratione similique autem obcaecati.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda excepturi veritatis fuga illum ea, quod provident autem, consectetur tempore facilis porro explicabo mollitia beatae. Quaerat sapiente commodi et temporibus, aspernatur.
			</p>			
		</article>

		<article class="parrafo" id="container_p1">
			<hgroup>
				<h1>Suspención de clases en ITA por Huracan Marty</h1>
			</hgroup>
			<figure class="figure_wrapper">
				<img src="img/huracan.jpg" alt="" />
				<figcaption>
					Tomado por:
					<a href="http://www.twitter.com/Villanueva0110">
						<strong>@Villanueva0110</strong>
					</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Lorem ipsum</a> Quibusdam totam, explicabo corporis qui optio beatae provident laborum vitae sit inventore eligendi et dolorem voluptatum reiciendis quo, assumenda neque possimus sint!	<a href="#">Lorem ipsum</a> dolor sit amet, consectetur adipisicing elit. Fugit officiis quam veritatis, obcaecati at eveniet rerum similique, ex ut aliquid dignissimos cupiditate, officia qui nihil architecto quae accusamus rem explicabo.
			</p>			
		</article>

		<article class="parrafo" id="container_p2">
			<hgroup>
				<h1>7 muertos resultaron heridos en una balacera</h1>
			</hgroup>
			<figure class="figure_wrapper">
				<img src="img/balacera.jpg" alt="" />
				<figcaption>
					Tomado por:
					<a href="http://www.twitter.com/">
						<strong>@Agora Guerrero</strong>
					</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. At voluptatibus debitis maiores, sint asperiores, laudantium. Libero laboriosam <a href="#">Lorem ipsum</a>praesentium dignissimos debitis? Repellendus fuga, quae dicta dolorum totam placeat hic quia itaque!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo <a href="#">Lorem ipsum</a>temporibus nisi suscipit enim modi, voluptatem, nobis magni odio cumque quaerat illo quae quasi nam tempore doloribus dolorem repudiandae dolore officiis!
			</p>			
		</article>

		<article class="parrafo" id="container_p3">
			<hgroup>
				<h1>El pollito ya dijo pio</h1>
			</hgroup>
			<figure class="figure_wrapper">
				<img src="img/pollito.jpg" alt="" />
				<figcaption>
					Tomado por:
					<a href="http://www.twitter.com/">
						<strong>@Los mexicanos</strong>
					</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque non quos laboriosam tenetur! Qui odit et voluptatibus necessitatibus <a href="#">Lorem ipsum</a>ad est quaerat atque aspernatur vel provident, repudiandae facere quia esse repellendus!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda <a href="#">Lorem ipsum</a>debitis perspiciatis voluptas a, deserunt optio commodi eveniet sed earum iure eaque rem adipisci obcaecati alias esse labore. Nesciunt, veniam, blanditiis.
			</p>			
		</article>

		<article class="parrafo" id="container_p4">
			<hgroup>
				<h1>Cetec Zocalo crea los mejores frontEnd de Acapulco</h1>
			</hgroup>
			<figure class="figure_wrapper">
				<img src="img/cetec.jpg" alt="" />
				<figcaption>
					Tomado por:
					<a href="http://www.twitter.com/">
						<strong>@Noticias Reales</strong>
					</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero ipsa minima a nemo nihil optio iure consectetur deleniti illum nesciunt corporis id molestias numquam, officia aperiam necessitatibus, quia quas in.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Lorem ipsum</a>Debitis nostrum temporibus id laborum alias perferendis aliquam, dolores quis odio vitae itaque corrupti rem est, repellat corporis eveniet animi amet consequatur.
			</p>			
		</article>

	</section>	
	<!-- Fin del Section -->

	<aside id="articulos_Viejos">
		<hgroup>
			<h2>Artículos Viejos</h2>
		</hgroup>
		
		<article>
			<hgroup>
				<h1>
					Huelga en IPN por falta de Recursos
				</h1>
			</hgroup>
			<figure>
				<a href="">
					<img src="img/huelgaIPN.jpg" >
				</a>
				<figcaption>
					<span>Tomada por: </span>
					<a href="http://www.google.com">@Paparatzi</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error sunt autem vero ab modi deleniti dolores 			
			</p>
			<span class="span">
				<a href="#">Ver más</a>
			</span>
		</article>

		<article>
			<hgroup>
				<h1>
					Peña Nieto y el populismo
				</h1>
			</hgroup>
			<figure>
				<a href="">
					<img src="img/peña.jpg" >
				</a>
				<figcaption>
					<span>Tomada por: </span>
					<a href="http://www.google.com">@Paparatzi</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error sunt autem vero ab modi deleniti dolores				
			</p>
			<span class="span">
				<a href="#">Ver más</a>
			</span>
		</article>

		<article>
			<hgroup>
				<h1>
					Obama, un presidente desarmado
				</h1>
			</hgroup>
			<figure>
				<a href="">
					<img src="img/obama.jpg" >
				</a>
				<figcaption>
					<span>Tomada por: </span>
					<a href="http://www.google.com">@Paparatzi</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error sunt autem vero ab modi deleniti dolores				
			</p>
			<span class="span">
				<a href="#">Ver más</a>
			</span>
		</article>

		<article>
			<hgroup>
				<h1>
					El engaño del gigante mundial de automóviles
				</h1>
			</hgroup>
			<figure>
				<a href="">
					<img src="img/vw.jpg" >
				</a>
				<figcaption>
					<span>Tomada por: </span>
					<a href="http://www.google.com">@Paparatzi</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error sunt autem vero ab modi deleniti dolores			
			</p>
			<span class="span">
				<a href="#">Ver más</a>
			</span>
		</article>

		<article>
			<hgroup>
				<h1>
					Los agujeros negros de Iguala
				</h1>
			</hgroup>
			<figure>
				<a href="">
					<img src="img/agujero.jpg" >
				</a>
				<figcaption>
					<span>Tomada por: </span>
					<a href="http://www.google.com">@Paparatzi</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error sunt autem vero ab modi deleniti dolores				
			</p>
			<span class="span">
				<a href="#">Ver más</a>
			</span>
		</article>

		<article>
			<hgroup>
				<h1>
					Drogas: el tiro por la culata
				</h1>
			</hgroup>
			<figure>
				<a href="">
					<img src="img/drogas.jpg" >
				</a>
				<figcaption>
					<span>Tomada por: </span>
					<a href="http://www.google.com">@Paparatzi</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error sunt autem vero ab modi deleniti dolores				
			</p>
			<span class="span">
				<a href="#">Ver más</a>
			</span>
		</article>

		<article>
			<hgroup>
				<h1>
					Peña Nieto y el populismo
				</h1>
			</hgroup>
			<figure>
				<a href="">
					<img src="img/peña.jpg" >
				</a>
				<figcaption>
					<span>Tomada por: </span>
					<a href="http://www.google.com">@Paparatzi</a>
				</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error sunt autem vero ab modi deleniti dolores				
			</p>
			<span class="span">
				<a href="#">Ver más</a>
			</span>
		</article>

	</aside>

	<div class="img-back">
		<figure class="img-back__figure">
			
		</figure>
	</div>
	<!-- Inicia el pie del sitio -->
	<footer>
		<div class="pub">
			<div class="servicios">
				<p>Anuncia tus servicios profesionales:</p>
				<ul>
					<li><a href="#">Servicio1 (744) 1234567</a></li>
					<li><a href="#">Servicio1 (744) 1234567</a></li>
					<li><a href="#">Servicio1 (744) 1234567</a></li>
			
				</ul>
			
			</div>

			<div class="categoria">
				<p>Anuncia tus servicios profesionales:</p>
				<ul>
					<li><a href="#">Servicio1 (744) 1234567</a></li>
					<li><a href="#">Servicio1 (744) 1234567</a></li>
					<li><a href="#">Servicio1 (744) 1234567</a></li>
			
				</ul>			
			</div>

			<div class="contacto">
				<p>Anuncia tus servicios profesionales:</p>
				<ul>
					<li><a href="#">Servicio1 (744) 1234567</a></li>
					<li><a href="#">Servicio1 (744) 1234567</a></li>
					<li><a href="#">Servicio1 (744) 1234567</a></li>
				
				</ul>
			</div>
		</div>

		<figure class="image-mono">
			<img class="image-mono__figure" src="img/monkee-head.png">
		</figure>
		<div class="info">
			<p>Desarrollado por <strong><a href="http://www.twitter.com/Villanueva0110">@Villanueva0110</a></strong></p>
			<p>All Rights Reserved 2015 by <em>Ing-Michael</em></p>
		</div>
	</footer>


    <script src="b/js/bootstrap.min.js"></script>

<!-- Prefixfree -->
<script src="js/prefixfree.min.js"></script>

	<!-- Script para el Slider -->
	<!-- End SlidesJS Required: Start Slides -->
  <!-- SlidesJS Required: Link to jQuery -->
  <!-- Esta libreria de abajo la estoy omitiendo por la de bootstrap -->
  <!--<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>-->
  <!-- End SlidesJS Required -->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bsjs/bootstrap.min.js"></script>

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="js/jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->


  <script>
      $(function(){
        $('#slides').slidesjs({
        width: 940,
        height: 390,/*528*/
        navigation: false,
        start: 3,
        play: {
          auto: true
        }
      });
      });
    
  </script>

</body>
</html>



	