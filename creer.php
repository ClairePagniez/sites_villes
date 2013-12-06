<?php require_once("tracking/utm.php"); ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>L'avenir appartient aux créateurs d'entreprise, Novaa y participe</title>
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
				<li><a href="creer.php" class="current"  title="Créez votre boite avec nous">Cr&eacute;er<br /> une entreprise</a></li>
				<li><a href="trouver.php" title="Voici comment notre expertise opère">Trouver votre <br /> expert comptable</a></li>
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

	

	<div class="clearfix"></div>
	<section id="creation">

		<div class="container">

			<div class="step-1">
				<h1 class="big-question">Alors comme ça vous souhaitez créez votre entreprise ?</h1>
				<div class="rep-gauche left center">
					<a href="#" onclick="nextStep('.step-1', '.step-2'); return false;" title="Oui je le veux" />
						<h2 class="big-reponse bleu">oui</h2>
						<img src="images/enfant-oui.jpg" />
					</a>	
				</div>
				<div class="rep-droite right center">
					<a href="#" onclick="nextStep('.step-1', '.step-0'); return false;" title="Non, pas d'accord" />
						<h2 class="big-reponse rose">non</h2>
						<img src="images/enfant-non.jpg" />
					</a>	
				</div>
			</div>
			<div class="clearfix"></div>

			<div class="step-0 left" style="display: none;">
				<h1 class="big-question">Ok, mais si vous cherchez un expert comptable qui soit :</h1>
					<div id="sous-guguss">
					<div class="bloc-argu-2">
						<h4>Proche de ses clients</h4>
						<img src="images/nounours.jpg" />
						
					</div>
					
					<div  class="bloc-argu-2">
						<h4>Ecologique</h4>
						<img src="images/ecologique.jpg" />
						
					</div>
					<div class="bloc-argu-2">
						<h4>Innovant</h4>
						<img src="images/innovant.jpg" />
						
					</div>
					<div class="bloc-argu-2">
						<h4>En plein Paris</h4>
						<img src="images/opera.png" />
					</div>
					<div class="bloc-argu-2">
						<h4>Economique</h4>	
						<img src="images/economique.jpg" />
						
					</div>
					
					
				</div>

							<div class="clearfix"></div>

				<div>
					
				
				
				<div class="contour form-crea noir">
					<h1><span>Alors vous êtes au bon endroit</span></h1>
					<h3 class="violet">Un rendez-vous de moins d'une heure nous suffit pour vous présenter tout ce que Novaa pourrait apporter à votre entreprise. Heure et lieu du RDV à votre convenance. Remplissez ce formulaire, un de nos experts vous rappelle pour discuter de votre entreprise. Et c'est 100% gratuit.</h3>

					<form class="formulaire bis" method="post" action="merci.php">
						<p><label for="nom-lead-bis">Je m'appelle</label><input type="text" id="nom-lead-bis" name="nom-lead" type="text" placeholder="Votre nom ici" /></p>
						<p><label for="postal-lead-bis">J'habite à </label><input type="text" id="postal-lead-bis" name="postal-lead"  placeholder="Code postal ou ville" type="text" /></p>
						<p><label for="email-lead-bis">Vous pouvez m'écrire un email à l'adresse</label><input type="text" id="email-lead-bis" placeholder="Mon adresse email" name="email-lead" type="text" /></p>
						<p><label for="telephone-lead-bis">Et me joindre par téléphone au</label><input type="text" id="telephone-lead-bis"  placeholder="Numéro portable ou fixe" name="telephone-lead" type="text" /></p>
						<p class="valider"><input type="submit" id="crea-submit" value="Envoyer" type="text" /></p>
					</form>
				</div>

				
				
				</div>
				
			</div>

			<div class="clearfix"></div>


			<div class="step-2" style="display: none;">
				<h1 class="big-question">Vous aimeriez que votre création soit :</h1>
				<div class="rep-gauche left center">
					<a href="#" onclick="nextStep('.step-2', '.step-3', '20'); return false;" title="j'adore la sérénité" />
						<h2 class="big-reponse bleu">tranquille</h2>
						<img src="images/tongue.jpg" />
					</a>	
				</div>
				<div class="rep-droite right center">
					<a href="#" onclick="nextStep('.step-2', '.step-3', '21'); return false;" title="Cool, une prise de tête" />
						<h2 class="big-reponse rose">épuisante</h2>
						<img src="images/rangers.jpg" />
					</a>	
				</div>
			</div>

			<div class="clearfix"></div>

			<div class="step-3" style="display: none;">
				<h1 class="big-question">Vous pensez que créer votre entreprise va vous coûter :</h1>
				<div class="rep-gauche left center">
					<a href="#" onclick="nextStep('.step-3', '.step-4', '30'); return false;" title="Les bons plans, c'est mon rayon" />
						<h2 class="big-reponse bleu">peanuts</h2>
						<img src="images/peanuts.jpg" />
					</a>	
				</div>
				<div class="rep-droite right center">
					<a href="#" onclick="nextStep('.step-3', '.step-4', '31'); return false;" title="Gaspiller c'est dans ma nature" />
						<h2 class="big-reponse rose">un bras</h2>
						<img src="images/bras.jpg" />
					</a>	
				</div>
			</div>

			<div class="clearfix"></div>
			
			<div class="step-4" style="display: none;">
				<h1 class="big-question">Vous aimeriez que votre création soit : </h1>
				<div class="rep-gauche left center">
					<a href="#" onclick="nextStep('.step-4', '.step-5', '40'); return false;" title="Ma société va de l'avant" />
						<h2 class="big-reponse bleu">rapide</h2>
						<img src="images/moto.jpg" />
					</a>	
				</div>
				<div class="rep-droite right center">
					<a href="#" onclick="nextStep('.step-4', '.step-5', '41'); return false;" title="Je veux être immatriculé dans 3 ans" />
						<h2 class="big-reponse rose">lente</h2>
						<img src="images/velo.jpg" />
					</a>	
				</div>
			</div>

			<div class="clearfix"></div>

			<div class="step-5" style="display: none;">
				
				<h1 class="big-question">Chez Novaa, votre création d'entreprise sera :</h1>
				
				<ul class="big-list">
					<li class="reponse2">Facile</li>
					<li class="reponse3 bleu">&Eacute;conomique</li>
					<li class="reponse4 violine">Rapide</li>
				</ul>			
			
				<div class="contour form-crea noir">
					<h2><span>Pour vous en avoir le coeur net, laissez-nous vous expliquer comment Novaa vous  aidera à créer votre entreprise </span></h2>
					<form class="formulaire" method="post" action="merci.php">
						<p><label for="nom-lead">Je m'appelle</label><input type="text" id="nom-lead" name="nom-lead" type="text" placeholder="Votre nom ici" /></p>
						<p><label for="activite-lead">Je souhaite créer une société dans le secteur du </label><input type="text" placeholder="Profession ou domaine d'activité"  id="activite-lead" name="activite-lead" type="text" /></p>
						<p><label for="postal-lead">J'habite à </label><input type="text" id="postal-lead" name="postal-lead"  placeholder="Code postal ou ville" type="text" /></p>
						<p><label for="email-lead">Vous pouvez m'écrire un email à l'adresse</label><input type="text" id="email-lead" placeholder="Mon adresse email" name="email-lead" type="text" /></p>
						<p><label for="telephone-lead">Et me joindre par téléphone au</label><input type="text" id="telephone-lead"  placeholder="Numéro portable ou fixe" name="telephone-lead" type="text" /></p>
						<p class="valider"><input type="submit" id="crea-submit" value="Envoyer" type="text" /></p>
					</form>
				</div>
			
			</div>
			
			
			<div class="clearfix"></div>
			
		<!-- fin div container -->
		</div>
			
	
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