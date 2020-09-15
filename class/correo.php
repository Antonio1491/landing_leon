<?php
// url absoluta
require('clases.php');


$email = "antonio@parquesdemexico.org";

// $correo = new Correos();
    // $correo -> registroOpenHouse($email);

    echo $email;
    // echo $email;
    $correo = new Correos();
    $correo -> registroOpenHouse($email);

?>