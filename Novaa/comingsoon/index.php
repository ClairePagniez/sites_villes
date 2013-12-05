
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" /> 
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Novaa / Coming Soon</title>
  <link href="css/style_light.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
  
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->

</head>
<body>

  <!-- MAIN CONTAINER -->

  <div class="container-narrow">

    <header>
      <h1 id="responsive_headline"><span>Novaa</span></h1>
      <h2>Nous revenons très vite ! Nous avons été bien occupé ces derniers temps à faire votre comptabilité, et nous avons eu moins de temps pour créer notre site que pour créer vos sociétés. Nous comptons sur vous pour revenir très vite ici, et surtout, contactez-nous par mail ou téléphone pour toute demande. </h2>
      <nav>
        <a href="#info" id="info-link"></a>
      </nav>
    </header>

    <hr>

    <div id="info" class="row-fluid">
      <div class="span12">
        <div class="row-fluid">

          <div class="span8 info">
            <h3><span>Novaa c'est quoi ?</span></h3>
              <p>Novaa c'est l'expertise comptable nouvelle génération. Des offres simples, des prestations propres, des outils novateurs, des équipes motivées, des tarifs bienviellants, voila ce qui nous caractérise. Si vous recherchez ces valeurs ou souhaitez rejoindre nos équipes, </p>
          </div>
          <div class="span4 info">
            <h3>Contact</h3>

            <address>
              <strong>Novaa Expertise</strong><br>
              11 rue Scribe, 75 009 Paris<br>
              <a href="tel:01 53 83 78 30">01 53 83 78 30</a>
            </address>

            <address>
              <strong>Email</strong><br>
              <a href="mailto:#">contact@novaa-expertise.com</a>
            </address>
          </div>
        </div>
      </div>
    </div>


    
    



    <footer>
      <p>&copy; Novaa Expertise 2013</p>
    </footer>

  </div> <!-- /Main Container -->


  <!-- /\/\/\/\/\/\/\/ Javascript \/\/\/\/\/\/\/\ -->

  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <!-- MailChimp -->
  <script type="text/javascript" src="js/mailing-list.js"></script>

  <!-- FitText jQuery plugin - http://fittextjs.com -->
  <script src="js/jquery.fittext.js"></script>
  <script>
    jQuery("#responsive_headline").fitText(0.6);
  </script>

  <!-- jQuery Countdown - http://keith-wood.name/countdown.html -->
  <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
  <script type="text/javascript">
  $(function () {
    $('#countdown').countdown({ 
      until: new Date(2013, 07 - 1, 31)}); // put here launch date, for exampele Date(2013, 06 - 1, 01) is june 01 2013
  });
  </script>

  <!-- Hidden box -->
  <script type="text/javascript">
  $(document).ready(function () {
  $("#info").hide();

  $("#info-link").click(function () {
    $("#info").slideToggle("slow");
    $(this).toggleClass("active"); return false;
  });
  });
  </script>

  <!-- Google Analytics -->
        <script>
            var _gaq=[['_setAccount','your id'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
</body>
</html>
