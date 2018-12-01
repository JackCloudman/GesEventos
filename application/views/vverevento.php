<!-- Mensaje de alerta-->
 <div class="modal modal-danger fade" id="modal-danger">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="modal-titulo"></h4>
       </div>
       <div class="modal-body" id="modal-body">
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
       </div>
     </div>
           <!-- /.modal-content -->
   </div>
         <!-- /.modal-dialog -->
 </div>
<!--Mensaje de success-->
 <div class="modal modal-success fade" id="modal-success">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title">Finalizado!</h4>
       </div>
       <div class="modal-body">
         <p>Has quedado inscrito correctamente, revisa tu correo para ver tu boleto!</p>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-outline pull-left" id="success" data-dismiss="modal">Cerrar</button>
       </div>
     </div>
           <!-- /.modal-content -->
   </div>
         <!-- /.modal-dialog -->
 </div>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <div class="col-xs-6" id="NomEvento"><?= $evento->nombre_evento ?></div>

            <div class="col-xs-6" id="fecha"><small><?= $evento->fecha ?></small></div>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-4"><img src="<?=base_url()?>assets/eventos/fotos/<?php echo $evento->foto ?>" style="max-height: 100%; max-width: 100%"></div>
                            <div class="col-md-8" id="informacion">
                                <div class="row form-group" style="...">
                                    <div class="col-md-12" id="informacion">
                                        <h3>Informaci&oacute;n</h3>
                                        <?= $evento->descripcion ?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12" id="direccion" style="...">
                                        <h3>Direcci&oacute;n</h3>
                                        <?= $evento->nombre ?> en el auditorio <?= $evento->auditorio ?>

                                    </div>
                                </div>
                        </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-offset-4">
                              <?if(!$boleto){
                                if($boletos_restantes<1){
                                ?>
                                <button type="button" class="btn btn-block btn-danger btn-lg" >Ya no hay boletos disponibles :(</button>
                                <?}else{?>
                                <button type="button" class="btn btn-primary" data-evento="<?=$evento->id_evento?>" id="inscribir">Inscribirse a evento</button>
                                <?}}else{?>
                                  <button type="button" class="btn disabled btn-success" >Ya estas inscrito a este evento</button>
                                  <?if($comentario){?>
                                  <a href="<?=base_url()?>Comentarios/Dejar_comentario/<?= $evento->id_evento?>" id="dejar_comentario"><button type="button" class="btn btn-primary">Dejar un comentario sobre el evento</button></a>
                                  <?}else{?>
                                  <button type="button" class="btn disabled btn-success" >Ya has comentado este evento</button>
                                  <?}}?>
                            </div>
                        </div>

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
<script>
	$(function(){
    $('#success').on('click',function(){
      location.reload();
    });
    $("#inscribir").on('click',function(e){
      var evento = $(this).attr("data-evento");
      $.ajax({
   		url: "<?=base_url()?>Evento/ajax_inscribir",
   		type: "POST",
   		data: {id_evento:evento},
      dataType:'json',
      cache: false,
   		success:function(data){
        if(data.codigo==0){
          $('#modal-success').modal('show');
        }else{
          $( "#modal-titulo" ).empty();
          $( "#modal-body" ).empty();
          $( "#modal-titulo" ).append(data.respuesta);
          $( "#modal-body" ).append(data.errores);
          $('#modal-danger').modal('show');
        }
        }
   		});
    });

  });

</script>
