<?php

$FILE_ALL_MAILS = "mail_adresses.txt";

$FILES = array();
$FILES[] = "muc";
$FILES[] = "oe";
$FILES[] = "uk";

/**
 * @link http://gist.github.com/385876
 */
function csv_to_array($filename='', $delimiter=',')
{
	if(!file_exists($filename) || !is_readable($filename))
	return FALSE;

	$header = NULL;
	$data = array();
	if (($handle = fopen($filename, 'r')) !== FALSE)
	{
		while (($row = fgetcsv($handle, 1000, $delimiter, '"')) !== FALSE)
		{
			if(!$header)
			$header = $row;
			else
			$data[] = array_combine($header, $row);
		}
		fclose($handle);
	}
	return $data;
}

function flatten($aNonFlat)
{
	$objTmp = (object) array('aFlat' => array());

	array_walk_recursive($aNonFlat, create_function('&$v, $k, &$t', '$t->aFlat[] = $v;'), $objTmp);

	return $objTmp->aFlat;
}

$all_mails = file($FILE_ALL_MAILS, FILE_IGNORE_NEW_LINES);
$all_mails = array_map('trim', $all_mails);


$counter = 0;
foreach ($FILES as $filename)
{

	echo "open file ".$filename.".csv \n";

	$data = array();
	$data = csv_to_array($filename.".csv", ";") or die('error reading file.');
	$data = array_map('trim', flatten($data));
	$counter += count($data);
	$res = array();
	$res = array_intersect($all_mails, $data);

	$fp = fopen($filename."_missing.csv","w") or die('cant open file');

	echo "found " . count($res) . "/" . count($data) . " missing mails... \n";

	echo "writing to new file now\n";

	foreach ($res as $val)
	{
		$line = array($val);
		fputcsv($fp, $line);
	}

	fclose($fp);

	echo "done.\n";
}

echo count($all_mails) . "/" . $counter . " missing\n";

?>