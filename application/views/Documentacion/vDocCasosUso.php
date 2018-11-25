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
          <p align="center">
            <h2 align="center">Definición de actores</h2>
          <h4>Definición de actores</h4>
          <ul>
            <li type="disk">Instituciones y organizaciones.</li>
            <li>Ponentes.</li>
            <li>Asistentes.</li>
            <li>Administrador.</li>
            <li>Agente de logística.</li>
          </ul>
          </p>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      <div class="box" style="overflow:auto;">
        <div class="box-body">
          <p align="justify">
            <br/><br/><h2 align="center">Casos de Uso</h2>
            <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
              <h3 class="box-title">Caso de uso 1</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <b>Nombre:</b> Enviar boletos por correo<br/>
              <b>Identificador:</b> CU1<br/>
              <b>Versión:</b> 1.0<br/>
              <b>Autor:</b> Reyes Vilchis Juan José<br/>
              <b>Revisor:</b> Rodríguez Casas Erik Emmanuel<br/>
              <b>Descripción:</b> Una vez que un usuario se registre a un evento se generará un boleto electrónico que será enviado a su email personal.<br/>
              <b>Precondiciones:</b> El usuario se tuvo que registrar satisfactoriamente<br/>
              <b>Postcondiciones:</b> El usuario tendrá un boleto electrónico en su Email (bandeja de entrada)<br/>
              <b>Curso básico de acción:</b><br/>
              <ol align="justify">
                <li value="1">El caso de uso empieza cuando el usuario se ha registrado correctamente a un evento.</li>
                <li>El sistema tomará la P1 “Plantilla boleto”  lo llenará con los datos de “Nombre del asistente”, “Número de boleto”, ”Nombre evento”, “Fecha del evento”, ”Número de asiento” (De no Haber asiento no se pondrá nada en este apartado) y Código QR (Este código se genera con el HASH SHA-256 al momento de registrarse al evento).</li>
                <li>El sistema enviará un email con el boleto generado en formato PDF al correo del usuario, para ello se usará Protocolo para Transferencia Simple de Correo (SMTP).</li>
                <li>Una vez que se haya enviado el correo al usuario, el sistema mostrará el IU3 “Te has inscrito al evento”.</li>
                <li>El caso de uso termina cuando el usuario oprime el botón de “Listo”, este botón redirecciona a la página principal.</li>
              </ol><br/><br/><br/>
            </div>
            <!-- /.box-body -->
            </div>

            <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
              <h3 class="box-title">Caso de uso 2</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <b>Nombre:</b> Mostrar listado de todos los eventos<br/>
              <b>Autor:</b> Reyes Vilchis Juan José<br/>
              <b>Identificador:</b> CU2<br/>
              <b>Versión:</b> 1.0<br/>
              <b>Revisor:</b> Rodríguez Casas Erik Emmanuel<br/>
              <b>Descripción:</b> Cualquier persona que entre a la IU2 podrá ver el calendario con los distintos eventos.<br/>
              <b>Precondiciones:</b> Se debe ingresar a la dirección web del calendario.<br/>
              <b>Postcondiciones:</b> El usuario podrá visualizar un listado de los próximos eventos.<br/>
              <b>Curso básico de acción:</b><br/>
              <ol align="justify">
                <li value="1">El caso de uso comienza cuando el usuario quiere informarse de los próximos eventos.</li>
                <li>El sistema obtendrá de la base de datos los próximos eventos cuya fecha sea del mes en curso.</li>
                <li>El sistema mostrará los eventos en forma de lista de 10 en 10 en IU4 “Lista de eventos”.</li>
                <li>Cada evento del listado debe redirigir a la IU5 “Detalles del evento”.</li>
                <li>El caso de uso termina cuando el usuario da click en algún evento de su interés o sale de la página.</li>
              </ol><br/><br/><br/>
            </div>
            <!-- /.box-body -->
            </div>

            <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
              <h3 class="box-title">Caso de uso 3</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <b>Nombre:</b> Cancelar la asistencia a un evento.<br/>
              <b>Identificador:</b> CU3<br/>
              <b>Versión:</b> 1.0<br/>
              <b>Autor:</b> Rodríguez Casas Erik Emmanuel<br/>
              <b>Revisor:</b> Reyes Vilchis Juan José<br/>
              <b>Descripción:</b> El usuario puede dar de baja su asistencia a un evento al cual está inscrito mediante la IU6 “Eventos inscritos” y no se podrá realizar esto cuando falten 15 minutos o menos del inicio del evento.<br/>
              <b>Precondiciones:</b> El usuario se tiene que estar inscrito a un evento y tiene que faltar más de 15 minutos del inicio del evento.<br/>
              <b>Postcondiciones:</b> El usuario ya no estará inscrito al evento y el lugar quedará libre.<br/>
              <b>Curso básico de acción:</b><br/>
              <ol align="justify">
                <li value="1">El caso de uso empieza cuando el usuario quiere dar de baja su asistencia al evento.</li>
                <li>El usuario entra a la sección de eventos inscritos.</li>
                <li>El sistema muestra la IU6 “Eventos inscritos”.</li>
                <li>El usuario selecciona la opción “Cancelar asistencia” del evento del cual se quiere dar de baja.</li>
                <li>El sistema verifica que falten más de 15 minutos para el inicio del evento. <b>[Curso alternativo A: El tiempo para el inicio del evento es menor a 15 minutos].</b></li>
                <li>El sistema pregunta al usuario si está seguro de cancelar su asistencia.</li>
                <li>El usuario elige una opción entre “Sí” y “No”. <b>[Curso alternativo B: El usuario decide no dar de baja su asistencia].</b></li>
                <li>En el caso de que la respuesta haya sido “Sí”, el sistema da de baja la asistencia del usuario.</li>
                <li>El sistema libera el lugar del usuario para ponerlo como disponible en la IU5 “Detalles del evento”.</li>
                <li>El sistema notifica que la cancelación de la asistencia al evento fue exitosa.</li>
                <li>El usuario da clic en “Aceptar”.</li>
              </ol>
              <b>Curso alternativo de acción A: El tiempo para el inicio del evento es menor a 15 minutos.</b><br/>
              <ol align="justify">
                <li value="6">El sistema informa al usuario que no puede cancelar su asistencia al evento ya que faltan menos de 15 minutos.</li>
                <li>El usuario da clic en “Aceptar”.</li>
              </ol>
              <b>Curso alternativo de acción B: El usuario decide no dar de baja su asistencia.</b><br/>
              <ol align="justify">
                <li value="8">En caso de que la respuesta fuera “No”, el sistema informa que no pasará nada y sigue inscrito al evento del cual se quería dar de baja.</li>
                <li>El usuario da clic en “Aceptar”.</li>
              </ol><br/><br/><br/>
            </div>
            <!-- /.box-body -->
            </div>

            <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
              <h3 class="box-title">Caso de uso 4</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <b>Nombre:</b> Escribir comentarios de un evento<br/>
              <b>Identificador:</b> CU4<br/>
              <b>Versión:</b> 1.0<br/>
              <b>Autor:</b> Rodríguez Casas Erik Emmanuel<br/>
              <b>Revisor:</b> Estrada Pichardo Jonatan Isui<br/>
              <b>Descripción:</b> El usuario puede escribir un comentario sobre el evento en la IU8 “Dejar comentario” al que asistió mientras sea respetuoso.<br/>
              <b>Precondiciones:</b> El usuario tiene que estar inscrito a un evento y este ya ha acabado. <br/>
              <b>Postcondiciones:</b> El comentario del usuario ha sido guardado en el sistema para el creador del evento.<br/>
              <b>Curso básico de acción:</b><br/>
              <ol align="justify">
                <li value="1">El caso de uso empieza cuando el usuario quiere dejar un comentario sobre el evento al cual asistió.</li>
                <li>El usuario entra a la sección de eventos inscritos.</li>
                <li>El sistema muestra la IU6 “Eventos inscritos”.</li>
                <li>El usuario da clic en “Dejar comentario” en el evento que asistió.</li>
                <li>El sistema comprueba que el evento haya finalizado. <b>[Curso alternativo A: El evento no ha acabado].</b></li>
                <li>El sistema muestra la IU8 “Dejar comentario”.</li>
                <li>El usuario introduce su comentario sobre el evento y da clic en “Enviar comentario”.</li>
                <li>El sistema pone el comentario en espera a que un administrador revise el comentario. <b>[Curso alternativo B: El comentario no es apropiado].</b></li>
                <li>El sistema informa al usuario que su comentario fue mandado con éxito.</li>
                <li>El usuario da clic en “Aceptar”.</li>
                <li>Cuando el comentario haya sido validado por un administrador, el sistema manda un correo al Email usuario mencionando que su comentario fue entregado a los organizadores del evento con éxito.</li>
              </ol>
              <b>Curso alternativo de acción A: El evento no ha acabado.</b><br/>
              <ol align="justify">
                <li value="6">El sistema informa al usuario que no puede dejar un comentario hasta que finalice el evento.</li>
                <li>El usuario da clic en “Aceptar”.</li>
              </ol> 
              <b>Curso alternativo de acción B: El comentario no es apropiado.</b><br/>
              <ol align="justify">
                <li value="9">En caso de que el administrador considere el comentario inapropiado se borrará del sistema.</li>
                <li>El sistema manda un correo al Email del usuario con una advertencia sobre su comentario y pide que sea más respetuoso en sus siguientes comentarios.</li>
              </ol><br/><br/><br/>
            </div>
            <!-- /.box-body -->
            </div>

            <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
              <h3 class="box-title">Caso de uso 5</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <b>Nombre:</b> Inscribir un evento<br/>
              <b>Identificador:</b> CU5<br/>
              <b>Versión:</b> 1.0<br/>
              <b>Autor:</b> Armas Santillán Oscar<br/>
              <b>Revisor:</b> Rodriguez Casas Erik Emmanuel<br/>
              <b>Descripción:</b> El administrador inscribe un evento a la página principal del sistema, muestra en su fondo una serie de imágenes de los eventos disponibles, con su fecha, nombre, y su imagen.<br/>
              <b>Precondiciones:</b> Acceder a la página principal<br/>
              <b>Postcondiciones:</b> El usuario puede iniciar sesión, o registrarse.<br/>
              <b>Curso básico de acción:</b><br/>
              <ol align="justify">
                <li value="1">El administrador entra en la opción de “Registrar de evento”.</li>
                <li>El sistema muestra la UI3 “Registrar evento”.</li>
                <li>El administrador deberá contar con la información de acuerdo a la RI1.</li>
                <li>El administrador procede a ingresar la información requerida en la UI3.</li>
                <li>Se puede o no agregar un flyer para el evento, pero dado caso que sea agregado, debe cumplir con la regla Rl2.</li>
                <li>El administrador termina de llenar los campos requeridos para el evento y procede a publicarlo.</li>
                <li>El sistema guarda los cambios y muestra el evento.</li>          
              </ol>
              <b>Reglas Rl:</b><br/>
              <b>Rl1:</b> la información proporcionada para el registro de un evento debe ser la siguiente:<br/>
              <ul align="justify">
                <li type="disk">Nombre del evento.</li>
                <li>Fecha.</li>
                <li>Presentador o ponente o instructor.</li>
                <li>Dirección.</li>
                <li>Horario.</li>
                <li>Flyer(opcional).</li>
              </ul>
              <b>Rl2:</b> El flyer o imagen que requiere el evento en dado caso de ser incluido, no puede contener logotipos de alguna institución o información con fines publicitarios. En caso de ser imagen respetar un formato de calidad mínimo de 1080 x 720 píxeles.<br/><br/><br/>
            </div>
            <!-- /.box-body -->
            </div>
              
            <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
              <h3 class="box-title">Caso de uso 6</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <b>Nombre:</b> Mostrar estadísticas y comentarios del evento finalizado al administrador del evento<br/>
              <b>Identificador:</b> CU6<br/>
              <b>Versión:</b> 1.0<br/>
              <b>Autor:</b> Estrada Pichardo Jonatán Isúi<br/>
              <b>Revisor:</b> Rodriguez Casas Erik Emmanuel.<br/>
              <b>Descripción:</b> Se mostrará con unas gráficas las estadísticas del evento que ya ha finalizado, incluyendo número de personas que asistieron, edad, sexo, ocupación y comentarios que dejaron los asistentes.<br/>
              <b>Precondiciones:</b> El usuario que quiere ver las estadísticas fue el mismo usuario que registró el evento, debe estar iniciado sesión y el evento que desea ver las estadísticas debe haber sido finalizado.<br/>
              <b>Postcondiciones:</b> El usuario podrá ver las estadísticas del evento finalizado<br/>
              <b>Curso básico de acción:</b><br/>
              <ol align="justify">
                <li value="1">El caso de uso comienza cuando un organizador del evento quiere revisar las estadísticas de su evento finalizado.</li>
                <li>El usuario entra a la sección de “Mis Eventos”.</li>
                <li>El sistema mostrará los eventos que ha creado, si el evento ha finalizado, se tendrá una opción de “ver estadísticas” [UI7.2].</li>
                <li>El usuario selecciona un evento donde el fue el creador del evento y el evento ya ha sido finalizado.</li>
                <li>El sistema mostrará las estadísticas y comentarios[UI10].</li>
              </ol><br/><br/><br/>
            </div>
            <!-- /.box-body -->
            </div>

            <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
              <h3 class="box-title">Caso de uso 7</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <b>Nombre:</b>  Modificar la información de un evento próximo<br/>
              <b>Identificador:</b> CU7<br/>
              <b>Versión:</b> 1.0<br/>
              <b>Autor:</b> Estrada Pichardo Jonatán Isúi<br/>
              <b>Revisor:</b> Rodríguez Casas Erik Emmanuel<br/>
              <b>Descripción:</b> Se podrá modificar la información de un evento antes de que el mismo finalice y se tendra la opcion de enviar un correo a los usuarios inscritos en el evento informando del cambio de información.<br/>
              <b>Precondiciones:</b> El organizador del evento que quiere modificar la información de su evento, debe estar conectado dentro del sistema con su cuenta y el evento a modificar no debe de estar finalizado.<br/>
              <b>Postcondiciones:</b> El sistema actualiza la información del evento, será visible para los usuarios y se tiene la opción de enviar un correo electrónico a los usuarios informándoles de los cambios.<br/>
              <b>Curso básico de acción:</b><br/>
              <ol align="justify">
                <li value="1">El caso de uso comienza cuando un organizador del evento quiere modificar la información de un evento no finalizado.</li>
                <li>El usuario entra a la sección de “Mis eventos”. </li>
                <li>El sistema mostrará los eventos que ha creado, en los eventos que ha creado se tendrá una opción extra de “editar evento” [UI7.1].</li>
                <li>El usuario selecciona el evento que desea editar.</li>
                <li>El sistema mostrará la información actual del evento en áreas de texto donde podrá modificar la información [UI8.1].</li>
                <li>El usuario elige la opción “Guardar” para guardar la información.</li>
                <li>El sistema le preguntará si está seguro o desea cancelar los cambios. <b>[Curso alternativo A: El usuario decide no modificar la información del evento].</b></li>
                <li>El sistema mostrará una opción de mandar a los usuarios inscritos al evento un correo donde informa que se ha modificado la información del evento [UI8.2] <b>[Curso alternativo B: El usuario decide no enviar correo a los inscritos en el evento.]</b></li>
                <li>El sistema actualizará la información del evento.</li>
                <li>El sistema envía un correo a todos los usuarios inscritos al evento.</li>
                <li>El sistema le informa al usuario que se ha modificado la información del evento y que se han enviado un correo a todos los inscritos al evento informando de la modificación de información.</li>           
              </ol>
              <b>Curso alternativo de acción A: El administrador decide cancelar la modificación de información.</b><br/>
              <ol align="justify">
                <li value="7">El sistema informa al usuario que no se ha modificado la información del evento.</li>
                <li>El usuario da clic en “Aceptar”.</li>
              </ol>
              <b>Curso alternativo de acción B: El usuario decide no enviar correo a los asistentes.</b><br/>
              <ol align="justify">
                <li value="7">El sistema informa al usuario que se ha modificado la información del evento.</li>
                <li>El usuario da clic en “Aceptar”.</li>
              </ol><br/><br/><br/>
            </div>
            <!-- /.box-body -->
            </div>

            <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
              <h3 class="box-title">Caso de uso 8</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <b>Nombre:</b> Cambiar idioma<br/>
              <b>Identificador:</b> CU8<br/>
              <b>Versión:</b> 1.0<br/>
              <b>Autor:</b> Barrera Estrella Emanuel<br/>
              <b>Revisor:</b> Rodríguez Casas Erik Emmanuel<br/>
              <b>Descripción:</b> Dentro del menú general del sistema se podrá elegir una opción de idioma disponible a su conveniencia que establezca la configuración de idioma en la presentación de todo el sistema dinámicamente.<br/>
              <b>Precondiciones:</b> Que los idiomas soportados para el sistema hayan sido dados de alta en la base de datos.<br/>
              <b>Postcondiciones:</b> El sistema debe desplegar el sistema con cada mensaje o frase traducidas al idioma seleccionado.<br/>
              <b>Curso básico de acción:</b><br/>
              <ol align="justify">
                <li value="1">El usuario debe seleccionar en el menú la opción de “Elegir Idioma” o su equivalente en los demás idiomas soportados.</li>
                <li>El sistema muestra un listado de las opciones de idioma soportados para el sistema.</li>
                <li>El usuario selecciona un idioma.</li>
                <li>El sistema guardará en la sesión en todo momento de la navegación, la opción guardada del idioma que se haya elegido.</li>
              </ol>
              <b>Excepciones:</b> El navegador podrá tener ya habilitado un traductor de páginas y podrá automáticamente traducir las páginas a un idioma por defecto, pero mal adaptado, muy probablemente sin conservar el vocabulario propio del sistema, por lo que, se deberá deshabilitar el traductor automático para el sitio.<br/><br/><br/>
            </div>
            <!-- /.box-body -->
            </div>

            <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
              <h3 class="box-title">Caso de uso 9</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <b>Nombre:</b> Mostrar información de evento<br/>
              <b>Autor:</b> Barrera Estrella Emanuel<br/>
              <b>Identificador:</b> CU9<br/>
              <b>Versión:</b> 1.0<br/>
              <b>Revisor:</b> Estrada Pichardo Jonatán Isúi<br/>
              <b>Descripción:</b> Mostrará al usuario el nombre del evento, la fecha, una imagen, la información del evento así como un mapa con la ubicación del evento y su dirección[UI 12]. El usuario podrá  registrarse a un evento en esta UI.
