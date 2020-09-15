<?php
require dirname(__FILE__).'/class/clases.php';

$email = $_GET["email"];

$data = new Customer();

$data = $data -> getCustomer($email);

foreach($data as $valor){
    $nombre = $valor["nombre"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Open House Congreso Parques León 2020</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="registro_open_house">
    <header>
        <div class="row">
            <div class="column align-self-middle">
                <figure>
                    <img src="img/logo_leon.svg" alt="">
                </figure>
                <h4><?php echo "¡".$nombre. ","; ?> Gracias por Registrarte al Open House!</h4>
            </div>
        </div>
    </header>
    <section class="recurso text-center">
      <div class="texto-registrado "> 
        <h6>Hemos enviado a: <?php echo $email; ?> el enlace y la información necesaria para poder acceder a nuestro <strong>Open House.</strong><br>
        <span>*Si no visualizas nuestro correo en la bandeja de entrada, recuerda revisar la "Bandeja no deseado" y agregarnos a tus contactos para recibir información en el futuro. </span></h6><br>
      </div>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/f9ZxRjConh0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <div class="texto-registrado">

      </div>
    </section>
    <footer class="row expanded align-center registro_finalizado">
      <div class="column shrink align-self-middle iconos">
          <a href="https://www.instagram.com/congreso_parques/" target="_blank"><img src="img/icon_instagram.svg" alt=""></a>
          <a href="https://twitter.com/congreso_parque" target="_blank"><img src="img/icon_twitter.svg" alt=""></a>
          <a href="https://www.facebook.com/CongresoParques/" target="_blank"><img src="img/icon_facebook.svg" alt=""></a>
          <a href="https://www.youtube.com/channel/UC_ExzrmxP5er7qZHeVpWidQ" target="_blank"><img src="img/icon_youtube.svg" alt=""></a>
      </div>

    </footer>
        
    
</body>
</html>