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
    <link rel="stylesheet" type="text/css" href="style/css/additional_fr_v1.css" />
    <!-- jqery library -->
    <script type="text/javascript" src="js/jquery/jquery-2.0.0.min.js"></script>
    <script type="text/javascript" src="js/jquery/jquery-ui-1.10.2.custom.min.js"></script>
    <!-- game code -->
    <script type="text/javascript">
	//--------  Configuration for js/dragdrop.js -----------
	/**
	 * this var will be used in dragdrop.js
	 * so there is no need for another *.js file for different versions
	 * 
	 * @type String
	 */
	var get_path_to_polaroids_from_index = "img/polaroids_fr/";
	
	/**
	 * Use this Objects as a map of #ids (of divs) containing the 
	 * job titles to #ids (of divs) containting the portraits 
	 * and vice versa
	 * 
	 * @type Array
	 */
	var job2portrait = {
	    "job_1" : "portrait_1",
	    "job_2" : "portrait_2",
	    "job_3" : "portrait_3",
	    "job_4" : "portrait_4",
	    "job_5" : "portrait_5",
	    "job_6" : "portrait_6",
	    "job_7" : "portrait_7",
	    "job_8" : "portrait_8",
	    "job_9" : "portrait_9",
	    "job_10" : "portrait_10",
	    "job_11" : "portrait_11",
	    "job_12" : "portrait_12",
	    "job_13" : "portrait_13"
	};

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


    <div id="header_1" style="background-image: url('img/head_fr.png'); height: 257px;">
	<!-- background-image -->
    </div>

    <div id="header_2">
	<!-- background-image -->
	<div id="header_2_text" style="top:20px;">
	    <!--img src="img/alte_hasen_u_neue_gesichter.png" alt="Alte Hasen und neue Gesichter bei C&amp;T. Wer ist wer - und wer macht was?&#10;Spiel mit uns und gewinne ein Abendessen mit einem C&amp;T&lsquo;ler deiner Wahl!" /-->
	    <span>Faîtes connaissance avec l’ancienne et nouvelle génération de C&amp;T.<br />
