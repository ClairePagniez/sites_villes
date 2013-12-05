<?php require_once("../tracking/utm.php"); ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Démo en ligne</title>
  <link rel="stylesheet" href="/css/style-novaa.css">
  <link rel="stylesheet" href="/css/fancybox/jquery.fancybox.css">
  <link rel="stylesheet" href="/css/reset.css">  
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
				<li><a href="/index.php"><img src="/images/logo-novaa.png" alt="Voici le joli logo de novaa" /></a></li>
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
	
	<!-- Debut liste presta obtenir -->
	<div class="clearfix"></div>
	<section id="obtenir-presta">
		<div class="container">
		
		<!-- fin presta gauche-->
		<!-- debut form droite-->
		<div id="form-droite" style="margin:auto;margin-top:150px;">

			<form class="formulaire bg-noir" method="POST" action="http://go.mikogo.com" style="padding:20px 0 10px;">

				<p class="blanc"><label for="nom-lead">Identifiant de session</label><input type="text" name="sid" id="sid" type="text" /></p>
				<p class="valider" style="text-align:center;"><input type="submit" id="btnSubmit" class="hp-submit" name="btnSubmit" value="Connexion" type="text" style="margin:0 0 0 10px;" /></p>

                <input type="hidden" name="sl" value="en">
                <input type="hidden" name="css" value="">
                <input type="hidden" name="cm" value="2" />
                <input type="hidden" name="sn" value="demo">

                
            </form>

		</div><!-- fin presta droite-->
		<div class="clearfix"></div>

		</div>	<!-- fin container -->	
	</section>
	<!-- fin liste presta obtenir -->
		
		
	



	
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
	<?php require_once("../tracking.php"); ?>
</body>
</html>