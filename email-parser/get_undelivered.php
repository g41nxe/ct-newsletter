<?php
$dateinamen= file('datiliste_2.txt');
$folder = 'mails/';

foreach($dateinamen as $dateiname)
{
	$curr_file = file(trim($folder) . trim($dateiname));

	for($i = 7; $i < count($curr_file) ; $i++ )
	{
		if (filter_var( trim($curr_file[$i]), FILTER_VALIDATE_EMAIL) )
		{
			echo trim($curr_file[$i]) , "\n"; // => Copy & paste
		}
		else
		{
			break;
		}
	}
}
?>