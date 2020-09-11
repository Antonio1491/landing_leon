<?php
// url absoluta
require dirname(__FILE__).'/../class/clases.php';

$customer = new Customer();

if (empty($_POST['email'])){

echo "E-mail necesario";

}else{
    $email = $_POST["email"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $congreso = $_POST["congreso"];

    $result = $customer -> registro($email, $nombre, $apellido, $edad, $congreso);
    
    $url = "../$result";

    header("Location: $url");

}
?>