<?php require_once("tracking/utm.php"); ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Chez Novaa, nos experts comptables sont élevés en plein air mais interviennent en ile de France</title>
  <link rel="stylesheet" href="css/style-novaa.css">
  <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css">
  <link rel="stylesheet" href="css/reset.css">  
  <script type="text/javascript" src="//use.typekit.net/ohn6zgt.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script type="text/javascript">
  (function() {
    var config = {
      kitId: 'ohn6zgt',
      scriptTimeout: 3000
    };
    var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
  })();
</script>
</head>
<body>
	<header>
		<nav class="container">
			
			<ul>
				<li><a href="index.php"><img src="images/logo-novaa.png" alt="Voici le joli logo de novaa" /></a></li>
				<li><a href="creer.php" title="Créez votre boite avec nous">Cr&eacute;er<br /> une entreprise</a></li>
				<li><a href="trouver.php" class="current" title="Voici comment notre expertise opère">Trouver votre <br /> expert comptable</a></li>
				<li><a href="obtenir.php" title="Notre meilleur prix pour vous">Obtenir <br /> nos tarifs</a></li>
				<li><a href="savoir.php" title="Tout, tout, tout, vous saurez tout sur le cabinet">En savoir + <br /> sur Novaa</a></li>
				<li class="tel-contact rose">Paris 9, 11 rue Scribe  - 01 53 83 78 30<br><span class="violine tel-contact" >Rouen, 57 av. de Bretagne - 02 32 08 18 18</span></li>
			</ul>
		</nav>
	</header>
	<div class="clearfix"></div>
	
	<!-- Debut CTA lateraux  -->
	<a href="popup-rappel.php" class="fancy cta-rappel">Rappelez moi</a>
	<a href="popup-devis.php" class="fancy cta-devis">Devis gratuit</a>
	<!-- Fin CTA lateraux  -->

	
	<!-- Debut liste presta obtenir -->
	<div class="clearfix"></div>
	<section id="obtenir-presta">
		<div class="container">
		<div id="presta-gauche" class="left">
			<h2 class="rose"><span>Vous recherchez un expert comptable comme ça ?</span></h2>	
			<p class="sexe"><a href="#" onclick="changeSexe('mec'); return false;" class="mec bleu current">Lui</a> - <a href="#" onclick="changeSexe('nana'); return false;" class="nana rose">Elle</a> </p>
			<img class="image-type-sexe" src="images/canon-mec.jpg" />
			<p class="notice rose center">Suggestion de présentation (mais en vrai on est encore mieux que ça)</p>
		</div><!-- fin presta gauche-->
		
		<!-- debut form droite-->
		<div id="form-droite"  class="right">	
			<h2 class="noir">Rencontrons-nous maintenant, c’est gratuit !</span></h2>
				<form class="formulaire bg-noir" method="post" action="merci.php">
					<p class="notice blanc">Chez Novaa, vous êtes suivi par un professionnel qui connait les ficelles de votre métier qui s’occupera: de votre saisie comptable, de vos déclarations de TVA et d’IS, de votre social ainsi que de l’ensemble des travaux de fin d’année (bilan,  juridique, liasse, etc). Il est évidemment là pour vous rencontrer, vous écouter et vous conseiller. Allez, rencontrons-nous, c’est gratuit </p>
					<p class="blanc"><label for="nom-lead">Nom</label><input type="text" id="nom-lead" name="nom-lead" type="text" /></p>
					<p class="blanc"><label for="activite-lead">Activité</label><input type="text" id="activite-lead" name="activite-lead" type="text" /></p>
					<p class="blanc"><label for="postal-lead">Code postal</label><input type="text" id="postal-lead" name="postal-lead" type="text" /></p>
					<p class="blanc"><label for="email-lead">Email</label><input type="text" id="email-lead" name="email-lead" type="text" /></p>
					<p class="blanc"><label for="telephone-lead">Téléphone</label><input type="text" id="telephone-lead" name="telephone-lead" type="text" /></p>
					<p class="valider"><input type="submit" id="hp-submit" value="Envoyer" type="text" /></p>
				</form>

		</div><!-- fin presta droite-->
		<div class="clearfix"></div>
		<p class="center"><img src="images/spliter.png" /></p>
			<div id="sous-guguss">
				<h3 class="violine">Novaa vous permet de :</h3>
				<div class="bloc-argu">
					<h4>Gagner du temps</h4>	
					<img src="images/sablier.jpg" />
					<ul>
						<li>Avec nos outils web, nous échangeons et communiquons avec vous plus rapidement et facilement</li>
						<li>En confiant votre compta à  un pro, vous ne vous prenez pas la tête à remplir un CA12 ou  une liasse et vous vous concentrez sur votre métier</li>
					</ul>
				</div>
				<div  class="bloc-argu">
					<h4>Sécuriser votre entreprise</h4>
					<img src="images/bouclier.jpg" />
					<ul>
						<li>Novaa est membre de l’ordre des experts comptables. Nous respectons une législation, un code de déontologie et des bonnes pratiques</li>
						<li>Une Assurance contrôle fiscal est inclue dans nos prestations, en cas de contrôle, vous n’êtes pas seul.</li>
						<li>Nos outils vous permettent de visualiser votre activité en temps réel et de prendre les bonnes décisions rapidement, avant qu’il ne soit trop tard. Anticipez !</li>
					</ul>
				</div>
				<div class="bloc-argu">
					<h4>Faire des économies</h4>
					<img src="images/cochon.jpg" />
					<ul>
						<li>Nos honoraires sont calculés pour vous permettre d’obtenir une prestation de qualité tout en restant accessibles aux plus petites entreprises.</li>
						<li>Notre travail de conseil nous amène à optimiser votre imposition pour que votre tirelire reste bien remplie.</li>
					</ul>
				</div>
				
			</div>
			<div class="clearfix"></div>

		</div>	<!-- fin container -->	
	</section>
	<!-- fin liste presta obtenir -->
		
		
	
	<!-- debut footer -->
	<footer>
	
		<div class="container form-footer">

			<h3>Cher Novaa, j’ai beaucoup apprécié votre site, et je souhaiterai :</h3>
		
			<ul class="foutu-footer">
				<li><a href="#" onclick="return false;" class="icon-rencontre">Vous rencontrer</a></li>
				<li><a href="#" onclick="return false;" class="icon-rappel">Etre rappelé</a></li>
				<li><a href="#" onclick="return false;" class="icon-demo">Une démo en ligne</a></li>
				<li><a href="#" onclick="return false;" class="icon-devis">Obtenir un devis</a></li>
			</ul>

			<form class="formulaire-footer" style="display: none;" method="post" action="merci.php">
				<p><label for="nom-lead-footer">Je m'appelle</label><input type="text" id="nom-lead-footer" name="nom-lead-footer" type="text" placeholder="Votre nom ici" /></p>
				<p><label for="postal-lead-footer">J'habite à </label><input type="text" id="postal-lead-footer" name="postal-lead-footer"  placeholder="Code postal ou ville" type="text" /></p>
				<p><label for="email-lead-footer">Vous pouvez m'écrire un email à l'adresse</label><input type="text" id="email-lead-footer" placeholder="Mon adresse email" name="email-lead-footer" type="text" /></p>
				<p><label for="telephone-lead-footer">Et me joindre par téléphone au</label><input type="text" id="telephone-lead-footer"  placeholder="Numéro portable ou fixe" name="telephone-lead-footer" type="text" /></p>
				<p class="valider"><input type="submit" id="crea-submit" value="Envoyer" type="text" /></p>
			</form>	
		
		</div>

	</footer>
	
	<div id="under-footer">
		<div class="container">
		<p>Vous pouvez également nous rendre visite à Paris 11 rue Scribe (9<sup>ème</sup>) ou à Rouen, au 57 avenue de Bretagne</p>
		</div>
	</div>
	<!-- fin footer -->



	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
			 http://chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Votre navigateur est très ancien, il est temps de le mettre à jour</a> ou bien <a href="http://www.google.com/chromeframe/?redirect=true">d'installer Google Chrome</a> pour vraiment profiter de notre site.</p><![endif]-->
	
	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.9.1.min.js'>\x3C/script>")</script>
	
	
	<!-- jerem met son code ici -->
	<script src="js/fancybox/jquery.fancybox.js"></script>
	<script src="js/functions.js"></script>
	
	<!-- Asynchronous google analytics; this is the official snippet.
		 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
		 
	<script>
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	-->
	
	<?php require_once("tracking.php"); ?>
</body>
</html>