<?php require_once("tracking/utm.php"); ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Besoin d'un devis d'expert comptable ? Novaa vous réserve son meilleur tarif</title>
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
				<li><a href="trouver.php" title="Voici comment notre expertise opère">Trouver votre <br /> expert comptable</a></li>
				<li><a href="obtenir.php"class="current" title="Notre meilleur prix pour vous">Obtenir <br /> nos tarifs</a></li>
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
		<ul class="presta-gauche">
			<li id="tab-inclus" class="contour active">
				<a href="#" onclick="changeInclus(-1); return false;">Ce qui est inclus</a>
			</li>
			<li id="tab-noninclus" class="last contour">
				<a href="#" onclick="changeInclus(0); return false;">Ce qui n'est pas inclus</a>
			</li>
		</ul>
		<div class="tab-inclus presta-gauche left contour container">
			<p class="intro-presta"><label for="veux-creer"><input type="checkbox" id="veux-creer" name="veut-creer" onclick="displayCreaOfferte();"> je souhaite créer mon entreprise</label> <label for="ai-salarie"><input type="checkbox" id="ai-salarie" name="ai-salarie" onclick="displaySalarie();"> j'ai des salariés</label></p>
			<ul id="creaofferte" class="list-presta" style="display:none;">
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
				<li class="bg-rose salarie" style="display:none;"><span>DUE + Adhésion aux caisses</span></li>
				<li class="bg-rose salarie" style="display:none;"><span>Bulletin <br/>de paie</span></li>
				<li class="bg-rose salarie" style="display:none;"><span>Déclarations sociales</span></li>

			</ul>
			<div class="clearfix"></div>
			<ul class="list-presta">
				<li class="bg-violet"><span>Bilan <br />et annexes </span></li>
				<li class="bg-violet"><span>Liasse<br />fiscale</span></li>
				<li class="bg-violet"><span>Optimisation<br /> Rem/dividende</span></li>
				<li class="bg-violet"><span>Déclaration<br /><acronym title="Contribution Economique et Territoriale">CET</acronym></span></li>
				<li class="bg-violet"><span>PV approbation <br />des comptes</span></li>
				<li class="bg-violet"><span>PV rémunération gérant</span></li>
				<li class="bg-violet"><span>Dépot<br /> des comptes</span></li>
				<li class="bg-violet"><span>Echéancier <br /> TNS </span></li>
			</ul>
			<p class="noir intro-presta">Notre prestation inclut évidemment:</p>
			<ul class="list-avantages noir">
				<li><img src="images/super-comptable.jpg" /><br />Un super comptable</a></li>
				<li><img src="images/coq.jpg" /><br />Une prestation 100% made in France</a></li>
				<li class="last"><img src="images/menotte.jpg" /><br />Aucun engagement de durée</a></li>
			</ul>
		</div>
		<div class="tab-noninclus presta-gauche left contour container" style="display: none">

			<h2 class="rose">Il ne manque absolument rien, tout est inclus !</h2>
			<ul>
				<li>
					<h3 class="bleu">Conseil illimité</h3>
					<p>Chez Novaa, le conseil n’est pas limité dans le temps, nous sommes là pour répondre à toutes vos interrogations</p>
				</li>
				<li>
					<h3 class="bleu">Nous nous chargeons de toutes vos déclarations obligatoires</h3>
					<p>Nous traitons directement avec l'administration pour vous faire gagner un temps précieux, et ce n'est pas en option</p>
				</li>
				<li>
					<h3 class="bleu">Nombre de lignes comptables illimité</h3>
					<p>Chez Novaa, on s'entend sur un prix fixe ! Pas question de faire varier nos tarifs en fonction du nombre de vos opérations et encore moins du nombre de lignes comptables</p>
				</li>
				<li>
					<h3 class="bleu">Outil de pilotage en ligne gratuit</h3>
					<p>Nous mettons à votre disposition une plateforme de pilotage et d'échange d'informations, le tout  gratuitement. Pourquoi ? Parce que gagner du temps en facilitant nos échanges nous permet de vous proposer un prix attractif</p>
				</li>
			</ul>
		</div>
		<!-- fin presta gauche-->
		<!-- debut form droite-->
		<div id="form-droite"  class="right">	
			<h2 class="rose">Obtenez notre devis pour ces services : </span></h2>
				<form class="formulaire bg-noir" method="post" action="merci.php">
					<p class="notice blanc clearfix">En remplissant ce formulaire, un pro s’occupe de votre devis et vous rappelle pour vous faire une proposition.</p>
					<p class="blanc"><label for="nom-lead">Nom</label><input type="text" id="nom-lead" name="nom-lead" type="text" /></p>
					<p class="blanc"><label for="activite-lead">Activité</label><input type="text" id="activite-lead" name="activite-lead" type="text" /></p>
					<p class="blanc"><label for="postal-lead">Code postal</label><input type="text" id="postal-lead" name="postal-lead" type="text" /></p>
					<p class="blanc"><label for="email-lead">Email</label><input type="text" id="email-lead" name="email-lead" type="text" /></p>
					<p class="blanc"><label for="telephone-lead">Téléphone</label><input type="text" id="telephone-lead" name="telephone-lead" type="text" /></p>
			
					<p class="rose"  style="margin:15px 15px 0;"><label for="telephone-lead">La question qui tue: à combien estimez-vous le tarif de ces prestations ? </label><input type="text" style="margin-top:15px;" id="telephone-lead" name="telephone-lead" type="text" placeholder="prix ht par mois" /></p>

					<p class="valider"><input type="submit" id="hp-submit" value="Envoyer" type="text" /></p>
				</form>

		</div><!-- fin presta droite-->
		<div class="clearfix"></div>

		</div>	<!-- fin container -->	
	</section>
	<!-- fin liste presta obtenir -->
		
		
	
	<!-- debut footer -->
	<footer>
	
		<div class="container form-footer">

			<h3>Cher Novaa, j’ai beaucoup apprécié votre site, et je souhaiterais :</h3>
		
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