<br/>
              <b>Precondiciones:</b> El evento debe de estar registrado y el usuario desea ver la información del evento.<br/>
              <b>Postcondiciones:</b> El usuario podrá visualizar la información del evento.<br/>
              <b>Curso básico de acción:</b><br/>
              <ol align="justify">
                <li value="1">El caso de uso inicia cuando el usuario quiere saber la información de un evento.</li>
                <li>El usuario ingresa a la descripción del evento mediante el botón “Mostrar información”.</li>
                <li>El sistema despliega la información de un evento en la UI 12.</li>
              </ol><br/><br/><br/>
            </div>
            <!-- /.box-body -->
            </div>

            <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
              <h3 class="box-title">Caso de uso 10</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <b>Nombre:</b> Recuperar Contraseña<br/>
              <b>Autor:</b> Barrera Estrella Emanuel<br/>
              <b>Identificador:</b> CU10<br/>
              <b>Versión:</b> 1.0<br/>
              <b>Revisor:</b> Rodríguez Casas Erik Emmanuel<br/>
              <b>Descripción:</b> El usuario tendrá disponible la opción de recuperar contraseña si este la ha olvidado.<br/>
              <b>Precondiciones:</b> El usuario debe estar registrado en el sistema y deberá conocer su dirección de correo electrónico con el que se registró previamente.<br/>
              <b>Postcondiciones:</b> El usuario deberá tener cambiada su contraseña.<br/>
              <b>Curso básico de acción:</b><br/>
              <ol align="justify">
                <li value="1">El usuario deberá acceder a la opción de “¿Has olvidado tu contraseña?” al momento de Iniciar Sesión.</li>
                <li>El sistema pedirá que el usuario confirme su petición introduciendo su dirección de correo electrónico.</li>
                <li>El sistema automáticamente generará un token de seguridad para tener disponible una única petición de cambio de contraseña en la base datos.</li>
                <li>El sistema debe de enviar un correo que contenga un mensaje de que se está solicitando un cambio de contraseña y el token dentro de un link de redireccionamiento hacia un formulario.</li>
                <li>El usuario debe introducir una nueva contraseña de acuerdo con un formato de cadena válida de contraseña e introducir nuevamente la contraseña con el propósito de que se confirme correctamente la contraseña.</li>
                <li>El sistema actualizará la contraseña y deberá pedirle al usuario que inicie sesión de forma ordinaria para que este compruebe que la contraseña ha sido cambiada.</li>
              </ol>
              <b>Excepciones:</b><br/>
              <ol align="justify">
                <li value="1">El sistema puede tener error al intentar enviar el correo y, por lo tanto, de no ser recibido el correo, el usuario deberá solicitar nuevamente un cambio de contraseña.</li>
                <li>Si el sistema deberá advertir al usuario que en caso de que no haya recibido el correo, deberá inspeccionar si este realmente está en su correo, pero en la sección de “Correo no deseado” o “Spam”.</li>
                <li>Si el usuario volviera acceder nuevamente al link enviado en el correo para solicitar un cambio de contraseña, el sistema debe de validar que ese token ya ha sido usado previamente y, por lo tanto, ya no es posible ya cambiar la contraseña por medio de ese link.</li>
              </ol><br/><br/><br/>
            </div>
            <!-- /.box-body -->
            </div>

            <div class="box box-default collapsed-box box-solid">
              <div class="box-header with-border">
              <h3 class="box-title">Caso de uso 11</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <b>Nombre:</b> Mostrar Calendario de eventos<br/>
              <b>Autor:</b> Estrada Pichardo Jonatán Isúi<br/>
              <b>Identificador:</b> CU11<br/>
              <b>Versión:</b> 1.0<br/>
              <b>Revisor:</b> Rodríguez Casas Erik Emmanuel<br/>
              <b>Descripción:</b> Cualquier persona que entre a la IU12 podrá ver el calendario con los distintos eventos.<br/>
              <b>Precondiciones:</b> Se debe ingresar a la dirección web del calendario<br/>
              <b>Postcondiciones:</b> El usuario podrá visualizar un calendario que muestre los eventos en el día correspondiente.<br/>
              <b>Curso básico de acción:</b><br/>
              <ol align="justify">
                <li value="1">El caso de uso comienza cuando el usuario quiere observar un calendario con los eventos.</li>
                <li>El sistema obtendrá de la base de datos los próximos eventos cuya fecha sea del mes en curso.</li>
                <li>El sistema mostrará los eventos en un calendario donde los eventos estarán en el dia que les corresponde.</li>
                <li>Cada evento del listado debe redirigir a la IU5 “Detalles del evento”.</li>
                <li>El caso de uso termina cuando el usuario da click en algún evento de su interés o sale de la página.</li>
              </ol><br/><br/><br/>
            </div>
            <!-- /.box-body -->
            </div>
            
            <a href="<?=base_url()?>Documentacion" class="big-box-footer" >Regresar al inicio</a>
          </p> 
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      <div class="row" style="overflow:auto;">
        <p align="justify"> 
      </div>
    </section>
    <!-- /.content -->
</div>