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
    <p>Fecha: <?=$boleto->fecha?></p>
    <p>Hora: <?=date("h:i A",strtotime($boleto->hora_inicio))?></p>
    <p>Escuela: <?=$boleto->escuela?></p>
    <p>Auditorio: <?=$boleto->lugar?></p>
    <p>Nombre: <?=$boleto->nombre?></p>
    <p>Codigo QR: </p>
<barcode code="<?=$boleto->qr?>" size="4" type="QR" error="M" class="barcode" />
  </body>
</html>
