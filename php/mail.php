<?php

function is_email_valid($email)
{
	$isValid = FALSE;
	if (strpos($email, '@') !== FALSE && strpos($email, '.') !== FALSE && strlen($email) > 5)
	{
		$isValid = TRUE;
	}
	return $isValid;
}

function send_mail($data, $to="i-like@dmcgermany.de", $from="i-like@dmcgermany.de")
{
	// Test Email
	//$to = "dan.hachenberger@dmcgermany.de";
	$mime_boundary = "------------010602040306020006000807";

	$headers = "From: NEWSLETTER GAME <${from}>\n"
	. "Date: ".date("l j F Y, G:i")."\n";

	$headers .= "MIME-Version: 1.0\n"
	. "Content-Type: multipart/mixed; boundary=\"${mime_boundary}\"\n"
	. "Content-Transfer-Encoding: 7bit\n\n";


	$message = "";
	foreach ($data as $key => $value){
			$message .= $key . " : " . $value . "\n";
	}
	$body = "This is a multi-part message in MIME format.\n"
	. "--${mime_boundary}\n"
	. "Content-Type: text/plain; charset=\"UTF-8\"\n"
	. "Content-Transfer-Encoding: 7bit\n\n"
	. $message . "\n"
	. "--${mime_boundary}\n";

	return @mail($to, "New Newsletter Game Submission", $body, $headers);
}

if (isset($_POST['action']) && isset($_POST['email']) && is_email_valid($_POST['email'])){
	global $ready;
	$data = array();
	$data['E-Mail'] = $_POST['email'];

	if(isset($_POST['name']))
		$data['Name'] = $_POST['name'];

	if(isset($_POST['company']))
		$data['Company'] = $_POST['company'];

	if(isset($_POST['prefered_person']))
		$data['Prefered Person'] = $_POST['prefered_person'];

	send_mail($data);
	$ready = true;
}
