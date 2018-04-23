<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Gracias por comunicarte!</title>
	<link rel="stylesheet" href="../styles/thanks.min.css">
</head>
<body>
	<header>
		<div class="thanks-container">
			<h1 class="title">Gracias por comunicarte!</h1>
			<a href="../index.html" class="button">Volver</a>
		</div>
	</header>
	<?php

	// Envío info a cliente
	
	$correo_destinatario = $_POST['email'];
	$nombre_remitente = "chalets de obra nueva en bilbao";
	$correo_remitente = "info@chaletsdeobranuevaenbilbao.com ";
	$asunto = "Email de agradecimiento";
	$mensaje = "<h1>Hola</h1>

				<p>Gracias por ponerte en contacto con nosotros. Hemos recibido tu solicitud correctamente, en breve nos pondremos en contacto contigo.<br>
				
				Adjunto a este email encontrarás la información solicitada.<br>
				
				Muchas gracias por tu interés.</p> <br>
				
				<h3>Departamento Comercial</h3>
				info@chaletsdeobranuevaenbilbao.com <br>
				chaletsdeobranuevaenbilbao.com	<br>
				<h2>Folleto:</h2>
				<a href='#'><img src='/images/logo_jaureguizar.jpg' /></a>		";
	
	$headers = "From: ".$nombre_remitente."\r\n"."Reply-To: ".$correo_remitente."\r\n"."X-Mailer: PHP/".phpversion();
	function mailutf8($correo_destinatario, $asunto = "(Sin Asunto)", $mensaje="", $header=""){
		$header_on = "MIME-Version: 1.0"."\r\n"."Content-type: text/html; charset=UTF-8"."\r\n";
		if(mail($correo_destinatario, "=?UTF-8?B?".base64_encode($asunto)."?=", $mensaje, $header_on.$header)){
			echo "Mensaje enviado";
		} else {
			echo "Error en el envío";
		}
	}
	mailutf8($correo_destinatario, $asunto , $mensaje, $headers);
	
?>
</body>
</html>