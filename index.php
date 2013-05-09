<?php
// Konfiguriere, welche Suffixe erlaubt sind.
$allowed_suffixes = array('de', 'uk');

// Gibt es ueberhaupt Elemente im GET-Array?
if(!empty($_GET))
{
    // Fuer Dateinamen ( index_<$suffix>.php )
    $suffix = "";
    
    // Hole Schluessel
    foreach($_GET as $key => $val)
    {
	$suffix = $key;
	
	// verlasse sofort wieder die Schleife,
	// da wir nur den ersten Schluessel brauchen
	break 1;
    }
    
    // gibt es den Suffix in unserem Array?
    if( in_array($suffix, $allowed_suffixes) )
    {
	require_once './index_' . $suffix . '.php';
	
	// Abbruch, damit nicht die deutsche Version geladen wird
	die(); 
    }
}

// Wenn das Script _nicht_ abgewuergt wurde
require_once './index_de.php';
?>