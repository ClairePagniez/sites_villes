<?php
	if ($_GET["utm_campaign"] && !$_COOKIE["NovaaUTMCampaign"])
		setcookie("NovaaUTMCampaign", $_GET["utm_campaign"], time()+3600, "/");
	if ($_GET["utm_source"] && !$_COOKIE["NovaaUTMSource"])
		setcookie("NovaaUTMSource", $_GET["utm_source"], time()+3600, "/");
	if ($_GET["utm_medium"] && !$_COOKIE["NovaaUTMMedium"])
		setcookie("NovaaUTMMedium", $_GET["utm_medium"], time()+3600, "/");
	