<?php
include "./Database/Conexion.php";
Class Cliente extends Conexion {

  public static function all() {
    $conexion = new Conexion();
    $conexion->conectar();
    $prepare = mysqli_prepare($conexion->con, "SELECT * FROM clients");
    $prepare->execute();
    $res = $prepare->get_result();
    $clientes = [];
    while($cliente = $res->fetch_object(Cliente::class)) {
      array_push($clientes, $cliente);
    }
    return $clientes;
  }
}
