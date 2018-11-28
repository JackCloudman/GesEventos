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
          <h2 align="center">Reglas del negocio</h2><br/>

          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">RDN 1</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">RDN 2</a></li>
              <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">RDN 3</a></li>
              <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">RDN 4</a></li>
              <li class=""><a href="#tab_5" data-toggle="tab" aria-expanded="false">RDN 5</a></li>
              <li class=""><a href="#tab_6" data-toggle="tab" aria-expanded="false">RDN 6</a></li>
              <li class=""><a href="#tab_7" data-toggle="tab" aria-expanded="false">RDN 7</a></li>
              <li class=""><a href="#tab_8" data-toggle="tab" aria-expanded="false">RDN 8</a></li>
              <li class=""><a href="#tab_9" data-toggle="tab" aria-expanded="false">RDN 9</a></li>
              <li class=""><a href="#tab_10" data-toggle="tab" aria-expanded="false">RDN 10</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <p>
                  <b>Nombre</b>: Identificación del usuario.<br/>
                  <b>Identificador</b>: RDN 1<br/>
                  <b>Descripción</b>: La identificación del sistema se verificará por medio del correo, nombre de usuario, primer apellido o segundo apellido.<br/>
                  <b>Ejemplo</b>: Una vez que el usuario haya creado su cuenta en el sistema, deberá ingresar los datos de esta regla obligatoriamente.<br/>
                </p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <p>
                  <b>Nombre</b>: El usuario se puede registrar a un evento.<br/>
                  <b>Identificador</b>: RDN 2<br/>
                  <b>Descripción</b>: El usuario puede registrarse a un evento mientras este tenga disponibilidad de lugares.<br/>
                  <b>Ejemplo</b>: El usuario ve los eventos disponibles, elige uno, le da clic en ‘Registrarse’ y el sistema debe registrarlo al evento elegido.<br/>
                </p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <p>
                  <b>Nombre</b>: El boleto solo se envía cuando acabas tu registro al evento.<br/>
                  <b>Identificador</b>: RDN 3<br/>
                  <b>Descripción</b>: Se enviará por correo electrónico el boleto del evento al que el usuario desea asistir una vez que haya finalizado la inscripción a este.<br/>
                  <b>Ejemplo</b>: Cuando el usuario acaba su registro al evento de comida y le da clic en ‘Finalizar registro’, el sistema manda el boleto al correo del usuario.<br/>
                </p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
                <p>
                  <b>Nombre</b>: Se pueden escribir comentarios sobre un evento finalizado.<br/>
                  <b>Identificador</b>: RDN 4<br/>
                  <b>Descripción</b>: El usuario podrá dejar un comentario sobre que le pareció el evento al cual asistió, este no deberá tener ofensas o insultos hacia el evento.<br/>
                  <b>Ejemplo</b>: Acabó el evento de teatro y el usuario quiere dejar un comentario, le da a la opción ‘Dejar comentario’ y puede escribir en un cuadro de texto sobre este.<br/>
                </p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_5">
                <p>
                  <b>Nombre</b>: Cuando el usuario no pueda ir a un evento puede cancelar su registro del evento.<br/>
                  <b>Identificador</b>: RDN 5<br/>
                  <b>Descripción</b>: El usuario tiene la posibilidad de cancelar su asistencia al evento. No se podrá realizar esto cuando falten 15 minutos o menos del inicio del evento.<br/>
                  <b>Ejemplo</b>: Al usuario le salio un imprevisto 2 horas antes del evento y no podrá asistir, entonces él da su baja de este mediante el botón ‘Cancelar asistencia’ lo cual libera su asiento para que alguien más disfrute el evento.<br/>
                </p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_6">
                <p>
                  <b>Nombre</b>: Solo se tendrán máximo 10 boletos por usuario.<br/>
                  <b>Identificador</b>: RDN 6<br/>
                  <b>Descripción</b>: El sistema se asegura que el usuario no pueda tener más de 10 boletos en total para eventos.<br/>
                  <b>Ejemplo</b>: El usuario quiere ir a muchos eventos pero solo puede tener 10 boletos en total, así que piensa a cuales ir.<br/>
                </p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_7">
                <p>
                  <b>Nombre</b>: El usuario puede consultar los detalles de un evento.<br/>
                  <b>Identificador</b>: RDN 7<br/>
                  <b>Descripción</b>: El usuario puede ver el status de un evento, su disponibilidad, de qué trata, quién es el encargado y sus horarios.<br/>
                  <b>Ejemplo</b>: El usuario está buscando un evento que le parezca interesante, le da al botón ‘Mostrar detalles’ del evento y ve de qué trata cada uno, el usuario se decide ir a una ponencia de Física por el profesor Einstein a las 10:20 de la mañana.<br/>
                </p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_8">
                <p>
                  <b>Nombre</b>: Se pueden registrar eventos nuevos al sistema.<br/>
                  <b>Identificador</b>: RDN 8<br/>
                  <b>Descripción</b>: El administrador puede registrar eventos al sistema con sus detalles correspondientes.<br/>
                  <b>Ejemplo</b>: Una persona quiere registrar un evento de deportes en una escuela, entonces va con el administrador, le muestra los datos del evento y el administrador registra el evento deportivo.<br/>
                </p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_9">
                <p>
                  <b>Nombre</b>: Se podrán modificar los datos de un evento registrado.<br/>
                  <b>Identificador</b>: RDN 9<br/>
                  <b>Descripción</b>: Solo el creador del evento podrá modificar los datos del evento, incluyendo fecha, hora e información.<br/>
                  <b>Ejemplo</b>: Es un día muy lluvioso para hacer un evento al aire libre, por ello se pospone para mañana, registramos los cambios en la plataforma para que todos los asistentes estén informados sobre el cambio.<br/>
                </p>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_10">
                <p>
                  <b>Nombre</b>: El creador del evento puede acceder a las estadísticas del este.<br/>
                  <b>Identificador</b>: RDN 10<br/>
                  <b>Descripción</b>: El creador del evento puede acceder a las estadísticas y comentarios de este y saber que estuvo bien y que estuvo mal con el análisis que él haga.<br/>
                  <b>Ejemplo</b>: La persona que hizo la ponencia de “Química en nuestras vidas diarias” pudo ver que asistieron 120 personas donde solo 80 personas dejaron comentarios, de estos 80 comentarios observó que 57 personas les gustó mucho su ponencia, mientras las otras 23 personas tenían dudas sobre algunas cosas que se hablaron.<br/>
                </p>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
            <a href="<?=base_url()?>Documentacion" class="big-box-footer" >Regresar al inicio</a>
        </div>
        <!-- /.box-body -->
      </div>
    <!-- /.box -->
    </section>
    <!-- /.content -->
</div>