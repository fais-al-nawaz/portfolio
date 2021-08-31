<?php



$f_email = cleanupentries($_POST["cv_mail"]);


$send_to = "{$f_email}";
$send_subject = "FN | CV Request";

$from_ip = $_SERVER['REMOTE_ADDR'];
$from_browser = $_SERVER['HTTP_USER_AGENT'];

function cleanupentries($entry) {
	$entry = trim($entry);
	$entry = stripslashes($entry);
	$entry = htmlspecialchars($entry);

	return $entry;
}

$f_link = "https://bit.ly/2TvIkwE";
$f_owner = "contact@faisalnawaz.in";

$message = "This email was submitted on " . date('m-d-Y') . 

"\n\nDownload CV Link: " . $f_link . 

"\n\n\nTechnical Details:\n" . $from_ip . "\n" . $from_browser;



$headers = "From: " . $f_owner . "\r\n" .
    "Reply-To: " . $f_owner . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

if (!$f_owner) {
	echo "no email";
	exit;
}else if (!$f_owner){
	echo "no name";
	exit;
}else{
	if (filter_var($f_email, FILTER_VALIDATE_EMAIL)) {
		mail($send_to, $send_subject, $message, $headers);
		echo "true";
	}else{
		echo "invalid email";
		exit;
	}
}

?>