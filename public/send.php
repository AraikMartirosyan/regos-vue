<?php 

$captcha;
if (isset($_POST['token'])) {
	$captcha = $_POST['token'];
}

$secretKey = "6LfrkusZAAAAAHLWfDFRaukvWSk6D2SWZm06PvTb";
$ip = $_SERVER['REMOTE_ADDR'];


$url =  'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey .  '&response=' . $_POST['token'];
$response = file_get_contents($url);
$responseKeys = json_decode($response, true);
header('Content-type: application/json');


if ($responseKeys["success"] && $responseKeys["score"] >= 0.5) {
	echo json_encode(array('success' => 'true', 'om_score' => $responseKeys["score"], 'token' => $_POST['token']));

	$project_name = 'Regos';
	$admin_email  = 'sales@easytrade.uz';
	$form_subject = trim($_POST["form_subject"]);
	
	function adopt($text) {
		return '=?UTF-8?B?'.Base64_encode($text).'?=';
	}

	$headers = "MIME-Version: 1.0" . PHP_EOL .
	"Content-Type: text/html; charset=utf-8" . PHP_EOL .
	'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
	'Reply-To: '.$admin_email.'' . PHP_EOL;
	$tel = $_POST['tel'];
	$name = $_POST['name'];
	$message = $name . ' ' . $tel;
	mail($admin_email, adopt($form_subject), $message, $headers );
		
 }else {
	echo json_encode(array('success' => 'false', 'om_score' => $responseKeys["score"], 'token' => $_POST['token']));
	}



?>