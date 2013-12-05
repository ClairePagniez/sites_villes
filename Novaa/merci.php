<?php

if (isset($_POST["nom-lead"]) || isset($_POST["nom-lead-footer"])) {

	require("phpmailer/class.phpmailer.php"); 
 
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->IsHTML(true);
	$mail->SMTPAuth = false;
	$mail->Host = "localhost";

	$message = "Nom : " . ($_POST["nom-lead"] ? $_POST["nom-lead"] : $_POST["nom-lead-footer"])
			. "<br/>Prenom : "
			. "<br/>CodePostal : " . ($_POST["postal-lead"] ? $_POST["postal-lead"] : $_POST["postal-lead-footer"])
			. "<br/>Ville : " . ($_POST["ville-lead"] ? $_POST["ville-lead"] : $_POST["ville-lead-footer"])
			. "<br/>Telephone : " . ($_POST["telephone-lead"] ? $_POST["telephone-lead"] : $_POST["telephone-lead-footer"])
			. "<br/>Email : " . ($_POST["email-lead"] ? $_POST["email-lead"] : $_POST["email-lead-footer"])
			. "<br/>Activite : " . ($_POST["activite-lead"] ? $_POST["activite-lead"] : $_POST["activite-lead-footer"])
			. "<br/>DejaCree : "
			. "<br/>ChiffresAffaires : "
			. "<br/>Veut créer : " . (isset($_POST["veut-creer"]) ? ($_POST["veut-creer"] ? $_POST["veut-creer"] : "non") : "NR")
			. "<br/>Salarie : " . (isset($_POST["ai-salarie"]) ? ($_POST["ai-salarie"] ? $_POST["ai-salarie"] : "non") : "NR")
			. "<br/>SiteProvenance : www.novaa-expertise.com/ "
			. "<br/>Source : " . $_COOKIE["NovaaUTMSource"]
			. "<br/>Medium : " . $_COOKIE["NovaaUTMMedium"]
			. "<br/>NomCampagne : " . $_COOKIE["NovaaUTMCampaign"]
			. "<br/>LandingProvenance : " . ($_POST["landing-lead"] ? $_POST["landing-lead"] : $_POST["landing-lead-footer"])
			. "<br/>Referer : " . $_SERVER["HTTP_REFERER"];

	$mail->From = "contact@novaa-expertise.com";
	$mail->FromName = "contact@novaa-expertise.com";
	$mail->Sender = "contact@novaa-expertise.com";
	$mail->AddAddress("contact@l-expert-comptable.com");
	// $mail->AddAddress("jeremy.oppus@infoneo.fr");
	$mail->AddBCC("maxime.digue@infoneo.fr");
	 
	$mail->Subject = "Nouvelle lead NOVAA";
	$mail->Body = stripslashes(iconv("UTF-8", "CP1252", $message));
	
	$mail->Send();

}

?>
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
	<header>
		<nav class="container">
			
			<ul>
				<li><a href="index.php"><img src="images/logo-novaa.png" alt="Voici le joli logo de novaa" /></a></li>
				<li class="prems">Vous <br />souhaitez</li>
				<li><a href="creer.php" title="Créez votre boite avec nous">Cr&eacute;er<br /> une entreprise</a></li>
				<li><a href="trouver.php" title="Voici comment notre expertise opère">Trouver votre <br /> expert comptable</a></li>
				<li><a href="obtenir.php" title="Notre meilleur prix pour vous">Obtenir <br /> nos tarifs</a></li>
				<li><a href="savoir.php" title="Tout, tout, tout, vous saurez tout sur le cabinet">En savoir + <br /> sur Novaa</a></li>
				<li class="tel-contact rose">Paris 9, 11 rue Scribe  - 01 53 83 78 30<br><span class="violine tel-contact" >Rouen, 57 av. de Bretagne - 02 32 08 18 18</span></li>
			</ul>
		</nav>
	</header>
	<div class="clearfix"></div>

	<div class="clearfix"></div>
	<section id="creation">
		<div class="container">
			<div id="merci" class="center">	
				<h1>Super, on va bientôt se connaitre</h1>	
				<img src="images/dog.jpg"/>
				<h2>Novaa va vous recontacter trèèèès rapidement</h2>	
			</div>
	
		</div>
			
			
			<div class="clearfix"></div>
			
		<!-- fin div container -->
		</div>
			
	
	<!-- debut footer -->
	
	<div id="under-footer" class="bottom">
		<div class="container">
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
	<?php require_once("tracking/adwords.php"); ?>
	<?php require_once("tracking/analytics.php"); ?>
</body>
</html>