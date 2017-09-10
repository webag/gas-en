<?php
$subject = $_POST["form_subject"];
$message = "";

foreach ($_POST as $input_name => $input_val) {
	$input_val = htmlspecialchars(strip_tags(trim($input_val)));
	if ($input_name != "form_subject") {
		if ( !strpos($input_name, '_label')){
			$input_label = $input_name . '_label';
			if (!empty($_POST[$input_label])) {
				$message .= $_POST[$input_label] . ": " . $input_val . "<br>";
			} else {
				$message .= $input_name . ": " . $input_val . "<br>";
			}
		}
	}
}

require_once('class.phpmailer.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$mail->setFrom('leads@general-gas.ru', 'general-gas.ru');
//$mail->addAddress('andreiduffy@gmail.com');
$mail->addAddress('leads@general-gas.ru');
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $message;

//Обрабатываем файлы
if (isset($_FILES)) { //если есть файлы в форме
	foreach ($_FILES as $file_item) {
		if (!is_array($file_item['error'])) { //проверяем множественное или нет поле файла
			if ($file_item['error'] == UPLOAD_ERR_OK) {
				$mail->AddAttachment($file_item['tmp_name'],$file_item['name']);
			}
		} else {
			foreach ($file_item["error"] as $key => $error){
				if ($error == UPLOAD_ERR_OK) {
					$tmp_name = $file_item["tmp_name"][$key];
					$name = $file_item["name"][$key];
					$mail->AddAttachment($tmp_name,$name);
				}
			}
		}
	}
}
//Обрабатываем файлы

if(!$mail->send()){
	echo 'Отправка почты не прошла.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
	echo 'Mail OK';
}

define('CRM_HOST', 'general-gas.bitrix24.ru'); // your CRM domain name
define('CRM_PORT', '443'); // CRM server port
define('CRM_PATH', '/crm/configs/import/lead.php'); // CRM server REST service path

// CRM server authorization data
define('CRM_LOGIN', 'i.kasymov@general-gas.ru'); // login of a CRM user able to manage leads
define('CRM_PASSWORD', 'anastasia21'); // password of a CRM user
// OR you can send special authorization hash which is sent by server after first successful connection with login and password
//define('CRM_AUTH', 'e54ec19f0c5f092ea11145b80f465ekd'); // authorization hash

/********************************************************************************************/

// POST processing
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// get lead data from the form
	$postData = array(
		'ASSIGNED_BY_ID'	 => 72
        ,'TITLE'   			 => $_POST['user_name']." - ".$_POST['form_subject']
        ,'NAME'    			 => $_POST['user_name']
        ,'UF_CRM_1453839516' => (isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : "пусто")
        ,'PHONE_MOBILE'		 => (isset($_POST['user_tel']) ? preg_replace("/[^0-9]/", '', $_POST['user_tel']) : "")
        ,'EMAIL_WORK' 		 => (isset($_POST['user_email']) ? $_POST['user_email'] : "")
        ,'UF_CRM_1432704888' => (isset($_POST['user_clean']) ? $_POST['user_clean'] : "")
        ,'UF_CRM_1501235766' => (isset($_POST['user_proizv']) ? $_POST['user_proizv'] : "")
        ,'UF_CRM_1501235807' => (isset($_POST['user_kolbalon']) ? $_POST['user_kolbalon'] : "")
        ,'UF_CRM_1501235857' => (isset($_POST['user_smena']) ? $_POST['user_smena'] : "")
        ,'UF_CRM_1501235883' => (isset($_POST['utm_source']) ? $_POST['utm_source'] : "")
        ,'UF_CRM_1501235894' => (isset($_POST['utm_medium']) ? $_POST['utm_medium'] : "")
        ,'UF_CRM_1501235911' => (isset($_POST['utm_term']) ? $_POST['utm_term'] : "")
        ,'UF_CRM_1501235927' => (isset($_POST['utm_content']) ? $_POST['utm_content'] : "")
        ,'UF_CRM_1501235943' => (isset($_POST['utm_campaign']) ? $_POST['utm_campaign'] : "")
	);
	
	// append authorization data
	if (defined('CRM_AUTH'))
	{
		$postData['AUTH'] = CRM_AUTH;
	}
	else
	{
		$postData['LOGIN'] = CRM_LOGIN;
		$postData['PASSWORD'] = CRM_PASSWORD;
	}

	// open socket to CRM
	$fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
	if ($fp)
	{
		// prepare POST data
		$strPostData = '';
		foreach ($postData as $key => $value)
			$strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);

		// prepare POST headers
        $str = "POST ".CRM_PATH." HTTP/1.0\r\n";
        $str .= "Host: ".CRM_HOST."\r\n";
        $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
        $str .= "Content-Length: ".strlen($strPostData)."\r\n";
        $str .= "Connection: close\r\n\r\n";

        $str .= $strPostData;

		$str .= $strPostData;

		// send POST to CRM
		fwrite($fp, $str);

		// get CRM headers
		$result = '';
		while (!feof($fp))
		{
			$result .= fgets($fp, 128);
		}
		fclose($fp);

		// cut response headers
		$response = explode("\r\n\r\n", $result);

		$output = '<pre>'.print_r($response[1], 1).'</pre>';
	}
	else
	{
		echo 'Connection Failed! '.$errstr.' ('.$errno.')';
	}
}
else
{
	$output = '';
}

?>