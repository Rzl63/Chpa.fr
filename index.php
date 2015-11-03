<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<?php include('assets/head.php'); ?>

<body>
	<main class="container">
		<?php include('assets/nav.php'); ?>

		<section id="accueil">
		
		<?php include('assets/carousel.php'); 
		include('assets/cookieAlert.php');
		?>

		</section>

		<section id="garage">
			<div>
				<div class="row">
					<div class="col-md-12">
						<h2>Le <strong>Garage </strong></h2>
						<img class="trait img-responsive" src="img/tr.png" width="300px">
					</div>
				</div>
			</div>	
			<div class="fond">
				<div class="row">
					<div class="col-xs-10 col-sm-3 col-md-3">
						<img class="us img-responsive" src="img/garage.jpg"  alt="image_garage">
					</div>	
					<div class="col-xs-11 col-md-8">	
						<h4 class="title"><strong>Vestibulum ligut praesent commodo cursus magna, scelerisque sit consectetur et. Cum sociis natoque penatibus et magnis dis tellus parturient pharetra montes nulla non metus auctor.</strong></h4>
						<p class="s-para">Notre Garage CHPA vous offre un service de mécanique automobile générale à Saint-Etienne, secteur ... . 
							Que vous ayez un problème mécanique ou besoin d’un diagnostic auto, nos mécaniciens auto se feront un plaisir de répondre à tous vos besoins en mécanique automobile générale! <strong>Contactez-nous!</strong><p>
					</div>		
				</div>
			</div>
		</section>

		<section id="services" class="part1">
			<div>
				<div class="row">
					<div class="col-md-12">
						<hgroup class="">
							<h2>Nos <strong>Services </strong></h2>
							<img class="trait img-responsive" src="img/tr.png" width="300px">
					</div>
				</div>	
					
				<div class="row">		
					<div class="col-md-12 col-lg-3">
						<div class="boxin text-center red fond">	
							<h5>RÉPARATION AUTOMOBILE MULTIMARQUE</h5>
							<img src="img/rep.jpg">
							<p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod. Eget lacinia odio sem nec elit.</p>
							<li  class="moi" data-toggle="modal" data-target="#mecanique"><a style="color:white">EN SAVOIR PLUS</a></li>
						</div>
					</div>
					<div class="col-md-12 col-lg-3">
						<div class="boxin text-center red fond">	
							<h5>DIAGNOSTIC AUTOMOBILE COMPLET</h5>
							<img class="img-responsive" src="img/diag.png">
							<p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod. Eget lacinia odio sem nec elit.</p>
							<li class="moi" data-toggle="modal" data-target="#diagnostic"><a style="color:white">EN SAVOIR PLUS</a></li>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="boxin text-center red fond">	
							<h5>DÉPANNAGE ET REMORQUAGE AUTOMOBILE</h5>
							<img class="img-responsive" src="img/voiture.jpg">
							<p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod. Eget lacinia odio sem nec elit.</p>
							<li class="moi" data-toggle="modal" data-target="#depannage"><a style="color:white">EN SAVOIR PLUS</a></li>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="boxin text-center red fond">	
							<h5>VENTE DE VEHICULE D'OCCASION</h5>
							<img class="img-responsive" src="img/voiture.jpg">
							<p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod. Eget lacinia odio sem nec elit.</p>
							<li class="moi" data-toggle="modal" data-target="#vente"><a style="color:white">EN SAVOIR PLUS</a></li>
						</div>
					</div>

				</div>	
			</div>	
		</section>
		<section id="contacts" class="fond2">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<article>
							<h2>Nous <strong>Contacter </strong></h2></br>
							<img class="bille img-responsive" src="img/bille.png" width="230px">
							<p>Nous mettons à votre dispositions un formulaire si vous desirez un devis ou </br>
							des informations sur nos prestations</p>
						</article>

						<form class="form-horizontal" action="#contact" method="POST">
						  <div class="form-group">
						    <div class="col-sm-6">
						      <input type="text" class="form-control" name="nom" placeholder="Votre nom" required>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-6">
						      <input type="text" class="form-control" name="prenom" placeholder="Votre Prénom" required>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-6">
						      <input type="email" class="form-control" name="email" placeholder="Votre Email" required>
						    </div>
						  </div>
						   <div class="form-group">
						    <div class="col-sm-6">
						      <input type="tel" class="form-control" name="tel" placeholder="Votre Téléphone" required>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-6">
						      <textarea class="form-control" name="message" placeholder="Votre Message" rows="7" required></textarea>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-10">
						      <button type="submit" class="btn btn-success">Envoyer</button>
						    </div>
						  </div>
						</form>
					</div>
					<div class="col-md-6" style="left:-14px">
						<article>
							<h2 style="display:inline-block">Nous <strong>Rejoindre </strong></h2></br><img class="loc img-responsive" src="img/loc.png" width="28px">
							<p>Le garage est ouvert du Lundi au Vendredi de 9h à 12h et de 14h à 19h</p>
						</article>
						<iframe class="text-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.833820102389!2d4.383881200000006!3d45.47315139999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f5ac66a1e7d145%3A0xcf8eed66e25f4ee!2s1+Impasse+de+la+Bargette%2C+42270+Saint-Priest-en-Jarez!5e0!3m2!1sfr!2sfr!4v1439722976509" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div id="adress">
						<ul>
							<li><strong>1 impasse de la Bargette. 42270 Saint-Priest-en-Jarez</strong></li>
							<li>06.68.56.50.74</li>
							<li><a href="accueil.php">www.chpa.fr</a></li>
						</ul>
					</div>	
					<div class="fb-share-button" data-href="http://www.chpa.fr" data-layout="button_count"></div></br></br>
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.chpa.fr" data-lang="fr"></a>	
				</div>
			</div>		
		</section>	

		<div id="fb-root"></div>




		<?php
		include('assets/modalMecanique.php');
		include('assets/modalDiagnostic.php'); 
		include('assets/modalDepannage.php');
		include('assets/modalVente.php');
		include('assets/modalMention.php');
		include('assets/footer1.php');
		include('assets/footer.php'); 
		?>

	</main>

<?php include('assets/script.php') ?>
		
</body>
</html>