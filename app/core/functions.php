<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function show($data)
{
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

function check_error()
{

	if(isset($_SESSION['error']) && $_SESSION['error'] != "")
	{
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}
}

function esc($data)
{
	return addslashes($data);
}

function redirect($link)
{
	header("Location: " . ROOT . $link);
	die;
}

function enviar_email($email, $asunto, $mensaje, $nombre){

	header('Content-Type: text/html; charset=UTF-8');
 	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
		
	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	$body		= "<htmL><head> </head><body> <p>".$nombre.", email: ".$email."</p><p>Escribió: ".$asunto." : ". $mensaje."</p></body> </html>";
	try {

		$mail->CharSet = 'UTF-8';
		$mail->SMTPDebug = 0;                                 // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'mailservice.bct@gmail.com';                 // SMTP username
		$mail->Password = 'lospibesdelits';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		//Recipients
		$mail->setFrom('mailservice.bct@gmail.com', 'BCT');
		$mail->addAddress('pedropastorini11@gmail.com', 'Pedro');   
		$mail->isHTML(true); // Set email format to HTML
		$mail->Subject = "Contacto por Pagina Web";
		$mail->Body    = $body;
		$mail->send();
		return true;

	}catch(Exception $e){
		return false;
	}

}
