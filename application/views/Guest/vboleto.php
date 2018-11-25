<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center><h1>GesEventos</h1></center>
    <p> Nombre evento: <?=$boleto->nombre_evento?></p>
    <p>Fecha y hora: <?=$boleto->fecha?></p>
    <p>Lugar: <?=$boleto->lugar?></p>
    <p>Nombre: <?=$boleto->nombre?></p>
    <p>Codigo QR: </p>
<barcode code="<?=$boleto->qr?>" size="4" type="QR" error="M" class="barcode" />
  </body>
</html>
