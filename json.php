<?php
include "Cliente.php";

$res = Cliente::all();

die(json_encode($res));
