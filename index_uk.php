<?php
header("Content-Type: text/html; charset=utf-8");
	global $ready;
	$ready = false;
	// Send email with POST data
	include("php/mail.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xml:lang="en">
<head>
    <title>Who is Who</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="noindex,nofollow" />
    <link rel="stylesheet" type="text/css" href="style/css/main_v1.css" />
    <link rel="stylesheet" type="text/css" href="style/css/additional_uk_v1.css" />
    <!-- jqery library -->
    <script type="text/javascript" src="js/jquery/jquery-2.0.0.min.js"></script>
    <script type="text/javascript" src="js/jquery/jquery-ui-1.10.2.custom.min.js"></script>
    <!-- game code -->
    <script type="text/javascript">
	/**
	 * this var will be used in dragdrop.js
	 * so there is no need for another *.js file for different versions
	 * 
	 * @type String
	 */
	var get_path_to_polaroids_from_index = "img/polaroids_uk/";
    </script>
    <script type="text/javascript" src="js/dragdrop.js"></script>
    <!-- other js code -->
    <script type="text/javascript" src="js/general.js"></script>

	<!-- stuff to be done after for was submitted -->
	<?php
    if ($ready)
    	echo '<script type="text/javascript" src="js/action.js"></script>';
    if (isset($_GET['solve']))
    	echo '<script type="text/javascript">$(document).ready(function(){ solve(); });</script>';
	?>

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

    <div id="game_field" onmousedown="javascript:scrollTo('#game_field');">

	<div id="portrait_1"></div>
	<div id="portrait_job_1"></div>
	<div id="job_1"><!--img src="img/titles/head_usa.png" alt="The event fixer" /--></div>

	<div id="portrait_2"></div>
	<div id="portrait_job_2"></div>
	<div id="job_2"><!--img src="img/titles/front_office.png" alt="The UK guru" /--></div>

	<div id="portrait_3"></div>
	<div id="portrait_job_3"></div>
	<div id="job_3"><!--img src="img/titles/head_spa.png" alt="The trend setter" /--></div>
	<div id="portrait_4"></div>
	<div id="portrait_job_4"></div>
	<div id="job_4"><!--img src="img/titles/head_fr.png" alt="The Munich congress wizard" /--></div>

	<div id="portrait_5"></div>
	<div id="portrait_job_5"></div>
	<div id="job_5"><!--img src="img/titles/head_uk.png" alt="the boss man" /--></div>

	<div id="portrait_6"></div>
	<div id="portrait_job_6"></div>
	<div id="job_6"><!--img src="img/titles/head_fra.png" alt="The cologne contact" /--></div>

	<div id="portrait_9"></div>
	<div id="portrait_job_6"></div>
	<div id="job_6"><!--img src="img/titles/head_fra.png" alt="The London contact" /--></div>

	<div id="portrait_13"></div>
	<div id="portrait_job_13"></div>
	<div id="job_13"><!--img src="img/titles/head_ita.png" alt="The Frankfurter" /--></div>

	<div id="portrait_14"></div>
	<div id="portrait_job_14"></div>
	<div id="job_14"><!--img src="img/titles/pm_uk.png" alt="The rep - your gateway to Germany" /--></div>

	<div id="portrait_15"></div>
	<div id="portrait_job_15"></div>
	<div id="job_15"><!--img src="img/titles/head_col.png" alt="The real Berliner" /--></div>

	<div id="portrait_16"></div>
	<div id="portrait_job_16"></div>
	<div id="job_16"><!--img src="img/titles/head_muc.png" alt="The Hamburger" /--></div>

	<div id="portrait_17"></div>
	<div id="portrait_job_17"></div>
	<div id="job_17"><!--img src="img/titles/head_cru.png" alt="The design dude" /--></div>

	<div id="portrait_18"></div>
	<div id="portrait_job_18"></div>
	<div id="job_18"><!--img src="img/titles/buis_dev.png" alt="THe mover and shaker" /--></div>

    </div>

    <div id="link_to_website">
	<img src="img/link_to_web.png" width="800" height="290" border="0" usemap="#map_link_to_web" alt="Visit the Conference &amp; Touring Website" />

	<map name="map_link_to_web" id="link_to_web">
	    <area shape="rect" coords="190,153,781,265" alt="Link to dmcgermany.de" href="http://www.dmcgermany.de/destination-management/" target="_blank" />
	</map>
    </div>

    <div id="on_success">
	<a name="hook_success">&nbsp;</a>
    </div>

    <div id="participant_form">
	<div id="formular">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	<fieldset>
	    <span class="short">Name:</span> <input class="long" type="text" name="name" value="" /> <br />
	    <span class="short" >Unternehmen:</span> <input class="long" type="text" name="company" value="" /> <br />
	    <span class="short">E-Mail-Adresse:</span> <input class="long" type="text" name="email" value="" /> <br />
	    <span class="long">Mit diesem C&amp;T&lsquo;ler würde ich gerne Essen gehen:</span> <input class="short" type="text" name="prefered_person" value="" /> <br />
		<input id="submit" type="submit" name="action" value="Ja, ich mag gutes Essen - und will gewinnen!"/>
	</fieldset>
	</form>
	</div>
    </div>

    <div id="imex">
		<p>Wir dr&uuml;cken dir die Daumen f&uuml;r unser gemeinsames Abendessen! In der Zwischenzeit triff uns doch auf der IMEX! Dieses Jahr findest du uns am <br /> <a id="highlight" href="https://portal.imex-frankfurt.com/vex-2013/exweb.php?back=vexsearch.php$$exhibname=conference%20&%20touring$standnum=$action=specific&uid=258472">M&uuml;nchen Stand!</a></p>
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