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
          <p>La escuela ha sido registrada con exito!</p>
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
              <h3 class="box-title">Crear nueva escuela</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form id="escuela-form">
              <div>
              <h3>Datos de la escuela</h3>
              <h4>Nombre de la escuela</h4>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                <input type="text" class="form-control" placeholder="Escuela #12" name="escuela">
              </div>
              <h4>Direccion 1</h4>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                <input type="text" class="form-control" placeholder="Av Juan de Dios SN" name="dir1">
              </div>
              <h4>Direccion 2</h4>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                <input type="text" class="form-control" placeholder="Entre la calle 1 y 2" name="dir2">
              </div>
              <h4>Correo electrónico (escuela)</h4>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" placeholder="escuela@ejemplo.com" name="correo_escuela">
              </div>
              <h3>Datos del administrador</h3>
              <h4>Nombre</h4>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Jack Cloudman" name="nombre">
              </div>
              <h4>Nombre de usuario</h4>
              <div class="input-group">
                <span class="input-group-addon">@Admin_</span>
                <input type="text" class="form-control" placeholder="Username" name="username">
              </div>
              <h4>Correo electrónico (administrador)</h4>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" placeholder="administrador@ejemplo.com" name="correo_admin">
              </div>
              <h4>Contraseña</h4>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="password" class="form-control" placeholder="Contraseña" name="password">
              </div>
              <h4>Repetir contraseña</h4>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="password" class="form-control" placeholder="Repite la contraseña" name="password2">
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
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
    $('#success').on('click',function(){
      $(location).attr('href', '<?=base_url()?>Superadmin/escuelas')
    });
    $("#escuela-form").submit(function(e){
      e.preventDefault();
      $.ajax({
        url: "<?=base_url()?>Superadmin/ajax_crear_escuela",
        type: "post",
        dataType:'json',
        cache : false,
        data: $(this).serialize(),
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
  })
</script>