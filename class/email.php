<?php

class Correos extends  Conexion
{

  public function __construct()
  {

    parent::__construct();

  }

  public function registroOpenHouse($email)
  {

    $mail = new PHPMailer\PHPMailer\PHPMailer();
                $mail->CharSet = 'UTF-8';
              //Luego tenemos que iniciar la validación por SMTP:
              $mail->SMTPDebug = 0 ;
              $mail->IsSMTP();
              $mail->SMTPAuth = true;
              $mail->Host = "smtp.hostinger.com"; // A RELLENAR. Aquí pondremos el SMTP a utilizar. Por ej. mail.midominio.com
              $mail->Username = "no-reply@congresoparques.com"; // A RELLENAR. Email de la cuenta de correo. ej.info@midominio.com La cuenta de correo debe ser creada previamente.
              $mail->Password = "Parques14"; // A RELLENAR. Aqui pondremos la contraseña de la cuenta de correo
              $mail->Port = 587; // Puerto de conexión al servidor de envio.
              $mail->SMTPSecure =  "tls"  ; // Habilitar el cifrado TLS
              //cambiar por contenido@congreso@congresoparques.com
              $mail->setFrom("no-reply@congresoparques.com"); // A RELLENARDesde donde enviamos (Para mostrar). Puede ser el mismo que el email creado previamente.
              $mail->FromName = "Congreso Parques"; //A RELLENAR Nombre a mostrar del remitente.
              $mail->addAddress($email); // Esta es la dirección a donde enviamos
              //Se envía copia oculta a vinculación
              $mail->addBCC('soporte@congresoparques.com'); 

              $mail->IsHTML(true); // El correo se envía como HTML
              $mail->Subject = "Open House - Congreso Parques León 2020 - Virtual"; // Este es el titulo del email.
             // $mail->msgHTML(file_get_contents('https://anpr.org.mx/informatica/class/templates/basic.html'), __DIR__); // Funciona
             $body = file_get_contents('https://congresoparques.com/leon/landing_page/templates/openHouse.php?mail='.$email);  //Funciona
              // $body .= "Aquí continuamos el mensaje";
             $mail->Body = $body;
              // Mensaje a enviar.
              $exito = $mail->Send(); // Envía el correo.
                if($exito)
                {
                  return true;
                 }else{ return false; }
  }

}


?>