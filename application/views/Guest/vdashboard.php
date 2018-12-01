<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Lista de eventos<small>(Usuario)</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
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
          foreach($eventos as $e){?>
          <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <a href="<?php echo base_url();?>Evento/<?php echo $e->id_evento;?>"
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('<?=base_url()?>assets/eventos/fotos/<?=$e->foto?>') center center;background-size:100%">
              <h3 class="widget-user-username"><?php echo $e->nombre_evento?></h3>
              <h5 class="widget-user-desc"><i class="fa fa-map-marker"></i> <?php echo $e->nombre?></h5>
            </div>
          </a>

            <div class="box-footer">
              <div class="row">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><h3><?php echo $e->fecha?></h3></h5>
                    <span class="description-text"><h4><i class="fa fa-clock-o"> </i></i> <?php echo date("h:i A",strtotime($e->hora_inicio))?></h4></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  <div class="description-block">
                    <h5 class="description-header">Descripción</h5>
                    <span><?php $larga = $e->descripcion;
                      $corta = character_limiter($larga, 20);
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
      <?php }
      if(!$eventos){?>
          <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
                  <h1>No se encuentran eventos :(</h1>
          <!-- /.widget-user -->
        </div>
                <?}?>

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
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
