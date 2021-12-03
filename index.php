<?php  
include "./Cliente.php";

$res = Cliente::all(); 
//var_dump($res);
$xml = new XMLWriter();
$xml->openUri("php://output");
$xml->startDocument();
$xml->setIndent(true);
$xml->startElement('clients');

forEach($res as $cliente) {
  $xml->startElement('client');
    $xml->startElement('nombre');
    $xml->writeRaw($cliente->nombre);
    $xml->endElement();
    $xml->startElement('apellidoP');
    $xml->writeRaw($cliente->apellidoP);
    $xml->endElement();
    $xml->startElement('apellidoM');
    $xml->writeRaw($cliente->apellidoM);
    $xml->endElement();
  $xml->endElement();
}
$xml->endElement();
header('Content-type: text/xml');
$xml->flush();
