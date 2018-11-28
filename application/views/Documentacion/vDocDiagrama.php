<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

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
      <div class="col-md-15">
          <div class="box box-solid" align="center">
            <div class="box-header with-border">
              <h3 class="box-title">Arquitectura del sistema</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item">
                    <img src="<?=base_url()?>assets/dist/img/Diagrama_CU.png" width="70%" height="70%" alt="Diagrama de CU">
                    <div class="carousel-outer">
                      <br/>Diagrama Casos de Usos
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?=base_url()?>assets/dist/img/DiagramaClasesF.png" alt="Diagrama de clases">

                    <div class="carousel-outer">
                      <br/>Diagrama de Clases
                    </div>
                  </div>
                  <div class="item active">
                    <img src="<?=base_url()?>assets/dist/img/DejarComentario.png" alt="Diagrama de objCU1">

                    <div class="carousel-outer">
                      <br/>Diagrama de Objetos CU: Dejar Comentario Caso 1
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?=base_url()?>assets/dist/img/DejarComentarioCaso2.png" alt="Diagrama de objCU1_2">

                    <div class="carousel-outer">
                      <br/>Diagrama de Objetos CU: Dejar Comentario Caso 2
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?=base_url()?>assets/dist/img/Inscribir_Evento.png" alt="Diagrama de objCU2">

                    <div class="carousel-outer">
                      <br/>Diagrama de Objetos CU: Inscribir Evento
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?=base_url()?>assets/dist/img/ModificarEvento.png" alt="Diagrama de objCU3">

                    <div class="carousel-outer">
                      <br/>Diagrama de Objetos CU: Modificar Evento
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- /.box -->
        </div>
        <a href="<?=base_url()?>Documentacion" class="big-box-footer" >Regresar al inicio</a>
    
</div>
 <!-- /.content-wrapper -->
