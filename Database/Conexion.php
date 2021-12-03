<?php
class Conexion {
  public $con;
  public function conectar(){
    $this->con =  mysqli_connect("127.0.0.1","root","","db_xml");
  }
}
