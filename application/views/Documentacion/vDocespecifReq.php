  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Documentacion
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="box">
        <div class="box-body">
          <p align="justify">
          <h2 align="center">Especificación de requisitos</h2>
          <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
              <h3 class="box-title">Funcionales</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <ol>
              <li value="1">El usuario debe registrarse usando su correo, apellido paterno, materno, nombre completo, fecha de nacimiento, sexo, escuela de procedencia (si aplica).</li>
              <li>El sistema debe mostrar los horarios de los eventos en un calendario.</li>
              <li>El sistema debe enviar el comprobante (boleto) al correo del usuario una vez que este se haya inscrito al evento.</li>
              <li>El sistema mostrará al creador del evento las estadísticas de los asistentes.</li>
              <li>Mostrar si un evento todavía tiene lugar para registrarse.</li>
              <li>Se podrá cancelar o posponer eventos.</li>
              <li>El usuario puede cancelar su registro de un evento al cual está inscrito.</li>
              <li>Los administradores podrán registrar eventos.</li>
              <li>Los administradores podrán modificar la información de un evento próximo.</li>
              <li>Permitir que el usuario proporcione un comentario sobre el evento al cual asistió.</li>
              <li>Permitir a un usuarios inscribirse a un evento disponible.</li>
              <li>Se mostrará el status del evento (Próximo, Finalizado).</li>
            </ol>
            </div>
            <!-- /.box-body -->
            </div>
            
          <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
              <h3 class="box-title">No funcionales</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <ol>
                <li value="1">El sistema no estará disponible, será como máximo 2 horas al día</li>
                <li>El sistema debe asegurar el intercambio seguro de información usando los protocolos HTTPS</li>
                <li>El sistema no debe tardar más de 2 segundos en registrar al participante del evento una vez que este haya dado click al botón “Inscribirme”</li>
                <li>La página web será responsiva</li>
                <li>Cuando el evento finalice, este se eliminará de la lista de eventos y ya no será visible al usuario.</li>
                <li>Se utilizara material design en la página web.</li>
                <li>El sistema deberá funcionar en los navegadores principales (chrome, opera, firefox, Edge)</li>
                <li>El sistema deberá denegar al usuario la opción de elegir un evento si este no tiene capacidad de registro.</li>
                <li>El sistema no tardará más de 5 segundos en mostrar todos los eventos disponibles al usuario.</li>
              </ol>
            </div>
            <!-- /.box-body -->
            </div>
            
          <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
              <h3 class="box-title">Restricciones</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <ol>
                <li value="1">Se utilizará el lenguaje PHP utilizando el gestor de bases de datos MariaDB</li>
                <li>Los boletos solo se podrán enviar al correo del asistente en formato PDF</li>
                <li>Cada boleto contendrá un identificador único y este estará compuesto por 13 dígitos.</li>
                <li>Solo se podrán inscribir a los cursos los usuarios previamente registrados al sistema</li>
                <li>Se ocupará Framework orientado a MVC</li>
              </ol>
            </div>
            <!-- /.box-body -->
            </div>       
        </p>
        <br/><br/>
        <a href="<?=base_url()?>Documentacion" class="big-box-footer" >Regresar al inicio</a>
        </div>
        <!-- /.box-body -->
      </div>
    <!-- /.box -->
    </section>
    <!-- /.content -->
</div>