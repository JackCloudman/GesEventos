<<!--/**
 * Created by PhpStorm.
 * User: jonat
 * Date: 11/22/2018
 * Time: 7:47 AM
 */-->
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
         <p>El evento ha sido registrado con exito!</p>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-outline pull-left" id="success" data-dismiss="modal">Cerrar</button>
       </div>
     </div>
           <!-- /.modal-content -->
   </div>
         <!-- /.modal-dialog -->
 </div>
<div class="content-wrapper">
          <div class="box-header with-border">
            <h3 class="box-title" style="float: center">Publicar nuevo Evento.</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form id="event-form" action="<?=base_url()?>Admin/ajax_edit_evento" method="post" role="form">
              <!-- text input -->
                <input type="hidden" id="id_evento" name="id_evento" value="<?= $evento->id_evento ?>">
                <div class="form-group">
                <label>Nombre</label>
                <input class="form-control" name="nombre_evento" placeholder="Enter ..." type="text" value="<?= $evento->nombre_evento ?>">
              </div>
              <div class="form-group">
                <label>Ponente</label>
                <input class="form-control" name="ponente" placeholder="Enter ..."  type="text" value="<?= $evento->ponente ?>">
              </div>

              <!-- textarea -->
              <div class="form-group">
                <label>Descripcion</label>
                <textarea class="form-control" rows="3" name="descripcion" placeholder="Enter ..."><?= $evento->descripcion ?></textarea>
              </div>
              <label>Fecha:</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input  data-date-format="yyyy-mm-dd" name="fecha" class="form-control pull-right datepicker" type="text" value="<?= $evento->fecha ?>">
              </div>
              <div class="form-group">
                <label>Especifique</label>
                <input class="form-control" name="Auditorio" placeholder="Salon, Auditorio, lab ..."  type="text" value="<?= $evento->auditorio ?>">
              </div>
              <label class="o">Hora de Inicio:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input id="timepicker"  name= "hora_inicio" class="form-control timepicker" type="text" value="<?= $evento->hora_inicio ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Imagen del evento</label>
                    <input type="file" id="foto" name="foto" >
                    <img src="<?= base_url() ?>/assets/eventos/fotos/<?= $evento->foto ?>" style="width: 100%; height: 100%">
                </div>
                <?=  base_url()."/assets/eventos/fotos/".$evento->foto ?>
                <div class="box-footer">
                  <button class="btn btn-primary" type="submit">Publicar</button>
                </div>


            </form>
          </div>


</div>

</body>
</html>
<style type="text/css">
    label{
    display: block;
    text-align: center;
  line-height: 150%;
  font-size: .85em;

}
</style>







<script type="text/javascript">
    $(function () {
        $('#success').on('click',function(){
            $(location).attr('href', '<?=base_url()?>Admin/eventos')
        });
        $("#event-form").submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "post",
                url: "<?=base_url()?>Admin/ajax_edit_evento",
                data: formData,
                dataType:'json',
                cache : false,
                contentType: false,
                processData: false,
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
