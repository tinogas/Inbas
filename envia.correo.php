<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require'helpers/phpmailer/src/Exception.php';
require'helpers/phpmailer/src/PHPMailer.php';
require'helpers/phpmailer/src/SMTP.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = '0';                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.inbas.mx';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@inbas.mx';                     // SMTP username
    $mail->Password   = 'Informacion2021+';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@inbas.mx', 'CONTACTO WEB INBAS');
    $mail->addAddress('info@inbas.mx', 'INFO INBAS');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensaje recibido de INBAS.MX ';
    $mail->Body    = 'Nombre : '.$nombre.' <br>Correo: '.$correo.' <br>Mensaje: '.$mensaje.'<br>';
	
	
    $mail->AltBody = $mensaje;

    $mail->send();
    echo 'Enviando.....';
	?>
	<META HTTP-EQUIV="REFRESH" CONTENT="0.2;URL=contacto?mensaje=ok">

	<?php
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		?>
	<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=contacto?mensaje=fallo">

	<?php
}