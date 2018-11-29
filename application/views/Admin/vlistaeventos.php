<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard<small> (Super Admin)</small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Lista de eventos</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="escuelas" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nombre del evento</th>
                <th>Fecha del evento</th>
                <th>Escuela</th>
                <th>Boletos</th>
                <th>Accion</th>
              </tr>
              </thead>
              <tbody>
              <?php
                foreach ($eventos as $e) {
              ?>
              <tr id="<?=$e->id_evento;?>">
                <td><?=$e->nombre_evento?></td>
                <td><?=$e->fecha?></td>
                <td><?=$e->nombre?></td>
                <td><?=$e->inscritos?>/<?=$e->boletos?></td>
                <td>
                  <h4>
      <i class= "fa fa-trash del" data-evento="<?=$e->id_evento;?>"></i>
      <i class= "fa fa-pencil edit" data-evento="<?=$e->id_evento;?>"></i>
      <a href="<?=base_url()?>Comentarios/lista_comentarios/<?= $e->id_evento?>" id="verComentarios"><i class="fa fa-eye"></i></a>
                </h4>
              </td>
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
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- DataTables -->
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
  $('#escuelas').DataTable();
  $(".edit").on('click',function(e){
    var evento = $(this).attr("data-evento");
    $(location).attr('href', '<?=base_url()?>Admin/eventos/editar/'+evento)
  });
  $(".del").on('click',function(e){
    var evento = $(this).attr("data-evento");
    $.ajax({
      url: "<?=base_url()?>Admin/ajax_delete_evento",
      type: "post",
      dataType:'json',
      cache : false,
      data: {evento:evento},
success:function(data){
    if(data.codigo==0){
       $("#"+evento).remove();
    }
    else{
      alert(data.respuesta);
    }
  }
});

});
})
</script>
