   

   <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Comentarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="listaComentarios" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row"><th tabindex="0">No.Com</th><th tabindex="0">Nombre</th><th tabindex="0">Comentario</th><th tabindex="0">Borrar</th></tr>
                </thead>
                <tbody>
                <?php foreach ($coment->result() as $com) {?>
                <tr>
                  <td><?= $com->id_comentario?></td>
                  <td><?= $com->nombre." ".$com->appat." ".$com->apmat?></td>
                  <td><?= $com->texto?></td>

                  <td><a href="<?=base_url()?>Comentarios/borrar_comentario/<?= $com->id_comentario?>" id="borrar"><i class="fa fa-trash"></i> Borrar</a></td>
                </tr>
                <?php }?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
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
