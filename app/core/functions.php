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
		
	$mail = new PHPMailer(true);                             
	$body		= "<htmL><head> </head><body> <p>".$nombre.", email: ".$email."</p><p>Escribió: ".$asunto." : ". $mensaje."</p></body> </html>";
	try {

		$mail->CharSet = 'UTF-8';
		$mail->SMTPDebug = 0;                                
		$mail->isSMTP();                                     
		$mail->Host = 'smtp.gmail.com';  
		$mail->SMTPAuth = true;                             
		$mail->Username = 'mailservice.bct@gmail.com';              
		$mail->Password = 'lospibesdelits';                         
		$mail->SMTPSecure = 'tls';                           
		$mail->Port = 587;                                    

		//Recipients
		$mail->setFrom('mailservice.bct@gmail.com', 'BCT');
		$mail->addAddress('pedropastorini11@gmail.com', 'Pedro');   
		$mail->isHTML(true); 
		$mail->Subject = "Contacto por Pagina Web";
		$mail->Body    = $body;
		$mail->send();
		return true;

	}catch(Exception $e){
		return false;
	}

}
