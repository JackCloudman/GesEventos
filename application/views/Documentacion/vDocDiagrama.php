<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
    <script>
      $(document).ready(function(){
          $('#DiagramaObjCU1').click(function(){
            $("#contenido").load("/GesEventos-master/application/views/Documentacion/diaCU1.html");
                         });

          $('#DiagramaObjCU2').click(function(){
            $("#contenido").load("/GesEventos-master/application/views/Documentacion/diaCU2.html");
                         });

          $('#DiagramaObjCU3').click(function(){
            $("#contenido").load("/GesEventos-master/application/views/Documentacion/diaCU3.html");
                         });

          $('#DiagramaClases').click(function(){
            $("#contenido").load("/GesEventos-master/application/views/Documentacion/diaClases.html");
                         });

          $('#DiagramaCasoUso').click(function(){
            $("#contenido").load("/GesEventos-master/application/views/Documentacion/diaCasoUso.html");
                         });

          /*$('#Jython').click(function(){
            $("#contenido").load("c_jython.html");
                         });

          $('#Jython').click(function(){
            $("#contenido").load("c_jython.html");
                         });*/
                    });
  </script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id ="contenido">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Documentacion
      </h1>
    </section>

    <!-- Main content -->
    <a href="#" id="DiagramaCasoUso">Diagrama de Casos de Uso</a><br/>
    <a href="#" id="DiagramaClases">Diagrama de Clases</a><br/>
    <a href="#" id="DiagramaObjCU1">Diagrama de Objetos CU 1</a><br/>
    <a href="#" id="DiagramaObjCU2">Diagrama de Objetos CU 2</a><br/>
    <a href="#" id="DiagramaObjCU3">Diagrama de Objetos CU 3</a><br/>
      <br>
      <table>
        <tr>
          <td id ="contenido">
          </td>
        </tr>
      </table>
    <!-- /.content -->
</div>
 <!-- /.content-wrapper -->
