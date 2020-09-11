<?php
/* ==============================================================================
Clase que crea un objeto customer para el registro en las landing page  
================================================================================== */
class Customer extends Conexion{
  public $email;
  public $nombre;
  public $apellido;
  public $edad;
  public $congreso;

  public function __construct()
  {
      parent::__construct();
  }

  public function registro($email, $nombre, $apellido, $edad, $congreso)
  {

    $this->email = $email;
    $this->congreso = $congreso;

    $sql = "INSERT INTO open_house
            VALUES (null, '$email', '$nombre', '$apellido', '$edad', '$congreso')";
    $result = $this -> conexion_db -> query($sql);

    if($result){
      $redireccion = $this->redireccion();
      return $redireccion;
    }
    else{
      return $result = "Error al registrar";
    }

  }

  public function getCustomer($email)
  {

    $sql = "SELECT * FROM open_house WHERE email = '$email' ";
    $result = $result = $result = $this -> conexion_db -> query($sql);
    
    return $result;
  }

  public function redireccion()
  {

    if($this->congreso == "CPL2020"){
      $url = "registroOpenHouse.php?email=".$this->email;
      return $url;
    }
    else{
      $url = "openHouse.html";
      return $url;
    }

  }
  
}

?>