<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Super</title>
  <link rel="stylesheet" href="css/style-novaa.css">
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
		
	
	
				<div id="popup">
				<img src="images/dog-bag.jpg" class="left">
				<h1>Découvrez tous nos services avec vos petits yeux (ébaïs)</h1>	
				<h2>Un rendez-vous de moins d'une heure nous suffit pour vous présenter tout ce que Novaa pourrait apporter à votre entreprise. Heure et lieu du RDV à votre convenance. Et c'est 100% gratuit.</h2>
				<form class="formulaire" method="post" action="merci.php" target="_parent">
				<p><label for="nom-lead">Je m'appelle </label><input type="text" id="nom-lead" name="nom-lead" type="text" placeholder="Votre nom ici" /></p>
					<p><label for="postal-lead">J'habite à </label><input type="text" id="postal-lead" name="postal-lead"  placeholder="Code postal ou ville" type="text" /></p>
					<p><label for="email-lead">Mon adresse email est </label><input type="text" id="email-lead" placeholder="Mon adresse email" name="email-lead" type="text" /></p>
					<p><label for="telephone-lead">Vous pouvez me joindre au </label><input type="text" id="telephone-lead"  placeholder="Numéro portable ou fixe" name="telephone-lead" type="text" /></p>
					<p class="valider"><input type="submit" id="crea-submit" value="Envoyer" type="text" /></p>
					</form>	
				</div>


			</div>
	
		</div>
			
			
			<div class="clearfix"></div>
			
		<!-- fin div container -->
		</div>
			
	


	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
			 http://chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Votre navigateur est très ancien, il est temps de le mettre à jour</a> ou bien <a href="http://www.google.com/chromeframe/?redirect=true">d'installer Google Chrome</a> pour vraiment profiter de notre site.</p><![endif]-->
	
	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.9.1.min.js'>\x3C/script>")</script>
	
	
	<!-- jerem met son code ici -->
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