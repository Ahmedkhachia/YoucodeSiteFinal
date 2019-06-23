<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Elastic Circle Slideshow | Codrops</title>
	<meta name="description" content="A simple content slideshow with circular elements and a bouncy navigation effect." />
	<meta name="keywords" content="slideshow, dynamic.js, elastic, circle, template, web design" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>

<body>
	<div class="container">
		<div class="deco deco--title"></div>
		<div id="slideshow" class="slideshow">
			<div class="slide">
				<h2 class="slide__title slide__title--preview">Adil Belkhadir </h2>
				<div class="slide__item">
					<div class="slide__inner">
						<img class="slide__img slide__img--small img-circle" src="../assets/img/staff/adil.png" alt="Some image" />
						<button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<div class="slide__content">
					<div class="slide__content-scroller">
						<img class="slide__img slide__img--large" src="../assets/img/staff/adil.png" alt="Some image" />
						<div class="slide__details">
							<h2 class="slide__title slide__title--main">Adil Belkhadir</h2>
							<p class="slide__description">Chef de projet </p>

							<div>
								<span class="slide__price slide__price--large"></span>
								<button class="button button--buy"></button>
							</div>
						</div><!-- /slide__details -->
					</div><!-- slide__content-scroller -->
				</div><!-- slide__content -->
			</div>
			<div class="slide">
				<h2 class="slide__title slide__title--preview">Faycal Bengatta <span class="slide__price"></span></h2>
				<div class="slide__item">
					<div class="slide__inner">
						<img class="slide__img slide__img--small" src="../assets/img/staff/faycal.png" alt="Some image" />
						<button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<div class="slide__content">
					<div class="slide__content-scroller">
						<img class="slide__img slide__img--large" src="../assets/img/staff/faycal.png" alt="Some image" />
						<div class="slide__details">
							<h2 class="slide__title slide__title--main">Faycal Bengatta</h2>
							<p class="slide__description">Responsable de YouCode au maroc </p>
							<div>
								<span class="slide__price slide__price--large"></span>
								<button class="button button--buy"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<h2 class="slide__title slide__title--preview">Karima Bouchehboun <span class="slide__price"></span></h2>
				<div class="slide__item">
					<div class="slide__inner">
						<img class="slide__img slide__img--small" src="../assets/img/staff/karima.png" alt="Some image" />
						<button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<div class="slide__content">
					<div class="slide__content-scroller">
						<img class="slide__img slide__img--large" src="../assets/img/staff/karima.png" alt="Some image" />
						<div class="slide__details">
							<h2 class="slide__title slide__title--main">Karima Bouchehboun</h2>
							<p class="slide__description">Chargé d'insertion</p>
							<div>
								<span class="slide__price slide__price--large"></span>
								<button class="button button--buy"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<h2 class="slide__title slide__title--preview">Asmaa Boufoud <span class="slide__price"></span></h2>
				<div class="slide__item">
					<div class="slide__inner">
						<img class="slide__img slide__img--small" src="../assets/img/staff/assma.png" alt="Some image" />
						<button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<div class="slide__content">
					<div class="slide__content-scroller">
						<img class="slide__img slide__img--large" src="../assets/img/staff/assma.png" alt="Some image" />
						<div class="slide__details">
							<h2 class="slide__title slide__title--main">Asmaa Boufoud</h2>
							<p class="slide__description">Chargé d'insertion </p>
							<div>
								<span class="slide__price slide__price--large"></span>
								<button class="button button--buy"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<h2 class="slide__title slide__title--preview">Abdellah Essen <span class="slide__price"></span></h2>
				<div class="slide__item">
					<div class="slide__inner">
						<img class="slide__img slide__img--small" src="../assets/img/staff/abdellah.png" alt="Some image" />
						<button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<div class="slide__content">
					<div class="slide__content-scroller">
						<img class="slide__img slide__img--large" src="../assets/img/staff/abdellah.png" alt="Some image" />
						<div class="slide__details">
							<h2 class="slide__title slide__title--main">Abdellah Essen</h2>
							<p class="slide__description">Responsable de réseau informatique</p>
							<div>
								<span class="slide__price slide__price--large"></span>
								<button class="button button--buy"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<h2 class="slide__title slide__title--preview">Loubna Asri <span class="slide__price"></span></h2>
				<div class="slide__item">
					<div class="slide__inner">
						<img class="slide__img slide__img--small img-circle" src="../assets/img/staff/loubna.png" alt="Some image" />
						<button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<div class="slide__content">
					<div class="slide__content-scroller">
						<img class="slide__img slide__img--large img-circle" src="../assets/img/staff/loubna.png" alt="Some image" />
						<div class="slide__details">
							<h2 class="slide__title slide__title--main">Loubna Asri</h2>
							<p class="slide__description">Chargé administrative </p>
							<div>
								<span class="slide__price slide__price--large"></span>
								<button class="button button--buy"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<h2 class="slide__title slide__title--preview">Loubna Draissi <span class="slide__price"></span></h2>
				<div class="slide__item">
					<div class="slide__inner">
						<img class="slide__img slide__img--small img-circle" src="../assets/img/staff/loubna1.png" alt="Some image" />
						<button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<div class="slide__content">
					<div class="slide__content-scroller">
						<img class="slide__img slide__img--large img-circle" src="../assets/img/staff/loubna1.png" alt="Some image" />
						<div class="slide__details">
							<h2 class="slide__title slide__title--main">Loubna Draissi</h2>
							<p class="slide__description">Chargé d'acceuil </p>
							<div>
								<span class="slide__price slide__price--large"></span>
								<button class="button button--buy"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<h2 class="slide__title slide__title--preview">Hicham Janoub <span class="slide__price"></span></h2>
				<div class="slide__item">
					<div class="slide__inner">
						<img class="slide__img slide__img--small img-circle" src="../assets/img/staff/hicham.jpg" alt="Some image" />
						<button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<div class="slide__content">
					<div class="slide__content-scroller">
						<img class="slide__img slide__img--large img-circle" src="../assets/img/staff/hicham.jpg" alt="Some image" />
						<div class="slide__details">
							<h2 class="slide__title slide__title--main">Hicham Janoub </h2>
							<p class="slide__description">Agent multitâche </p>
							<div>
								<span class="slide__price slide__price--large"></span>
								<button class="button button--buy"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<h2 class="slide__title slide__title--preview">Abdellatif Tijani <span class="slide__price"></span></h2>
				<div class="slide__item">
					<div class="slide__inner">
						<img class="slide__img slide__img--small img-circle" src="../assets/img/staff/tijani.png" alt="Some image" />
						<button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<div class="slide__content">
					<div class="slide__content-scroller">
						<img class="slide__img slide__img--large img-circle" src="../assets/img/staff/tijani.png" alt="Some image" />
						<div class="slide__details">
							<h2 class="slide__title slide__title--main">Abdellatif Tijani</h2>
							<p class="slide__description">Formateur référent </p>
							<div>
								<span class="slide__price slide__price--large"></span>
								<button class="button button--buy"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<h2 class="slide__title slide__title--preview">Youssef Ouadid <span class="slide__price"></span></h2>
				<div class="slide__item">
					<div class="slide__inner">
						<img class="slide__img slide__img--small img-circle" src="../assets/img/staff/youssef.png" alt="Some image" />
						<button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<div class="slide__content">
					<div class="slide__content-scroller">
						<img class="slide__img slide__img--large img-circle" src="../assets/img/staff/youssef.png" alt="Some image" />
						<div class="slide__details">
							<h2 class="slide__title slide__title--main">Youssef Ouadid</h2>
							<p class="slide__description">Formateur référent </p>
							<div>
								<span class="slide__price slide__price--large"></span>
								<button class="button button--buy"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<h2 class="slide__title slide__title--preview">Kaoutar Chouikh <span class="slide__price"></span></h2>
				<div class="slide__item">
					<div class="slide__inner">
						<img class="slide__img slide__img--small img-circle" src="../assets/img/staff/kaoutar.png" alt="Some image" />
						<button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<div class="slide__content">
					<div class="slide__content-scroller">
						<img class="slide__img slide__img--large img-circle" src="../assets/img/staff/kaoutar.png" alt="Some image" />
						<div class="slide__details">
							<h2 class="slide__title slide__title--main">Kaoutar Chouikh</h2>
							<p class="slide__description">Formatrice référente </p>
							<div>
								<span class="slide__price slide__price--large"></span>
								<button class="button button--buy"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slide">
				<h2 class="slide__title slide__title--preview">Dalila Boutoumilate <span class="slide__price"></span></h2>
				<div class="slide__item">
					<div class="slide__inner">
						<img class="slide__img slide__img--small img-circle" src="../assets/img/staff/dalila.png" alt="Some image" />
						<button class="action action--open" aria-label="View details"><i class="fa fa-plus"></i></button>
					</div>
				</div>
				<div class="slide__content">
					<div class="slide__content-scroller">
						<img class="slide__img slide__img--large img-circle" src="../assets/img/staff/dalila.png" alt="Some image" />
						<div class="slide__details">
							<h2 class="slide__title slide__title--main">Dalila Boutoumilate</h2>
							<p class="slide__description">Formatrice référente </p>
							<div>
								<span class="slide__price slide__price--large"></span>
								<button class="button button--buy"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button class="action action--close" aria-label="Close"><i class="fa fa-close"></i></button>
		</div>

	</div><!-- /container -->
	<script src="js/classie.js"></script>
	<script src="js/dynamics.min.js"></script>
	<script src="js/main.js"></script>
	<script>
		(function () {
			document.documentElement.className = 'js';
			var slideshow = new CircleSlideshow(document.getElementById('slideshow'));
		})();
	</script>
</body>

</html>