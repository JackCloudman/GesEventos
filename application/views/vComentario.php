

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <section class="content-header">
      <h2 align="center">
        Comenta algo sobre el evento
      </h2>
    </section>
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content container-fluid">
      <form action="<?=base_url()?>Comentarios/enviar_comentario" method="post">
        <div class="box box-success">
          <div class="box-header">
            <h4 align="right">Nombre del evento</h4>
          </div>
          <div class="box-body">
            <div class="form-group">
              <label>Comentario</label>
              <textarea class="form-control" name="txtcomentario" maxlength="255" rows="15" placeholder="Escribe tu comentario aquí ..."></textarea>
            </div>
            <div class="col-sm-2 col-sm-offset-5">
              <input type="submit" name="btncomentario" id="boton" class="btn btn-block btn-success btn-sm" value="Enviar Comentario">
            </div>
          </div>
          <!-- /.box-body -->
        </div>
      <!-- /.box -->
      </form> 
    </section>
    <!-- /.content -->
</div>