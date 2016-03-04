<?php
$remitente = $_POST['correo_input'];
$destinatario = 'chilefreetour@gmail.com'; 
$asunto = 'Consulta';
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre: " . $_POST["nombre_input"] . "\r \n"; 
    $cuerpo .= "Email: " . $_POST["correo_input"] . "\r \n";
	$cuerpo .= "Consulta: " . $_POST["mensaje_input"] . "\r\n";

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre_input']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'confirma.html'; //se debe crear un html que confirma el envío
}
?>
