<?php require_once("tracking/utm.php"); ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Besoin d'un devis d'expert comptable ? Novaa vous réserve son meilleur tarif</title>
  <link rel="stylesheet" href="css/style-novaa.css">
  <link rel="stylesheet" href="css/reset.css">  
  <script type="text/javascript" src="//use.typekit.net/ohn6zgt.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
		<noscript>
			<style>
				.ib-main a{
					cursor:pointer;
				}
				.ib-main-wrapper{
					position:absolute;
					top:0px;
					bottom:24px;
					overflow:scroll;
				}
			</style>
		</noscript>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
		<script id="previewTmpl" type="text/x-jquery-tmpl">
			<div id="ib-img-preview" class="ib-preview">
                <img src="${src}" alt="" class="ib-preview-img"/>
                <span class="ib-preview-descr" style="display:none;">${description}</span>
                <div class="ib-nav" style="display:none;">
                    <span class="ib-nav-prev">Previous</span>
                    <span class="ib-nav-next">Next</span>
                </div>
                <span class="ib-close" style="display:none;">FERMER</span>
                <div class="ib-loading-large" style="display:none;">Ca charge...</div>
            </div>		
		</script>
		<script id="contentTmpl" type="text/x-jquery-tmpl">	
			<div id="ib-content-preview" class="ib-content-preview">
                <div class="ib-teaser" style="display:none;">{{html teaser}}</div>
                <div class="ib-content-full" style="display:none;">{{html content}}</div>
                <span class="ib-close" style="display:none;">FERMER</span>
            </div>
		</script>	
    </head>
    <body>
    <header>
		<nav class="container">
			
			<ul>
				<li><a href="index.php"><img src="images/logo-novaa.png" alt="Voici le joli logo de novaa" /></a></li>
				<li><a href="creer.php"  title="Créez votre boite avec nous">Cr&eacute;er<br /> une entreprise</a></li>
				<li><a href="trouver.php" title="Voici comment notre expertise opère">Trouver votre <br /> expert comptable</a></li>
				<li><a href="obtenir.php" title="Notre meilleur prix pour vous">Obtenir <br /> nos tarifs</a></li>
				<li><a href="savoir.php" class="current"  title="Tout, tout, tout, vous saurez tout sur le cabinet">En savoir + <br /> sur Novaa</a></li>
				<li class="tel-contact rose">Paris 9, 11 rue Scribe  - 01 53 83 78 30<br><span class="violine tel-contact" >Rouen, 57 av. de Bretagne - 02 32 08 18 18</span></li>
			</ul>
		</nav>
	</header>
        <div class="container2" style="margin-top:50px;">
             <div id="ib-main-wrapper" class="ib-main-wrapper">
                <div class="ib-main">
					<a href="#"><img src="images/thumbs/approche.jpg" data-largesrc="images/large/approche.jpg" alt="image03"/><span>Une approche résolument innovante</span></a>
					
					<a href="#" class="ib-content">
                        <div class="ib-teaser bg-bleu">
                            <h2>Spécialiste <span>des TPE</span></h2>
                        </div>
                        <div class="ib-content-full">
                            <p>Novaa a construit ses services pour répondre du mieux possible aux besoins des petites entreprises.</p>
                            <p>Nos tarifs, nos prestations, nos outils, tout est pensé pour offrir aux dirigeants de TPE les solutions qu'ils méritent</p>
                            <p>Découvrez nos réponses : 01 53 83 78 30 ou rencontrons nous, 11 rue Scribe, Paris 9. </p>
                        </div>
                    </a>
                    
					<a href="#"><img src="images/thumbs/asc.jpg" data-largesrc="images/large/asc.jpg" alt="image01"/><span>Des collaborateurs dévoués et souriants</span></a>
					<a href="#"><img src="images/thumbs/baby.jpg" data-largesrc="images/large/baby.jpg" alt="image02"/><span>Une équipe qui aime gagner</span></a>
					<a href="#"><img src="images/thumbs/blonde.jpg" data-largesrc="images/large/blonde.jpg" alt="image01"/><span>Faire sa compta comme elle, ça vous tente n'est-ce-pas ?</span></a>
					<a href="#"><img src="images/thumbs/classeur.jpg" data-largesrc="images/large/classeur.jpg" alt="image02"/><span>Quand on vous dit que Novaa est carré</span></a>
					<a href="#"><img src="images/thumbs/crea.jpg" data-largesrc="images/large/crea.jpg" alt="image03"/><span>Créer votre société avec nous est simplissime</span></a>
					<a href="#"><img src="images/thumbs/dash1.jpg" data-largesrc="images/large/dash1.jpg" alt="image01"/><span>Et voici l'outil idéal pour diriger sa belle TPE</span></a>
					<a href="#"><img src="images/thumbs/vert.jpg" data-largesrc="images/large/vert.jpg" alt="image02"/><span>Novaa est écologique</span></a>
					
					<a href="#" class="ib-content">
                        <div class="ib-teaser bg-rose">
                            <h2>11 rue Scribe <span>75 009, Paris</span></h2>
                        </div>
                        <div class="ib-content-full">
                            <p>Vous souhaitez créer votre entreprise ou recherchez un expert comptable pour la vôtre, alors n'hésitez pas à passer au cabinet.</p>
                            <p>L'équipe de Novaa se tient à votre disposition pour répondre à vos questions et vous présenter nos solutions.</p>
                            <p>Allez, ne soyez pas timide, le café ou des boissons fraîches vous attendent au 11 rue Scribe, 75 009 Paris.</p>
                        </div>
                    </a>
                    
					<a href="#"><img src="images/thumbs/juju.jpg" data-largesrc="images/large/juju.jpg" alt="image03"/><span>Chez Novaa, on ne rigole pas toujours</span></a>
					<a href="#"><img src="images/thumbs/jusorange.jpg" data-largesrc="images/large/jusorange.jpgg" alt="image01"/><span>Toujours prêt à vous rencontrer</span></a>
					<a href="#"><img src="images/thumbs/justice.jpg" data-largesrc="images/large/justice.jpg" alt="image02"/><span>Une équipe de juriste à votre disposition</span></a>
					<a href="#"><img src="images/thumbs/kinder.jpg" data-largesrc="images/large/kinder.jpg" alt="image02"/><span>Quand l'appétit va, tout va chez Novaa</span></a>
					<a href="#"><img src="images/thumbs/oec.jpg" data-largesrc="images/large/oec.jpg" alt="image03"/><span>Nous sommes membre de l'ordre des Experts comptables</span></a>
					<a href="#"><img src="images/thumbs/opera.jpg" data-largesrc="images/large/opera.jpg" alt="image01"/><span>En plein Paris, à Opéra</span></a>
					<a href="#"><img src="images/thumbs/surligneur.jpg" data-largesrc="images/large/surligneur.jpg" alt="image02"/><span>Novaa, le sens du sérieux et de la précision</span></a>
					<a href="#"><img src="images/thumbs/tranquil.jpg" data-largesrc="images/large/tranquil.jpg" alt="image02"/><span>Novaa vous offre la sérénité</span></a>
					<a href="#" class="ib-content">
                        <div class="ib-teaser bg-rose">
                            <h2>Devenez client <span>super idée</span></h2>
                        </div>
                        <div class="ib-content-full">
                            <p>Vous souhaitez devenir client du cabinet Novaa et bien, tout commence par un rendez-vous avec notre équipe. Contactez-nous</p>
                           
                        </div>
                    </a>

					<a href="#"><img src="images/thumbs/wallpaper.jpg" data-largesrc="images/large/wallpaper.jpg" alt="image02"/><span>Tout est dit</span></a>

					
					<a href="#" class="ib-content">
                        <div class="ib-teaser bg-violet">
                            <h2>Recrutement <span>Futurs collègues ? c'est par ici</span></h2>
                        </div>
                        <div class="ib-content-full">
                            <p>Vous venez d'obtenir un BTS compta, votre DSCG ou êtes fraichement diplomé de votre DEC, alors il se pourrait bien que nous ayons besoin de vos talents.</p>
                            <p>Novaa recrute différents profils, merci de nous faire parvenir votre CV et lettre de motivation à l'adresse contact@l-erxpert-comptable.com</p>
                           
                        </div>
                    </a>
					<a href="#"><img src="images/thumbs/approche.jpg" data-largesrc="images/large/approche.jpg" alt="image03"/><span>Une approche résolument innovante</span></a>
					<a href="#"><img src="images/thumbs/baby.jpg" data-largesrc="images/large/baby.jpg" alt="image02"/><span>Une équipe qui aime gagner</span></a>
					<a href="#"><img src="images/thumbs/baf.jpg" data-largesrc="images/large/baf.jpg" alt="image03"/><span>Bastien, parfois pensant, toujours souriant</span></a>
					<a href="#" class="ib-content">
                        <div class="ib-teaser bg-rose">
                            <h2>RDV Gratuit<span>11 rue Scribe, Paris 9</span></h2>
                        </div>
                        <div class="ib-content-full">
                            <p>Vous souhaitez créer votre entreprise ou recherchez un expert comptable pour la vôtre, alors n'hésitez pas à passer au cabinet.</p>
                            <p>L'équipe de Novaa se tient à votre disposition pour répondre à vos questions et vous présenter nos solutions.</p>
                            <p>Allez, ne soyez pas timide, le café ou des boissons fraîches vous y attendent.</p>
                            
                           <img src="images/hp-bg-section1.jpg" />
                        </div>
                    </a>
                    <a href="#"><img src="images/thumbs/blonde.jpg" data-largesrc="images/large/blonde.jpg" alt="image01"/><span>Faire sa compta comme elle, ça vous tente n'est-ce-pas ?</span></a>
					<a href="#"><img src="images/thumbs/classeur.jpg" data-largesrc="images/large/classeur.jpg" alt="image02"/><span>Quand on vous dit que Novaa est carré</span></a>
					<a href="#"><img src="images/thumbs/crea.jpg" data-largesrc="images/large/crea.jpg" alt="image03"/><span>Créer votre société avec nous est simplissime</span></a>
					<a href="#"><img src="images/thumbs/dash1.jpg" data-largesrc="images/large/dash1.jpg" alt="image01"/><span>Et voici l'outil idéal pour diriger sa belle TPE</span></a>
					<a href="#"><img src="images/thumbs/vert.jpg" data-largesrc="images/large/vert.jpg" alt="image02"/><span>Novaa est écologique</span></a>
					<a href="#"><img src="images/thumbs/juju.jpg" data-largesrc="images/large/juju.jpg" alt="image03"/><span>Chez Novaa, on ne rigole pas toujours</span></a>
					<a href="#"><img src="images/thumbs/jusorange.jpg" data-largesrc="images/large/jusorange.jpgg" alt="image01"/><span>Toujours prêt à vous rencontrer</span></a>
					<a href="#"><img src="images/thumbs/justice.jpg" data-largesrc="images/large/justice.jpg" alt="image02"/><span>Une équipe de juriste à votre disposition</span></a>
					<a href="#"><img src="images/thumbs/kinder.jpg" data-largesrc="images/large/kinder.jpg" alt="image02"/><span>Quand l'appétit va, tout va chez Novaa</span></a>
					<a href="#"><img src="images/thumbs/oec.jpg" data-largesrc="images/large/oec.jpg" alt="image03"/><span>Nous sommes membre de l'ordre des Experts comptables</span></a>
						
					<a href="#" class="ib-content">
                        <div class="ib-teaser bg-violine">
                            <h2>01 53 83 78 30
							<span>appelez-nous</span></h2>
                        </div>
                        <div class="ib-content-full">
                            <p>Vous avez des questions sur votre entreprise ou nos services, nous vous répondrons !</p>
                          
                            <p>Allez, ne soyez pas timide, le café ou des boissons fraîches vous y attendent.</p>
                        </div>
                    </a>
                    <a href="#"><img src="images/thumbs/opera.jpg" data-largesrc="images/large/opera.jpg" alt="image01"/><span>En plein Paris, à Opéra</span></a>
					<a href="#"><img src="images/thumbs/surligneur.jpg" data-largesrc="images/large/surligneur.jpg" alt="image02"/><span></span></a>
					<a href="#"><img src="images/thumbs/tranquil.jpg" data-largesrc="images/large/tranquil.jpg" alt="image02"/><span>Novaa vous offre la sérénité</span></a>
					<a href="#"><img src="images/thumbs/wallpaper.jpg" data-largesrc="images/large/wallpaper.jpg" alt="image02"/><span>Tout est dit</span></a>
					
					<a href="#" class="ib-content">
                        <div class="ib-teaser bg-noir">
                            <h2>Des outils simples <span>un fonctionnement génial</span></h2>
                        </div>
                        <div class="ib-content-full">
                            <p>Vous souhaitez créer votre entreprise ou recherchez un expert comptable pour la vôtre, alors n'hésitez pas à passer au cabinet.</p>
                            <p>L'équipe de Novaa se tient à votre disposition pour répondre à vos questions et vous présenter nos solutions.</p>
                            <p>Allez, ne soyez pas timide, le café ou des boissons fraîches vous y attendent.</p>
                        </div>
                    </a>
					<a href="#"><img src="images/thumbs/approche.jpg" data-largesrc="images/large/approche.jpg" alt="image03"/><span>Une approche résolument innovante</span></a>
					<a href="#"><img src="images/thumbs/asc.jpg" data-largesrc="images/large/asc.jpg" alt="image01"/><span>Des collaborateurs dévoués et souriants</span></a>
					<a href="#"><img src="images/thumbs/baby.jpg" data-largesrc="images/large/baby.jpg" alt="image02"/><span>Une équipe qui aime gagner</span></a>
					<a href="#"><img src="images/thumbs/baf.jpg" data-largesrc="images/large/baf.jpg" alt="image03"/><span>Bastien, parfois pensant, toujours souriant</span></a>
					<a href="#"><img src="images/thumbs/blonde.jpg" data-largesrc="images/large/blonde.jpg" alt="image01"/><span>Faire sa compta comme elle, ça vous tente n'est-ce-pas ?</span></a>
					<a href="#"><img src="images/thumbs/classeur.jpg" data-largesrc="images/large/classeur.jpg" alt="image02"/><span>Quand on vous dit que Novaa est carré</span></a>
					<a href="#"><img src="images/thumbs/crea.jpg" data-largesrc="images/large/crea.jpg" alt="image03"/><span>Créer votre société avec nous est simplissime</span></a>
					<a href="#"><img src="images/thumbs/dash1.jpg" data-largesrc="images/large/dash1.jpg" alt="image01"/><span>Et voici l'outil idéal pour diriger sa belle TPE</span></a>
					<a href="#"><img src="images/thumbs/vert.jpg" data-largesrc="images/large/vert.jpg" alt="image02"/><span>Novaa est écologique</span></a>
					<a href="#"><img src="images/thumbs/juju.jpg" data-largesrc="images/large/juju.jpg" alt="image03"/><span>Chez Novaa, on ne rigole pas toujours</span></a>
					<a href="#"><img src="images/thumbs/jusorange.jpg" data-largesrc="images/large/jusorange.jpgg" alt="image01"/><span>Toujours prêt à vous rencontrer</span></a>
					<a href="#"><img src="images/thumbs/justice.jpg" data-largesrc="images/large/justice.jpg" alt="image02"/><span>Une équipe de juriste à votre disposition</span></a>
					<a href="#"><img src="images/thumbs/kinder.jpg" data-largesrc="images/large/kinder.jpg" alt="image02"/><span>Quand l'appétit va, tout va chez Novaa</span></a>
					
					<a href="#" class="ib-content">
                        <div class="ib-teaser bg-violet">
                            <h2>Pas d'engagement<span>de durée</span></h2>
                        </div>
                        <div class="ib-content-full">
                            <p>Vous souhaitez créer votre entreprise ou recherchez un expert comptable pour la vôtre, alors n'hésitez pas à passer au cabinet.</p>
                            <p>L'équipe de Novaa se tient à votre disposition pour répondre à vos questions et vous présenter nos solutions.</p>
                            <p>Allez, ne soyez pas timide, le café ou des boissons fraîches vous y attendent.</p>
                        </div>
                    </a>
                    <a href="#"><img src="images/thumbs/oec.jpg" data-largesrc="images/large/oec.jpg" alt="image03"/><span>Nous sommes membre de l'ordre des Experts comptables</span></a>
					<a href="#"><img src="images/thumbs/opera.jpg" data-largesrc="images/large/opera.jpg" alt="image01"/><span>En plein Paris, à Opéra</span></a>
					<a href="#"><img src="images/thumbs/surligneur.jpg" data-largesrc="images/large/surligneur.jpg" alt="image02"/><span>Novaa, le sens du sérieux et de la précision</span></a>
					<a href="#"><img src="images/thumbs/tranquil.jpg" data-largesrc="images/large/tranquil.jpg" alt="image02"/><span>Novaa vous offre la sérénité</span></a>


					<div class="clr"></div>
				</div><!-- ib-main -->
            </div><!-- ib-main-wrapper -->
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
        <script type="text/javascript" src="js/jquery.kinetic.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
			
				var $ibWrapper	= $('#ib-main-wrapper'),
				 
					Template	= (function() {
							
							// true if dragging the container
						var kinetic_moving				= false,
							// current index of the opened item
							current						= -1,
							// true if the item is being opened / closed
							isAnimating					= false,
							// items on the grid
							$ibItems					= $ibWrapper.find('div.ib-main > a'),
							// image items on the grid
							$ibImgItems					= $ibItems.not('.ib-content'),
							// total image items on the grid
							imgItemsCount				= $ibImgItems.length,
							init						= function() {
								
								// add a class ib-image to the image items
								$ibImgItems.addClass('ib-image');
								// apply the kinetic plugin to the wrapper
								loadKinetic();
								// load some events
								initEvents();
						
							},
							loadKinetic					= function() {
								
								setWrapperSize();
								
								$ibWrapper.kinetic({
									moved	: function() {
										
										kinetic_moving = true;
										
									},
									stopped	: function() {
										
										kinetic_moving = false;
										
									}
								});
								
							},
							setWrapperSize				= function() {
								
								var containerMargins	= $('#ib-top').outerHeight(true) + $('#header').outerHeight(true) + parseFloat( $ibItems.css('margin-top') );
								$ibWrapper.css( 'height', $(window).height() - containerMargins )
								
							},
							initEvents					= function() {
							
								// open the item only if not dragging the container
								$ibItems.bind('click.ibTemplate', function( event ) {
									
									if( !kinetic_moving )
										openItem( $(this) );
								
									return false;	
								
								});
								
								// on window resize, set the wrapper and preview size accordingly
								$(window).bind('resize.ibTemplate', function( event ) {
									
									setWrapperSize();
									
									$('#ib-img-preview, #ib-content-preview').css({
										width	: $(window).width(),
										height	: $(window).height()
									})
									
								});
							
							},
							openItem					= function( $item ) {
								
								if( isAnimating ) return false;
								
								// if content item
								if( $item.hasClass('ib-content') ) {
									
									isAnimating	= true;
									current	= $item.index('.ib-content');
									loadContentItem( $item, function() { isAnimating = false; } );
									
								}
								// if image item
								else {
								
									isAnimating	= true;
									current	= $item.index('.ib-image');
									loadImgPreview( $item, function() { isAnimating = false; } );
									
								}
								
							},
							// opens one image item (fullscreen)
							loadImgPreview				= function( $item, callback ) {
								
								var largeSrc		= $item.children('img').data('largesrc'),
									description		= $item.children('span').text(),
									largeImageData	= {
										src			: largeSrc,
										description	: description
									};
								
								// preload large image
								$item.addClass('ib-loading');
								
								preloadImage( largeSrc, function() {
									
									$item.removeClass('ib-loading');
									
									var hasImgPreview	= ( $('#ib-img-preview').length > 0 );
									
									if( !hasImgPreview )
										$('#previewTmpl').tmpl( largeImageData ).insertAfter( $ibWrapper );
									else
										$('#ib-img-preview').children('img.ib-preview-img')
															.attr( 'src', largeSrc )
															.end()
															.find('span.ib-preview-descr')
															.text( description );
										
									//get dimentions for the image, based on the windows size
									var	dim	= getImageDim( largeSrc );
									
									$item.removeClass('ib-img-loading');
									
									//set the returned values and show/animate preview
									$('#ib-img-preview').css({
										width	: $item.width(),
										height	: $item.height() - 64,
										left	: $item.offset().left,
										top		: $item.offset().top  + 64
									}).children('img.ib-preview-img').hide().css({
										width	: dim.width,
										height	: dim.height - 64,
										left	: dim.left,
										top		: dim.top + 64
									}).fadeIn( 400 ).end().show().animate({
										width	: $(window).width(),
										left	: 0
									}, 500, 'easeOutExpo', function() {
									
										$(this).animate({
											height	: $(window).height() - 64,
											top		: 64
										}, 400, function() {
										
											var $this	= $(this);
											$this.find('span.ib-preview-descr, span.ib-close').show()
											if( imgItemsCount > 1 )
												$this.find('div.ib-nav').show();
												
											if( callback ) callback.call();
										
										});
									
									});
									
									if( !hasImgPreview )
										initImgPreviewEvents();
									
								} );
								
							},
							// opens one content item (fullscreen)
							loadContentItem				= function( $item, callback ) {
								
								var hasContentPreview	= ( $('#ib-content-preview').length > 0 ),
									teaser				= $item.children('div.ib-teaser').html(),
									content				= $item.children('div.ib-content-full').html(),
									contentData			= {
										teaser		: teaser,
										content		: content
									};
									
								if( !hasContentPreview )
									$('#contentTmpl').tmpl( contentData ).insertAfter( $ibWrapper );
									
								//set the returned values and show/animate preview
								$('#ib-content-preview').css({
									width	: $item.width(),
									height	: $item.height() - 64,
									left	: $item.offset().left,
									top		: $item.offset().top + 64
								}).show().animate({
									width	: $(window).width(),
									left	: 0
								}, 500, 'easeOutExpo', function() {
								
									$(this).animate({
										height	: $(window).height() - 64,
										top		: 64
									}, 400, function() {
										
										var $this	= $(this),
											$teaser	= $this.find('div.ib-teaser'),
											$content= $this.find('div.ib-content-full'),
											$close	= $this.find('span.ib-close');
											
										if( hasContentPreview ) {
											$teaser.html( teaser )
											$content.html( content )
										}
									
										$teaser.show();
										$content.show();
										$close.show();
										
										if( callback ) callback.call();
									
									});
								
								});
								
								if( !hasContentPreview )
									initContentPreviewEvents();	
								
							},
							// preloads an image
							preloadImage				= function( src, callback ) {
							
								$('<img/>').load(function(){
								
									if( callback ) callback.call();
								
								}).attr( 'src', src );
							
							},
							// load the events for the image preview : navigation ,close button, and window resize
							initImgPreviewEvents		= function() {
							
								var $preview	= $('#ib-img-preview');
								
								$preview.find('span.ib-nav-prev').bind('click.ibTemplate', function( event ) {
									
									navigate( 'prev' );
									
								}).end().find('span.ib-nav-next').bind('click.ibTemplate', function( event ) {
									
									navigate( 'next' );
									
								}).end().find('span.ib-close').bind('click.ibTemplate', function( event ) {
									
									closeImgPreview();
									
								});
								
								//resizing the window resizes the preview image
								$(window).bind('resize.ibTemplate', function( event ) {
									
									var $largeImg	= $preview.children('img.ib-preview-img'),
										dim			= getImageDim( $largeImg.attr('src') );
									
									$largeImg.css({
										width	: dim.width,
										height	: dim.height,
										left	: dim.left,
										top		: dim.top
									})
									
								});
								
							},
							// load the events for the content preview : close button
							initContentPreviewEvents	= function() {
							
								$('#ib-content-preview').find('span.ib-close').bind('click.ibTemplate', function( event ) {
									
									closeContentPreview();
									
								});
								
							},
							// navigate the image items in fullscreen mode
							navigate					= function( dir ) {
								
								if( isAnimating ) return false;
								
								isAnimating		= true;
								
								var $preview	= $('#ib-img-preview'),
									$loading	= $preview.find('div.ib-loading-large');
								
								$loading.show();
								
								if( dir === 'next' ) {
									
									( current === imgItemsCount - 1 ) ? current	= 0 : ++current;
									
								}
								else if( dir === 'prev' ) {
									
									( current === 0 ) ? current	= imgItemsCount - 1 : --current;
									
								}
								
								var $item		= $ibImgItems.eq( current ),
									largeSrc	= $item.children('img').data('largesrc'),
									description	= $item.children('span').text();
									
								preloadImage( largeSrc, function() {
									
									$loading.hide();
									
									//get dimentions for the image, based on the windows size
									var	dim	= getImageDim( largeSrc );
									
									$preview.children('img.ib-preview-img')
												    .attr( 'src', largeSrc )
													.css({
										width	: dim.width,
										height	: dim.height,
										left	: dim.left,
										top		: dim.top
													})
													.end()
													.find('span.ib-preview-descr')
													.text( description );
									
									$ibWrapper.scrollTop( $item.offset().top )
											  .scrollLeft( $item.offset().left );
									
									isAnimating	= false;
									
								});
								
							},
							// closes the fullscreen image item
							closeImgPreview				= function() {
							
								if( isAnimating ) return false;
								
								isAnimating	= true;
								
								var $item	= $ibImgItems.eq( current );
								
								$('#ib-img-preview').find('span.ib-preview-descr, div.ib-nav, span.ib-close')
												.hide()
												.end()
												.animate({
													height	: $item.height(),
													top		: $item.offset().top
													}, 500, 'easeOutExpo', function() {
													
													$(this).animate({
														width	: $item.width(),
														left	: $item.offset().left
														}, 400, function() {
														
															$(this).fadeOut(function() {isAnimating	= false;});
														
													} );
												
												});
							
							},
							// closes the fullscreen content item
							closeContentPreview			= function() {
								
								if( isAnimating ) return false;
								
								isAnimating	= true;
								
								var $item	= $ibItems.not('.ib-image').eq( current );
								
								$('#ib-content-preview').find('div.ib-teaser, div.ib-content-full, span.ib-close')
														.hide()
														.end()
														.animate({
															height	: $item.height(),
															top		: $item.offset().top
														}, 500, 'easeOutExpo', function() {
															
															$(this).animate({
																width	: $item.width(),
																left	: $item.offset().left
															}, 400, function() {
																
																$(this).fadeOut(function() {isAnimating	= false;});
																
															} );
														
														});
							
							},
							// get the size of one image to make it full size and centered
							getImageDim					= function( src ) {
								
								var img     	= new Image();
								img.src     	= src;
								
								var w_w	= $(window).width(),
									w_h	= $(window).height(),
									r_w	= w_h / w_w,
									i_w	= img.width,
									i_h	= img.height,
									r_i	= i_h / i_w,
									new_w, new_h,
									new_left, new_top;
								
								if( r_w > r_i ) {
								
									new_h	= w_h;
									new_w	= w_h / r_i;
								
								}	
								else {
								
									new_h	= w_w * r_i;
									new_w	= w_w;
								
								}
								
								return {
									width	: new_w,
									height	: new_h,
									left	: (w_w - new_w) / 2,
									top		: (w_h - new_h) / 2
								};
							
							};
						
						return { init : init };
						
					})();
				
				Template.init();
				
            });
        </script>
        
        <?php require_once("tracking.php"); ?>
		
		</body>
        </html>