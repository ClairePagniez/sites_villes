<?php
$domaine = 'novaa-expertise.com';
if(ereg('[0-9]{4}', $_GET['date'])) {
  $dateshort = $_GET['date'];
  $datelong = '20'.$dateshort;
} else {
  exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang='fr'>
<head>
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<title>Statistics for <?php echo $domaine.' ('.$datelong.')' ?> </title>
<style type="text/css">
<!--
body { font: 11px verdana, arial, helvetica, sans-serif; background-color: #FFFFFF; margin-top: 0; margin-bottom: 0; }
.aws_bodyl  { }
.aws_border { border-collapse: collapse; background-color: #CCCCDD; padding: 1px 1px 1px 1px; margin-top: 0px; margin-bottom: 0px; }
.aws_title  { font: 13px verdana, arial, helvetica, sans-serif; font-weight: bold; background-color: #CCCCDD; text-align: center; margin-top: 0; margin-bottom: 0; padding: 1px 1px 1px 1px; color: #000000; }
.aws_blank  { font: 13px verdana, arial, helvetica, sans-serif; background-color: #FFFFFF; text-align: center; margin-bottom: 0; padding: 1px 1px 1px 1px; }
.aws_data {
	background-color: #FFFFFF;
	border-top-width: 1px;   
	border-left-width: 0px;  
	border-right-width: 0px; 
	border-bottom-width: 0px;
}
.aws_formfield { font: 13px verdana, arial, helvetica; }
.aws_button {
	font-family: arial,verdana,helvetica, sans-serif;
	font-size: 12px;
	border: 1px solid #ccd7e0;
	background-image : url(/awstats-icon/other/button.gif);
}
th		{ border-color: #ECECEC; border-left-width: 0px; border-right-width: 1px; border-top-width: 0px; border-bottom-width: 1px; padding: 1px 2px 1px 1px; font: 11px verdana, arial, helvetica, sans-serif; text-align:center; color: #000000; }
th.aws	{ border-color: #ECECEC; border-left-width: 0px; border-right-width: 1px; border-top-width: 0px; border-bottom-width: 1px; padding: 1px 2px 1px 1px; font-size: 13px; font-weight: bold; }
td		{ border-color: #ECECEC; border-left-width: 0px; border-right-width: 1px; border-top-width: 0px; border-bottom-width: 1px; font: 11px verdana, arial, helvetica, sans-serif; text-align:center; color: #000000; }
td.aws	{ border-color: #ECECEC; border-left-width: 0px; border-right-width: 1px; border-top-width: 0px; border-bottom-width: 1px; font: 11px verdana, arial, helvetica, sans-serif; text-align:left; color: #000000; padding: 0px;}
td.awsm	{ border-left-width: 0px; border-right-width: 0px; border-top-width: 0px; border-bottom-width: 0px; font: 11px verdana, arial, helvetica, sans-serif; text-align:left; color: #000000; padding: 0px; }
b { font-weight: bold; }
a { font: 11px verdana, arial, helvetica, sans-serif; }
a:link    { color: #0011BB; text-decoration: none; }
a:visited { color: #0011BB; text-decoration: none; }
a:hover   { color: #605040; text-decoration: underline; }
.currentday { font-weight: bold; }
//-->
</style>
</head>

<body style="margin-top: 0px" class="aws_bodyl">
<a name="menu">&nbsp;</a>
<table class="aws_border" border="0" cellpadding="2" cellspacing="0" width="100%">
<tr><td>

<table class="aws_data" border="0" cellpadding="1" cellspacing="0" width="100%">
<tr><td class="awsm"><b>Statistiques de:</b></td></tr><tr><td class="aws"><span style="font-size: 12px;"> <?php echo $domaine ?></span></td></tr>
</table>
</td></tr></table>
<br />

<table cellspacing="0" cellpadding="0" border="0">
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#top" target="mainright">Résumé</a></td></tr>
<tr><td class="awsm" width="240"><b>Quand:</b></td>
</tr>
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#month" target="mainright">Historique mensuel</a></td></tr>
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#daysofmonth" target="mainright">Jours du mois</a></td></tr>

<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#daysofweek" target="mainright">Jours de la semaine</a></td></tr>
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#hours" target="mainright">Heures</a></td></tr>
<tr><td class="awsm" width="240"><b>Qui:</b></td>
</tr>
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#countries" target="mainright">Pays</a></td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.alldomains.html' ?>" target="mainright">Liste complète</a>
</td></tr>
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#visitors" target="mainright">Hôtes</a></td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.allhosts.html' ?>" target="mainright">Liste complète</a>
</td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.lasthosts.html' ?>" target="mainright">Dernière visite</a>

</td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.unknownip.html' ?>" target="mainright">Adresses IP non résolues</a>
</td></tr>

<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#robots" target="mainright">Visiteurs Robots/Spiders</a></td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.allrobots.html' ?>" target="mainright">Liste complète</a>
</td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.lastrobots.html' ?>" target="mainright">Dernière visite</a>
</td></tr>
<tr><td class="awsm"><b>Navigation:</b></td>

</tr>
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#sessions" target="mainright">Durée des visites</a></td></tr>
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#filetypes" target="mainright">Types de fichiers</a></td></tr>
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#urls" target="mainright">Pages vues</a>
</td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.urldetail.html' ?>" target="mainright">Liste complète</a>
</td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.urlentry.html' ?>" target="mainright">Entrée</a>

</td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.urlexit.html' ?>" target="mainright">Sortie</a>
</td></tr>
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#os" target="mainright">Systèmes exploitation</a></td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.osdetail.html' ?>" target="mainright">Versions</a>
</td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.unknownos.html' ?>" target="mainright">Inconnu</a>

</td></tr>
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#browsers" target="mainright">Navigateurs</a></td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.browserdetail.html' ?>" target="mainright">Versions</a>
</td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.unknownbrowser.html' ?>" target="mainright">Inconnu</a>
</td></tr>
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#screensizes" target="mainright">Résolution écran</a></td></tr>

<tr><td class="awsm" width="240"><b>Origine/Referer:</b></td>
</tr>
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#referer" target="mainright">Origine de la connexion</a></td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.refererse.html' ?>" target="mainright">Moteurs de recherche</a>

</td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.refererpages.html' ?>" target="mainright">Sites référenceurs</a>
</td></tr>

<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#keys" target="mainright">Recherche</a></td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.keyphrases.html' ?>" target="mainright">Phrases&nbsp;clés</a>
</td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.keywords.html' ?>" target="mainright">Mots&nbsp;clés</a>
</td></tr>
<tr><td class="awsm" width="240"><b>Autres:</b></td>

</tr>
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#filetypes" target="mainright">Compression web</a></td></tr>
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#misc" target="mainright">Divers</a></td></tr>
<tr><td class="awsm"><a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.html' ?>#errors" target="mainright">Codes Status HTTP</a></td></tr>
<tr><td class="awsm"> &nbsp; <img height="8" width="9" src="/awstats-icon/other/page.png" alt="..." /> <a href="<?php echo 'awstats.'.$domaine.'.'.$dateshort.'.errors404.html' ?>" target="mainright">Pages non trouvées</a>
</td></tr>
</table>
<br />

</body>

</html>