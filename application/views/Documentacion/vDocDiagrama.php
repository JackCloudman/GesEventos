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
              <div class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h4 class="box-title">Modelo del sistema con Casos de Uso, Clases y Paquetes</h4>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic2" data-slide-to="4" class="active"></li>
                      <li data-target="#carousel-example-generic2" data-slide-to="5" class=""></li>
                      <li data-target="#carousel-example-generic2" data-slide-to="6" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="<?=base_url()?>assets/dist/img/Diagrama_CU.png" width="70%" height="70%" alt="Diagrama de CU">

                        <div class="carousel-outer">
                          <br/>Modelo del sistema con Casos de Uso
                        </div>
                      </div>
                      <div class="item">
                        <img src="<?=base_url()?>assets/dist/img/DiagramaClasesF.png" alt="Diagrama de clases">

                        <div class="carousel-outer">
                          <br/>Modelo del sistema con Clases
                        </div>
                      </div>
                      <div class="item">
                        <img src="<?=base_url()?>assets/dist/img/Diagrama de paquetes.png" alt="Diagrama de paquetes">

                        <div class="carousel-outer">
                          <br/>Modelo del sistema con Paquetes
                        </div>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic2" data-slide="prev">
                      <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic2" data-slide="next">
                      <span class="fa fa-angle-right"></span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h4 class="box-title">Diagramas de Objetos</h4>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                      <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                    </ol>
                    <div class="carousel-inner">
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
              </div>

              <div class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h4 class="box-title">Analisis de Robustez</h4>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="carousel-example-generic3" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic3" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic3" data-slide-to="1" class=""></li>
                      <li data-target="#carousel-example-generic3" data-slide-to="2" class=""></li>
                      <li data-target="#carousel-example-generic3" data-slide-to="3" class=""></li>
                      <li data-target="#carousel-example-generic3" data-slide-to="4" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="<?=base_url()?>assets/dist/img/Diagrama robustes crear escuela.png" alt="Diagrama robustes crear escuela">
                        <div class="carousel-outer">
                          <br/>Diagrama de robustez Caso de Uso Crear Evento 
                        </div>
                      </div>
                      <div class="item">
                        <img src="<?=base_url()?>assets/dist/img/CancelarAsistenciaRobustez.png" alt="CancelarAsistenciaRobustez">

                        <div class="carousel-outer">
                          <br/>Diagrama de robustez Caso de Uso Cancelar Asistencia
                        </div>
                      </div>
                      <div class="item">
                        <img src="<?=base_url()?>assets/dist/img/InscribirEventoRobustez.png" alt="InscribirEventoRobustez">

                        <div class="carousel-outer">
                          <br/>Diagrama de robustez Caso de Uso Inscribir Evento
                        </div>
                      </div>
                      <div class="item">
                        <img src="<?=base_url()?>assets/dist/img/ModificarInfoEventoRobustez.png" alt="ModificarInfoEventoRobustez">

                        <div class="carousel-outer">
                          <br/>Diagrama de robustez Caso de Uso Modificar Informacion Evento
                        </div>
                      </div>
                      <div class="item">
                        <img src="<?=base_url()?>assets/dist/img/MostrarCalendarioRobustez.png" alt="MostrarCalendarioRobustez">

                        <div class="carousel-outer">
                          <br/>Diagrama de robustez Caso de Uso Mostrar Calendario
                        </div>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic3" data-slide="prev">
                      <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic3" data-slide="next">
                      <span class="fa fa-angle-right"></span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h4 class="box-title">Diagramas de comunicacion</h4>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="carousel-example-generic4" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic4" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic4" data-slide-to="1" class=""></li>
                      <li data-target="#carousel-example-generic4" data-slide-to="2" class=""></li>
                      <li data-target="#carousel-example-generic4" data-slide-to="3" class=""></li>
                      <li data-target="#carousel-example-generic4" data-slide-to="4" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="<?=base_url()?>assets/dist/img/Diagrama comunicacion crear escuela.png" alt="Diagrama comunicacion crear escuela">
                        <div class="carousel-outer">
                          <br/>Diagrama de comunicacion Caso de Uso Crear Evento 
                        </div>
                      </div>
                      <div class="item">
                        <img src="<?=base_url()?>assets/dist/img/CancelarAsistenciaComunicacion.png" alt="CancelarAsistenciaComunicacion">

                        <div class="carousel-outer">
                          <br/>Diagrama de comunicacion Caso de Uso Cancelar Asistencia
                        </div>
                      </div>
                      <div class="item">
                        <img src="<?=base_url()?>assets/dist/img/InscribirEventoComunicaciones.png" alt="InscribirEventoComunicaciones">

                        <div class="carousel-outer">
                          <br/>Diagrama de comunicacion Caso de Uso Inscribir Evento
                        </div>
                      </div>
                      <div class="item">
                        <img src="<?=base_url()?>assets/dist/img/ModificarInfoEventoComunicacion.png" alt="ModificarInfoEventoComunicacion">

                        <div class="carousel-outer">
                          <br/>Diagrama de comunicacion Caso de Uso Modificar Informacion Evento
                        </div>
                      </div>
                      <div class="item">
                        <img src="<?=base_url()?>assets/dist/img/MostrarCalendarioComunicacion.png" alt="MostrarCalendarioComunicacion">

                        <div class="carousel-outer">
                          <br/>Diagrama de comunicacion Caso de Uso Mostrar Calendario
                        </div>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic4" data-slide="prev">
                      <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic4" data-slide="next">
                      <span class="fa fa-angle-right"></span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h4 class="box-title">Diagramas de secuencia</h4>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="carousel-example-generic5" class="carousel slide" data-ride="carousel" data-interval="false">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic5" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic5" data-slide-to="1" class=""></li>
                      <li data-target="#carousel-example-generic5" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="<?=base_url()?>assets/dist/img/CancelarAsistenciaSecuencia.png" alt="CancelarAsistenciaSecuencia">

                        <div class="carousel-outer">
                          <br/>Diagrama de secuencia Caso de Uso Cancelar Asistencia
                        </div>
                      </div>
                      <div class="item">
                        <img src="<?=base_url()?>assets/dist/img/InscribirEventoSecuencia.png" alt="InscribirEventoSecuencia">

                        <div class="carousel-outer">
                          <br/>Diagrama de secuencia Caso de Uso Inscribir Evento
                        </div>
                      </div>
                      <div class="item">
                        <img src="<?=base_url()?>assets/dist/img/ModificarInfoEventoSecuencia.png" alt="ModificarInfoEventoSecuencia">

                        <div class="carousel-outer">
                          <br/>Diagrama de secuencia Caso de Uso Modificar Informacion Evento
                        </div>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic5" data-slide="prev">
                      <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic5" data-slide="next">
                      <span class="fa fa-angle-right"></span>
                    </a>
                  </div>
                </div>
              </div>

            </div>
            <!-- /.box-body -->  
          </div>
          <!-- /.box -->
        </div>
        <a href="<?=base_url()?>Documentacion" class="big-box-footer" >Regresar al inicio</a>
    
</div>
 <!-- /.content-wrapper -->
