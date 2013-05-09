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
	//--------  Configuration for js/dragdrop.js -----------
	/**
	 * this var will be used in dragdrop.js
	 * so there is no need for another *.js file for different versions
	 * 
	 * @type String
	 */
	var get_path_to_polaroids_from_index = "img/polaroids_uk/";
	
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
    
    <!-- fixing the height in style-attribute -->
    <div id="game_field" style="height: 800px;" onmousedown="javascript:scrollTo('#game_field');">

	<div id="portrait_1"></div>
	<div id="portrait_job_1"></div>
	<div id="job_1"><!--img src="img/titles_uk/fixer.png" alt="The event fixer" /--></div>

	<div id="portrait_2"></div>
	<div id="portrait_job_2"></div>
	<div id="job_2"><!--img src="img/titles_uk/guru.png" alt="The UK guru" /--></div>

	<div id="portrait_3"></div>
	<div id="portrait_job_3"></div>
	<div id="job_3"><!--img src="img/titles_uk/setter.png" alt="The trend setter" /--></div>
	
	<div id="portrait_4"></div>
	<div id="portrait_job_4"></div>
	<div id="job_4"><!--img src="img/titles_uk/wizard.png" alt="The Munich congress wizard" /--></div>

	<div id="portrait_5"></div>
	<div id="portrait_job_5"></div>
	<div id="job_5"><!--img src="img/titles_uk/boss.png" alt="The boss man" /--></div>

	<div id="portrait_6"></div>
	<div id="portrait_job_6"></div>
	<div id="job_6"><!--img src="img/titles_uk/cologne.png" alt="The Cologne contact" /--></div>
	
	<div id="portrait_7"></div>
	<div id="portrait_job_7"></div>
	<div id="job_7"><!--img src="img/titles_uk/london.png" alt="The London contact" /--></div>
	
	<div id="portrait_8"></div>
	<div id="portrait_job_8"></div>
	<div id="job_8"><!--img src="img/titles_uk/frankfurter.png" alt="The Frankfurter" /--></div>

	<div id="portrait_9"></div>
	<div id="portrait_job_9"></div>
	<div id="job_9"><!--img src="img/titles_uk/rep.png" alt="The rep-your gateway to Germany" /--></div>
	
	<div id="portrait_10"></div>
	<div id="portrait_job_10"></div>
	<div id="job_10"><!--img src="img/titles_uk/berliner.png" alt="The real Berliner" /--></div>
	
	<div id="portrait_11"></div>
	<div id="portrait_job_11"></div>
	<div id="job_11"><!--img src="img/titles_uk/hamburger.png" alt="The Hamburger" /--></div>
	
	<div id="portrait_12"></div>
	<div id="portrait_job_12"></div>
	<div id="job_12"><!--img src="img/titles_uk/dude.png" alt="The design dude" /--></div>

	<div id="portrait_13"></div>
	<div id="portrait_job_13"></div>
	<div id="job_13"><!--img src="img/titles_uk/mover.png" alt="The mover and shaker" /--></div>

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

<!-- preloading images -->
<div style="position:absolute; top:1px; left:-1000px; height: 1px; width: 1px;">
    <img src="img/polaroids_uk/bas_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_uk/christina_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_uk/ega_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_uk/emily_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_uk/eva_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_uk/jane_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_uk/kieran_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_uk/marko_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_uk/nikolas_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_uk/pat_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_uk/peter_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_uk/to_sw.png" width="1" height="1" alt="" />
    <img src="img/polaroids_uk/tobi_sw.png" width="1" height="1" alt="" />
</div>

</body>
</html>