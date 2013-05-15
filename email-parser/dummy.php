<?php
$dateinamen = file('dateiliste.txt');

foreach($dateinamen as $dateiname)
{
	$curr_file = file('mails_konverted_names/' . trim($dateiname));
	
	for($i = 7; $i < count($curr_file) ; $i++ )
	{
		if (filter_var( trim($curr_file[$i]), FILTER_VALIDATE_EMAIL) )
		{
			echo trim($curr_file[$i]) , "<br />\n"; // => Copy & paste
		}
		else
		{
			break;
		}
	}
}
?>