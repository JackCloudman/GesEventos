<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard<small>(Admin)</small>
    </h1>
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
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>350</h3>

            <p>Likes</p>
          </div>
          <div class="icon">
            <i class="fa fa-heart"></i>
          </div>
          <a href="#" class="small-box-footer">Más informacion<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-teal">
          <div class="inner">
            <h3>54</h3>

            <p>Comentarios nuevos</p>
          </div>
          <div class="icon">
            <i class="fa fa-comments"></i>
          </div>
          <a href="#" class="small-box-footer">Ver comentarios<i class="fa fa-arrow-circle-right"></i></a>
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
        foreach($eventos as $e){?>
        <div class="col-md-4">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-black" style="background: url('assets/dist/img/photo1.png') center center;">
            <h3 class="widget-user-username"><?php echo $e->nombre_evento?></h3>
            <h5 class="widget-user-desc"><i class="fa fa-map-marker"></i> <?php echo $e->nombre?></h5>
          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-6 border-right">
                <div class="description-block">
                  <h5 class="description-header"><h3><?php echo $e->fecha?></h3></h5>
                  <span class="description-text"><h4><i class="fa fa-clock-o"> </i></i> <?php echo $e->hora_inicio?></h4></span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-6 border-right">
                <div class="description-block">
                  <h5 class="description-header">Descripción</h5>
                  <span></i><?php $larga = $e->descripcion;
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
          <div class="widget-user-header bg-black" style="background: url('assets/dist/img/photo2.png') center center;">
            <h3 class="widget-user-username">Toma de protesta</h3>
            <h5 class="widget-user-desc"><i class="fa fa-map-marker"></i> Auditorio ESCOM</h5>
          </div>
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
<style type="text/css">
.text {
display: block;
width: 200px;
height: 44px;
overflow: hidden;
white-space:normal;
text-overflow: ellipsis;
}
</style>
