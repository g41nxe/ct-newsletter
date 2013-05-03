<?php
	include("php/mail.php");

	header("Content-Type: text/html; charset=utf-8");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xml:lang="en">
<head>
    <title>Who is Who</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="noindex,nofollow" />
    <link rel="stylesheet" type="text/css" href="style/css/main_v1.css" />
    <link rel="stylesheet" type="text/css" href="style/css/additional_de_v1.css" />
    <!-- jqery library -->
    <script type="text/javascript" src="js/jquery/jquery-2.0.0.min.js"></script>
    <script type="text/javascript" src="js/jquery/jquery-ui-1.10.2.custom.min.js"></script>
    <!-- game code -->
    <script type="text/javascript" src="js/dragdrop.js"></script>
    <!-- other js code -->
    <script type="text/javascript" src="js/general.js"></script>

</head>

<body>

<!-- main is centered -->
<div id="main">


    <div id="header_1">
	<!-- background-image -->
    </div>

    <div id="header_2">
	<!-- background-image -->
	<div id="header_2_text">
	    <!--img src="img/alte_hasen_u_neue_gesichter.png" alt="Alte Hasen und neue Gesichter bei C&amp;T. Wer ist wer - und wer macht was?&#10;Spiel mit uns und gewinne ein Abendessen mit einem C&amp;T&lsquo;ler deiner Wahl!" /-->
	    <span>Alte Hasen und neue Gesichter bei C&amp;T. Wer ist wer - und wer macht was?</span><br /><b>Spiel mit uns und gewinne ein Abendessen mit einem C&amp;T&lsquo;ler deiner Wahl!</b>
	</div>
    </div>

    <div id="game_field" onmousedown="javascript:jumpTo('hook_game_field');">
	<a name="hook_game_field">&nbsp;</a>


	<div id="portrait_1"></div>
	<div id="portrait_job_1"></div>
	<div id="job_1"><img src="img/titles/head_usa.png" alt="Head USA" /></div>

	<div id="portrait_2"></div>
	<div id="portrait_job_2"></div>
	<div id="job_2"><img src="img/titles/front_office.png" alt="Front Office" /></div>

	<div id="portrait_3"></div>
	<div id="portrait_job_3"></div>
	<div id="job_3"><img src="img/titles/head_spa.png" alt="Head Spain &amp; Portugal" /></div>
	<div id="portrait_4"></div>
	<div id="portrait_job_4"></div>
	<div id="job_4"><img src="img/titles/head_fr.png" alt="Head France &amp; Benelux" /></div>

	<div id="portrait_5"></div>
	<div id="portrait_job_5"></div>
	<div id="job_5"><img src="img/titles/head_uk.png" alt="Head UK" /></div>

	<div id="portrait_6"></div>
	<div id="portrait_job_6"></div>
	<div id="job_6"><img src="img/titles/head_fra.png" alt="Head Frankfurt" /></div>

	<div id="portrait_7"></div>
	<div id="portrait_job_7"></div>
	<div id="job_7"><img src="img/titles/sales.png" alt="Sales France &amp; Belgium" /></div>

	<div id="portrait_8"></div>
	<div id="portrait_job_8"></div>
	<div id="job_8"><img src="img/titles/east_eu.png" alt="Head Eastern Europe" /></div>

    </div>

    <div id="link_to_website">
	<img src="img/link_to_web.png" width="800" height="290" border="0" usemap="#map_link_to_web" alt="Visit the Conference &amp; Touring Website" />

	<map name="map_link_to_web" id="link_to_web">
	    <area shape="rect" coords="190,153,781,265" alt="Link to dmcgermany.de" href="http://www.dmcgermany.de/about-us/" target="_blank" />
	</map>
    </div>

    <div id="on_success">
	<a name="hook_success">&nbsp;</a>
    </div>

    <div id="participant_form">
	<div id="formular">
	<form action="#" method="post">
	<fieldset>
	    <span class="short">Name:</span> <input class="long" type="text" name="username" value="" /><br />
	    <span class="short" >Unternehmen:</span> <input class="long"type="text" name="company" value="" /><br />
	    <span class="short">E-Mail-Adresse:</span> <input class="long" type="text" name="email" value="" /><br />
	    <span class="long">Mit diesem C&amp;T&lsquo;ler würde ich gerne Essen gehen:</span> <input class="short" type="text" name="prefered_person" value="" /><br />
		<input id="submit" type="submit" name="action" value="Ja, ich mag gutes Essen - und will gewinnen!"/>
	</fieldset>
	</form>
	</div>
    </div>

    <div id="imex">
		<p>Wir dr&uuml;cken dir die Daumen f&uuml;r unser gemeinsames Abendessen! Inder Zwischenzeit triff uns doch auf der IMEX! Dieses Jahr findest du uns am <br /> <a id="highlight" href="#">M&uuml;nchen Stand!</a></p>
    </div>
    <div id="footer">
    <p>
    	Conference &amp; Touring | C &amp; T GmbH | Kaiserdamm 110 | D - 14057 Berlin <br />
    	Telf.: +49 (0) 30 / 30 12 80 | <a href="mailto:info@dmcgermany.de">info@dmcgermany.de</a> <br />
    	Conference &amp; Touring is part of:
	</p>
    </div>

</div><!-- END: div-main -->


</body>
</html>