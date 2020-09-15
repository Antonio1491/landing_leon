<?php
require('../class/clases.php');
$mail = $_GET["mail"];
$customer = new Customer();
$data = $customer -> getCustomer($mail);
foreach($data as $valor){
  $mail = $valor["email"];
  $nombre = $valor["nombre"];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin: 0 auto; ">
  <table width="100%" align="center" border="0" cellpadding="0" bgcolor="#1d0c65" style="width: 100%; max-width:600px;">
    <!-- header -->
    <tr>
      <td align="center" style="padding-top:20px; padding-bottom:20px;" >
        <a href="https://www.congresoparques.com/leon/" target="_blank" border="0" style="text-decoration:none;">
          <img src="https://www.congresoparques.com/leon/landing_page/templates/img/logo_congreso.png" alt="Logotipo Congreso Parques León 2020" width="132" style="width:127px; height:auto; display:block;">
        </a>
      </td>
    </tr>
    <!-- fin header  -->
    <tr>
      <td>
        <!-- contenido -->
        <table width="600" border="0" cellpadding="0" align="center">
          <tr >
            <td align="center" height="50" bgcolor="#170a50" style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#ffffff; text-align:center;" >
                Hola, "<?php echo $nombre; ?>"
            </td>
          </tr>
          <tr>
            <td style="padding-top:20px; padding-bottom:20px;" align="center">
              <a href="https://anprm.connectedcommunity.org/home" target="_blank" border="0" style="text-decoration:none;">
                <img src="https://www.congresoparques.com/leon/landing_page/templates/img/open_house_leon.jpg" alt="Open House - Congreso Parques León 2020 - Virtual" border="0" style="width:100%; height:auto; display:block;">
              </a>
            </td>
          </tr>
          <tr>
            <td align="center" style="padding-top:30px; padding-bottom:20px; padding-left:10px; padding-right:10px;">
              <p style="color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:16px; ">Para participar en nuestro Open House deberás completar y/o observar los siguientes pasos:
                <ul style="color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:16px; text-align:left">
                  <li>Accede a:  <a href="https://anprm.connectedcommunity.org/home" style="color:#de2c74;">https://anprm.connectedcommunity.org/home</a>.</li>
                  <li>Estarás ingresando a <b>CONEXIÓN ANPR*</b>, donde podrás visualizar la liga de <b>CONGRESO PARQUES</b> 
                  en el menú principal a partir del 21 de septiembre.</li>
                 <li>Podrás interactuar con nuestras sesiones en vivo donde aprenderás 
                  como mejorar tu experiencia de uso durante el congreso.</li>
                  <li>Dentro de la sección CONFERENCIAS/EJES - OPEN HOUSE, tenemos una sorpresa preparada para ti, no dejes de ingresar.</li>
                </ul> 
              </p>
              <p style="color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:16px; ">
                <i>*CONEXIÓN ANPR es La Comunidad en Línea de Profesionales en Parques y Recreación de América
                 Latina</i> - <a href="https://youtu.be/Ymxn4Il-XGI" style="color:#de2c74;"> CONOCER CONEXION EN 2 MINUTOS</a>.
              </p>
              <p style="color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:16px; ">Conoce el programa completo de nuestro Open House:
              <ul style="color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:16px; text-align:left">
                <li>Lunes 21 sept. 10:00 hrs. CDMX GMT - Sesión Inicial - Vive la experiencia de la virtualidad total.</li>
                <li>Martes 22 sept. 10:00 hrs. CDMX GMT – Webinar: Desarrollo Profesional en Tiempos de Pandemia</li>
                <li>Miércoles 23 sept. 16:00 hrs. CDMX GMT – Webinar:  Hacia una Nueva Normalidad en el Espacio Público: Una Visión Latinoamericana</li>
                <li>Jueves 24 sept. 9:00 hrs. CDMX GMT – Sesión de preguntas y respuestas.  ¿Tienes dudas de como poder mejorar tu experiencia de uso en el evento? Aquí te contaremos todo.</li>
                <li>Viernes 25 sept. 9:00 hrs. CDMX GMT – Sesión final de capacitación.  Aprende todo sobre nuestro sitio virtual y como vivir Congreso Parques León – Virtual desde tu oficina u hogar.</li>
              </ul>
              <p style="color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:16px;"><b>¡Te esperamos!</b></p>
            </td>
          </tr>
          <tr>
            <td align="center" style="padding-bottom:30px;">
              <a href="https://anprm.connectedcommunity.org/home" target="_blank" border="0" style="text-decoration:none;">
                <img src="https://www.congresoparques.com/leon/landing_page/templates/img/btn_ir_al_open_house.png" alt="Ir al Open House" border="0" width="308" style="width: 308px; height:auto; display:block;">
              </a>
            </td>
          </tr>
        </table>
        <!-- fin contenido -->
      </td>
    </tr>
    <tr>
      <td >
        <!-- footer  -->
        <table border="0" cellpadding="0" width="100%" bgcolor="#E2F3FB">
          <tr>
            <td>
              <table border="0" cellpadding="0"  align="center" style="padding-top:30px;">
                <tr >
                  <td>
                  <a href="https://www.facebook.com/CongresoParques/" target="_blank"  border="0" style="text-decoration:none;">
                    <img src="https://www.congresoparques.com/leon/landing_page/templates/img/facebook.png" alt="Ir a Facebook" border="0" width="43" style="width: 43px; height:auto; display:block;">
                  </a>
                  </td>
                  <td>
                    <a href="https://www.instagram.com/congreso_parques/" target="_blank"  border="0" style="text-decoration:none;">
                      <img src="https://www.congresoparques.com/leon/landing_page/templates/img/instagram.png" alt="Ir a Instagram" border="0" width="43" style="width: 43px; height:auto; display:block; padding-left:20px;">
                    </a>
                  </td>
                  <td>
                    <a href="https://twitter.com/congreso_parque" target="_blank"  border="0" style="text-decoration:none;">
                      <img src="https://www.congresoparques.com/leon/landing_page/templates/img/twitter.png" alt="Ir a Twitter" border="0" width="43" style="width: 43px; height:auto; display:block; padding-left:20px;">
                    </a>
                  </td>
                  <td>
                    <a href="https://www.youtube.com/channel/UC_ExzrmxP5er7qZHeVpWidQ" target="_blank"  border="0" style="text-decoration:none;">
                      <img src="https://www.congresoparques.com/leon/landing_page/templates/img/youtube.png" alt="Ir a Youtube" border="0" width="43" style="width: 43px; height:auto; display:block; padding-left:20px;">
                    </a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td align="center">
              <p style="color: #525252; font-family:Arial, Helvetica, sans-serif; font-size:14px; ">Luis Romahn: Presidente y Director General.</p> 
            </td>
          </tr>
          <tr>
            <td align="center">
              <p style="color: #525252; font-family:Arial, Helvetica, sans-serif; font-size:14px; ">Te enviamos este correo porque eres parte de la comunidad de Congreso Parques.</p>
            </td>
          </tr>
        </table>
        <!-- fin footer  -->
      </td>
    </tr>
  </table>
</body>
</html>