Qui est qui et qui fait quoi?</span> <b>Jouez avec nous et gagnez un éductour avec vos collègues dans la destination allemande de votre choix!</b>
	</div>
    </div>
    
    <!-- fixing the height in style-attribute -->
    <div id="game_field" style="height: 800px;" onmousedown="javascript:scrollTo('#game_field');">

	<div id="portrait_1"></div>
	<div id="portrait_job_1"></div>
	<div id="job_1"><!--img src="img/titles_fr/fixer.png" alt="The event fixer" /--></div>

	<div id="portrait_2"></div>
	<div id="portrait_job_2"></div>
	<div id="job_2"><!--img src="img/titles_fr/guru.png" alt="The UK guru" /--></div>

	<div id="portrait_3"></div>
	<div id="portrait_job_3"></div>
	<div id="job_3"><!--img src="img/titles_fr/setter.png" alt="The trend setter" /--></div>
	
	<div id="portrait_4"></div>
	<div id="portrait_job_4"></div>
	<div id="job_4"><!--img src="img/titles_fr/wizard.png" alt="The Munich congress wizard" /--></div>

	<div id="portrait_5"></div>
	<div id="portrait_job_5"></div>
	<div id="job_5"><!--img src="img/titles_fr/boss.png" alt="The boss man" /--></div>

	<div id="portrait_6"></div>
	<div id="portrait_job_6"></div>
	<div id="job_6"><!--img src="img/titles_fr/cologne.png" alt="The Cologne contact" /--></div>
	
	<div id="portrait_7"></div>
	<div id="portrait_job_7"></div>
	<div id="job_7"><!--img src="img/titles_fr/london.png" alt="The London contact" /--></div>
	
	<div id="portrait_8"></div>
	<div id="portrait_job_8"></div>
	<div id="job_8"><!--img src="img/titles_fr/frankfurter.png" alt="The Frankfurter" /--></div>

	<div id="portrait_9"></div>
	<div id="portrait_job_9"></div>
	<div id="job_9"><!--img src="img/titles_fr/rep.png" alt="The rep-your gateway to Germany" /--></div>
	
	<div id="portrait_10"></div>
	<div id="portrait_job_10"></div>
	<div id="job_10"><!--img src="img/titles_fr/berliner.png" alt="The real Berliner" /--></div>
	
	<div id="portrait_11"></div>
	<div id="portrait_job_11"></div>
	<div id="job_11"><!--img src="img/titles_fr/hamburger.png" alt="The Hamburger" /--></div>
	
	<div id="portrait_12"></div>
	<div id="portrait_job_12"></div>
	<div id="job_12"><!--img src="img/titles_fr/dude.png" alt="The design dude" /--></div>

	<div id="portrait_13"></div>
	<div id="portrait_job_13"></div>
	<div id="job_13"><!--img src="img/titles_fr/mover.png" alt="The mover and shaker" /--></div>

    </div>

    <div id="link_to_website">
	<img src="img/middle_fr.png" width="800" height="290" border="0" usemap="#map_link_to_web" alt="Visit the Conference &amp; Touring Website" />

	<map name="map_link_to_web" id="link_to_web">
	    <area shape="rect" coords="190,153,781,265" alt="Link to dmcgermany.de" href="http://www.dmcgermany.de/destination-management/" target="_blank" />
	</map>
    </div>

    <div id="on_success" style="background-image: url('img/correct_fr.png');">
	<a name="hook_success">&nbsp;</a>
    </div>

    <div id="participant_form" style="background-image: url('img/participant_form_bg_fr.png'); height: 356px;">
	<div id="formular">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']; ?>" >
	<fieldset>
	    <span class="short">Nom:</span> <input class="long" type="text" name="name" value="" /> <br />
	    <span class="short" >Entreprise:</span> <input class="long" type="text" name="company" value="" /> <br />
	    <span class="short">Adresse E-Mail:</span> <input class="long" type="text" name="email" value="" /> <br />
	    <span class="long" style="display:none;">Mit diesem C&amp;T&lsquo;ler würde ich gerne Essen gehen:</span> <input class="short" style="display:none;" type="text" name="prefered_person" value="n/a" /> <br />
		<input id="submit" type="submit" name="action" value="Oui, je veux venir en Allemagne!"/>
	</fieldset>
	</form>
	</div>
    </div>

    <div id="imex">
		<p style="font-size: 16px;">Nous croisons les doigts pour que vous soyez l’heureux(se) gagnant(e)! En attendant, vous pouvez toujours nous rencontrer lors de l’IMEX à Francfort ! Vous nous trouverez au
<br /> <a id="highlight" href="https://portal.imex-frankfurt.com/vex-2013/exweb.php?back=vexsearch.php$$exhibname=conference%20&%20touring$standnum=$action=specific&uid=258472">Stand de Munich (G170)</a></p>
    </div>
    <div id="footer">
    <p>
    	Conference &amp; Touring | C &amp; T GmbH | Kaiserdamm 110 | D - 14057 Berlin <br />
    	Telf.: +49 (0) 30 / 30 12 80 | <a href="mailto:info@dmcgermany.de">info@dmcgermany.de</a> <br />
    	Conference &amp; Touring is part of:
	</p>
    </div>

<!--div style="text-align: center; font-family: Verdana; color:#808080; font-size: 10px; line-height: 10px;">  Si vous ne pouvez pas voir notre newsletter, veuillez cliquer <b><a style="color:#808080; text-decoration: none;" href="http://newsletter.dmcgermany.de/?fr" target="_blank">ici</a></b> pour consulter la version en ligne.<br /> Si vous souhaitez vous désabonner, veuillez envoyer un E-mail à<br /><b><a  style="color:#808080; text-decoration: none;" href="mailto:info@dmcgermany.de?subject=Unsubscribtion Newsletter">info@dmcgermany.de</a></b><br /><br />
</div-->
    
</div><!-- END: div-main -->

<!-- preloading images -->
<div style="position:absolute; top:1px; left:-1000px; height: 1px; width: 1px;">
    <img src="img/polaroids_fr/babe_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_fr/baga_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_fr/eva_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_fr/friede_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_fr/kaq_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_fr/lydie_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_fr/mandy_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_fr/maria_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_fr/peter_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_fr/regina_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_fr/romy_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_fr/sarah_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_fr/ulst_sw.png" width="1" height="1" alt="" />
</div>

</body>
</html>