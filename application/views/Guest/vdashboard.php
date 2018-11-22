 
<!DOCTYPE html>
<html>

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Lista de eventos<small>(Usuario)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> nivel</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>4</h3>

              <p>Eventos registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar"></i>
            </div>
            <a href="#" class="small-box-footer">Más informacion<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Lista de eventos activos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <div class="row">
          <?php  $this->load->helper('text');
          foreach($datos as $datos){?>

          <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <a href="<?php echo base_url();?>VerEvento/index/<?php echo $datos->id_evento;?>"
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('assets/dist/img/photo1.png') center center;">
              <h3 class="widget-user-username"><?php echo $datos->nombre_evento?></h3>
              <h5 class="widget-user-desc"><i class="fa fa-map-marker"></i> <?php echo $datos->nombre?></h5>
            </div>
          </a>

            <div class="box-footer">
              <div class="row">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><h3><?php echo $datos->fecha?></h3></h5>
                    <span class="description-text"><h4><i class="fa fa-clock-o"> </i></i> <?php echo $datos->hora_inicio?></h4></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Descripción</h5>
                    <span></i><?php $larga = $datos->descripcion;
                      $corta = word_limiter($larga, 20);
                      echo $corta;?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
      <?php }?>
          <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <a href="http://www.example.com">
            <div  class="widget-user-header bg-black" style="background: url('assets/dist/img/photo2.png') center center;">
              <h3 class="widget-user-username">Toma de protesta</h3>
              <h5 class="widget-user-desc"><i class="fa fa-map-marker"></i> Auditorio ESCOM</h5>
            </div>
            </a>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><h3>11-09-1900</h3></h5>
                    <span class="description-text"><h4><i class="fa fa-clock-o"></i> 9:50</h4> </span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Descripcion</h5>
                    <span ><i></i> pRUEBAsdA391293AA</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
          
      </div>
            </div>
            <!-- ./box-body -->
          </div>
          <!-- /.box -->
        </div>
        
      </div>
    </section>
    <!-- /.content -->
</div>
<!-- jQuery 3 -->
<script src="<?=base_url()?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>/assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>/assets/dist/js/demo.js"></script>
</body>
</html>
