	<div class="content-wrapper">


            <div class="box-header with-border">
              <h3 class="box-title" style="float: center">Publicar nuevo Evento.</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>Nombre</label>
                  <input class="form-control" placeholder="Enter ..." type="text">
                </div>
                <div class="form-group">
                  <label>Ponente</label>
                  <input class="form-control" placeholder="Enter ..."  type="text">
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Descripcion</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <label>Fecha:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input class="form-control pull-right" id="datepicker" type="text">
                </div>


                <!-- input states -->
                <!-- select -->
                <div class="form-group">
                  <label>Cede</label>
                  <select class="form-control">
                    <option>ESCOM</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Especifique</label>
                  <input class="form-control" placeholder="Salon, Auditorio, lab ..."  type="text">
                </div>
                <label class="o">Hora de Inicio:</label>
                  <div class="input-group">
                    <input class="form-control timepicker" type="text">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
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