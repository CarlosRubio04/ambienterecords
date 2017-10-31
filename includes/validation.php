<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: text/html; charset=utf-8');

$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$telefono = $_POST[' telefono'];
$mensaje = $_POST['mensaje'];


include("data.php");
$to="carlosblondsk8@gmail.com";
$from="Pagian web";
$from_name="Pagina web";
$msg="
<p><b>Nombre:</b> $nombre</p>
<p><b>Correo:</b> $correo</p>
<p><b>Teléfono:</b> $telefono</p>
<p><b>Mensaje:</b> $mensaje</p>
"; // HTML message
$subject="Nuevo mensaje";
/*End Config*/

include("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->isSendMail();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->Port = 587;
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
if(!$mail->send()){
 echo "Mailer Error: " . $mail->ErrorInfo;
}else{
 echo "Estamos Validando tu Información $nombre";
}
?>