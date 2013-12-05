<?php require_once("tracking/utm.php"); ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Bonjour, vous êtes chez Novaa, cabinet d'expertise comptable à Paris</title>
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
				<a href="https://www.comptaneo.com" class="cta-login">Accès client</a>

			<ul>
				<li><a href="index.php"><img src="images/logo-novaa.png" alt="Voici le joli logo de novaa" /></a></li>
				<li class="prems">Vous <br />souhaitez</li>
				<li><a href="creer.php" title="Créez votre boite avec nous">Cr&eacute;er<br /> une entreprise</a></li>
				<li><a href="trouver.php" title="Voici comment notre expertise opère">Trouver votre <br /> expert comptable</a></li>
				<li><a href="obtenir.php" title="Notre meilleur prix pour vous">Obtenir <br /> nos tarifs</a></li>
				<li><a href="savoir.php" title="Tout, tout, tout, vous saurez tout sur le cabinet">En savoir + <br /> sur Novaa</a></li>
				<li class="tel-contact rose">01 53 83 78 30</span><br><span>11 rue Scribe Paris 9</span></li>
			</ul>
		</nav>
	</header>

	<div class="clearfix"></div>
	
	<!-- Debut CTA lateraux  -->
	<a href="https://www.comptaneo.com" class="cta-login">Accès client</a>

	<a href="http://novaa-expertise.com/popup-rappel.php" class="fancy cta-rappel">Rappelez moi</a>
	<a href="http://novaa-expertise.com/popup-devis.php" class="fancy cta-devis">Devis gratuit</a>
	<!-- Fin CTA lateraux  -->

	
	<!-- Debut header homepage -->
	<section id="hp-header">
		<div class="container">
			<div id="hp-video">
				<h1>Chez Novaa, vous pouvez gérer votre société comme cela.</h1>
				<a href="http://player.vimeo.com/video/71077702?title=0&amp;byline=0&amp;portrait=0&amp;color=ff0179&amp;autoplay=1" class="fancy video"><img src="images/hp-visu-video.jpg" height="222" width="360"/></a>
				<div class="txt-video">Nous réalisons toute votre compta et nous offrons les meilleurs outils pour piloter votre petite entreprise avec simplicité, efficacité et classe.<a href="popup-rdv.php" class="fancy"/>Voir ça de mes propres yeux</a></div>
			</div>
			
			<div id="trois-blocs">
				<div class="carre mini-tarifs">
					<a href="obtenir.php">Tarifs et <span class="uppercase"> prestations</span></a></span>
				</div>
				
				<div class="mini-engagement">
					<div class="carre meritez">
					Nous vous <span class="uppercase">garantissons</span>
					</div>
				
					
				<div class="carre slider">
					<div style="display:none;">
						<img src="images/icon-love-box.png" class="icon-slider"/>
						<span><br />Offre tout compris, sans aucun surcoût</span>
					</div>
					<div style="display:none;">
						<img src="images/icon-vitesse.png" class="icon-slider"/>
						<span><br />Vos statuts livrés en un temps record</span>
					</div>
					<div style="">
						<img src="images/icon-unlocked.png" class="icon-slider"/>
						<span><br />Notre contrat vous laisse libre</span>
					</div>
				</div>			
		</div>
		</div>
			<div id="hp-form">
				<form class="formulaire" method="post" action="/site/merci.php">
					<h2 class="blanc">Rencontrez notre cabinet comptable:<br /><span>Prenez RDV ou obtenez un DEVIS</span></h2>
					<p><label for="nom-lead">Nom</label><input type="text" id="nom-lead" name="nom-lead" type="text" /></p>
					<p><label for="activite-lead">Activité</label><input type="text" id="activite-lead" name="activite-lead" type="text" /></p>
					<p><label for="postal-lead">Code postal</label><input type="text" id="postal-lead" name="postal-lead" type="text" /></p>
					<p><label for="email-lead">Email</label><input type="text" id="email-lead" name="email-lead" type="text" /></p>
					<p><label for="telephone-lead">Téléphone</label><input type="text" id="telephone-lead" name="telephone-lead" type="text" /></p>
					<p class="valider"><input type="submit" id="hp-submit" value="Envoyer" type="text" /></p>
				</form>
			</div>
		</div>
	</section>
	<!-- fin header homepage -->

	
	
	<!-- Debut liste presta homepage -->
	<div class="clearfix"></div>
	<section id="hp-presta">
		<div class="contour container">
			<h2><span>Une offre intégrale + le meilleur prix + des outils innovants = Novaa est magiique</span></h2>	
			<p class="intro-presta"><label for="veux-creer"><input type="checkbox" id="veux-creer" name="veut-creer" onclick="displayCreaOfferte();" /> je souhaite créer mon entreprise</label> <label for="ai-salarie"><input type="checkbox" id="ai-salarie" name="ai-salarie" onclick="displaySalarie();" /> j'ai des salariés</label></p>
			<ul id="creaofferte" class="list-presta" style="display: none;">
				<li class="bg-bleu"><span>Rédaction <br /> des statuts</span></li>
				<li class="bg-bleu"><span>Choix forme <br />juridique</span></li>
				<li class="bg-bleu"><span>Choix du régime<br /> social et fiscal <br /></span></li>
				<li class="bg-bleu"><span>Organisation<br/>à la gestion</span></li>
				<li class="bg-bleu"><span>Formalités<br /> juridiques</span></li>

			</ul>
			<div class="clearfix"></div>
			<ul class="list-presta">

				<li class="bg-rose"><span>Saisie <br /> comptable</span></li>
				<li class="bg-rose"><span>Déclarations<br /> TVA</span></li>
				<li class="bg-rose"><span>Déclarations <br />IS</span></li>
				<li class="bg-rose"><span>Assurance<br /> Contrôle fiscal</span></li>
				<li class="bg-violine"><span>Super outil de pilotage</span></li>
				<li class="bg-violine"><span>Le plein <br />de conseils</span></li>
				<li class="bg-noir" style="padding-top:13px!important;"><span>Membre de l'ordre des experts comptables</span></li>


				<li class="bg-rose salarie" style="display:none;"><span>DUE + Adhésion aux caisses</span></li>
				<li class="bg-rose salarie" style="display:none;"><span>Bulletin <br/>de paie</span></li>
				<li class="bg-rose salarie" style="display:none;"><span>Déclarations sociales</span></li>

			</ul>
			<div class="clearfix"></div>
			<ul class="list-presta">
				<li class="bg-violet"><span>Bilan <br/>et annexes</span></li>
				<li class="bg-violet"><span>Liasse<br />fiscale</span></li>
				<li class="bg-violet"><span>Optimisation<br /> Rem/dividende</span></li>
				<li class="bg-violet"><span>Déclaration<br /><acronym title="Contribution Economique et Territoriale">CET</acronym></span></li>
				<li class="bg-violet"><span>PV approbation <br />des comptes</span></li>
				<li class="bg-violet"><span>PV rémunération gérant</span></li>
				<li class="bg-violet"><span>Dépot<br /> des comptes</span></li>
				<li class="bg-violet"><span>Echéancier <br /> TNS </span></li>

			</ul>
			<div class="clearfix"></div>
			<div class="btn-presta"><a class="bg-rose fancy" href="popup-rdv.php">Obtenir le devis pour ces services</a></div>	
		</div>		
	</section>
	<!-- fin liste presta homepage -->
	
	<!-- debut argu homepage -->
	<div class="container argu">
		<h2>Et tout ceci est inclus, quelque soit votre chiffre d’affaires, le nombre d’écritures comptables ou l’âge du capitaine.</h2>
		<p class="mention">(venez au cabinet ou retrouvons-nous à votre convenance dans toute l’ile de France)</p>
	</div>
	<!-- fin argu homepage -->

	<!-- debut liste avantages homepage -->
	<section id="avantages">
	<div class="container">
		<ul class="violine">
			<li>Nous sommes membre de l’ordre des experts comptables</li>
			<li>Notre contrat ne vous engage pas dans la durée</li>
			<li>Toute notre prestation est effectuée en France</li>
			<li>Notre fonctionnement est ultra simple</li>
			<li>Nous sommes souriants et innovants</li>
		</ul>
	</div>
	</section>
	<!-- fin liste avantages homepage -->
	
		<!-- debut dash presta homepage -->
	<div class="container argu">

		<h2>Chez Novaa, les cordonniers ne sont plus les moins bien chaussés : nous offrons à nos clients l’outil ultime pour piloter une TPE et gagner du temps. <a href="popup-rdv.php" class="fancy rose" title="Demandez nous un devis, vous l'obtiendrez en 2 temps, 3 mouvements">Demandez à le voir de vos propres yeux</a>.</h2>
		
		<p class="legende">
			
			<span class="computer">

				<span class="masque"></span>
				<span class="slider">

					<span class="backgrounds">
						<img src="images/dash-1.png"/>	
						<img src="images/dash-2.png"/>	
						<img src="images/dash-3.png"/>	
						<img src="images/dash-4.png"/>	
					</span>	

				</span>

			</span>
			<!-- <img src="images/dash1.png" class="hp-visu-dash"/> -->
		
			<br/>
		
			<a href="#" onclick="return false;" class="fleche-gauche"/></a>

				<span class="text_arg_container">
				
					<span class="text_arg arg1 active">Visualisez ce qu’il se passe vraiment dans votre entreprise</span>
					<span class="text_arg arg2">Consultez vos comptes bancaires en temps réel</span>
					<span class="text_arg arg3">Editez vos factures en moins de 2 minutes chrono !</span>
					<span class="text_arg arg4">Stockez et partagez facilement vos documents avec votre super expert-comptable</span>
				
				</span>

			<a href="#" onclick="return false;" class="fleche-droite active"></a>
	
	 	</p>
	
	</div>

	<div class="clearfix"></div>
	<!-- fin dash homepage -->
	
	
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

			<form class="formulaire-footer" style="display: none;" method="post" action="/site/merci.php">
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
		<p>Vous pouvez également nous rendre visite au 11 rue Scribe à Paris (derrière l’Opéra Garnier), ou nous téléphoner au 01 53 83 78 30</p>
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