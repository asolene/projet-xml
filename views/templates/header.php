<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
		<meta name="author" content="Kodinger">
		<meta name="keyword" content="magz, html5, css3, template, magazine template">
		<!-- Shareable -->
		<meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
		<meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />
		<title>SportFlux &mdash; l'actualité non stop &amp; FOOT TENNIS BASKET</title>
		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<!-- IonIcons -->
		<link rel="stylesheet" href="assets/scripts/ionicons/css/ionicons.min.css">
		<!-- Toast -->
		<link rel="stylesheet" href="assets/scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="assets/scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="assets/scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="assets/scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/skins/all.css">
		<link rel="stylesheet" href="assets/css/demo.css">
	</head>

	<body class="skin-orange">
		<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="brand">
								<a href="index.html">
									<img src="https://zupimages.net/up/21/39/l2t3.png" alt="SportFlux Logo">
								</a>
							</div>						
						</div>
						<div class="col-md-6 col-sm-12">
							<form class="search" autocomplete="off">
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="q" class="form-control" placeholder="Tapez quelque chose ici">									
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-search"></i></button>
										</div>
									</div>
								</div>
								<div class="help-block">
									<div>Populaire :</div>
									<ul>
										<li><a href="#">PSG</a></li>
										<li><a href="#">Rugby</a></li>
										<li><a href="#">Tennis</a></li>
										<li><a href="#">Messi</a></li>
										<li><a href="#">Basket</a></li>
									</ul>
								</div>
							</form>								
						</div>
						<div class="col-md-3 col-sm-12 text-right">
							<ul class="nav-icons">
								<li><a href="#"><div data-bs-toggle="modal" data-bs-target="#exampleModal">Paramètres</div></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!--Modal-->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <h5 class="modal-title" id="exampleModalLabel">Paramètres d'affichages</h5>
					  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
						<br>
					<form action="" method="POST">
										
						<div>
							<label for="actu"> Nombre d'actualités choisi :</label>
							<select name="actu" id="actu">
								<option value="0">6</option>
								<option value="1">9</option>
								<option value="2">12</option>
							</select>
						</div>
						<div>
							<label for="checkbox">Choisissez 3 sujets :</label><br>
							<ul>
								<li><input type="checkbox" name="category[]" value="0"><a href="https://rmcsport.bfmtv.com/rss/fil-sport/">Sport</a></li>
								<li><input type="checkbox" name="category[]" value="1"><a href="https://rmcsport.bfmtv.com/rss/football/">Football</a></li>
								<li><input type="checkbox" name="category[]" value="2"><a href="https://rmcsport.bfmtv.com/rss/basket/">Basket</a></li>
								<li><input type="checkbox" name="category[]" value="3"><a href="https://rmcsport.bfmtv.com/rss/tennis/">Tennis</a></li>
								<li><input type="checkbox" name="category[]" value="4"><a href="https://rmcsport.bfmtv.com/rss/rugby/">Rugby</a></li>
							</ul>          
							
							
						</div>
						
					</form>
					<div class="modal-footer">
					  <button type="button" class="btn btn-primary" type="submit" data-bs-dismiss="modal">Valider !</button>
					</div>
				  </div>
				</div>
			  </div>

			<!-- Start nav -->
			<nav class="menu">
				<div class="container">
					<div class="brand">
						<a href="#">
							<img src="https://zupimages.net/up/21/39/l2t3.png" alt="SportFlux logo">
						</a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
					</div>
					<div id="menu-list">
						<ul class="nav-list">
							
							<li class="dropdown magz-dropdown"><a href="#">Football <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									
								</ul>
							</li>
							<li class="dropdown magz-dropdown"><a href="#">Basket <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									
								</ul>
							</li>
							<li class="dropdown magz-dropdown"><a href="#">Tennis <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									
								</ul>
							</li>
							<li class="dropdown magz-dropdown"><a href="#">Rugby <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									
								</ul>
							</li>
							
						</ul>
					</div>
				</div>
			</nav>
			<!-- End nav -->
		</header>