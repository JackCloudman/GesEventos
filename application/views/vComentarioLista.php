   

   <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Comentarios de <?= $nom_evento->nombre_evento ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="listaComentarios" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row"><th tabindex="0">Nombre</th><th tabindex="0">Comentario</th><th tabindex="0">Borrar</th></tr>
                </thead>
                <tbody>
                <?php foreach ($coment->result() as $com) {?>
                <tr>
                  <td><?= $com->nombre." ".$com->appat." ".$com->apmat?></td>
                  <td><?= $com->texto?></td>
                  <td><a href="<?=base_url()?>Comentarios/borrar_comentario/<?= $com->evento?>/<?= $com->id_comentario?>" id="borrar"><i class="fa fa-trash"></i> Borrar</a></td>
                </tr>
                <?php }?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="col-sm-2 col-sm-offset-5">
               <!--  <?php if (($com->permiso) == 2) {?>
                <a href="<?=base_url()?>Admin/eventos" id="regresar"><button type="button" class="btn btn-block btn-primary btn-xs">Regresar a lista de eventos</button></a>
                <?php } else if(($com->permiso) == 3){?>
                  <a href="<?=base_url()?>Superadmin/eventos" id="regresar"><button type="button" class="btn btn-block btn-primary btn-xs">Regresar a lista de eventos</button></a>
                <?php }?>-->
              </div>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
</div>
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
<script>
  $(function () {
    $('#listaComentarios').DataTable();

  })
</script>
<script type="text/javascript">
  $(function() {

    $('#borrar').click(function(e) {
      echo "hola";
    });
  });
</script>
