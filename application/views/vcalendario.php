<?php
/**
 * Created by PhpStorm.
 * User: jonat
 * Date: 11/13/2018
 * Time: 9:08 PM
 */?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <link href="<?=base_url()?>/assets/bower_components/fullcalendar/dist/fullcalendar.css" rel="stylesheet"/>
    <link href="<?=base_url()?>/assets/bower_components/fullcalendar/dist/fullcalendar.print.min.css" rel="stylesheet" media="print"/>
    <script src="<?=base_url()?>/assets/bower_components/moment/min/moment.min.js"></script>
    <script src="<?=base_url()?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>/assets/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script>

        $(document).ready(function() {
            $.post('<?php echo base_url();?>Calendar/getEventos',
            function (data) {
                alert(data);
                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,basicWeek,basicDay'
                    },
                    defaultDate: new Date(),
                    navLinks: true, // can click day/week names to navigate views
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: $.parseJSON(data)
                });
            }
            );



        });

    </script>
    <style>

        body {
            margin: 40px 10px;
            padding: 0;
            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }

    </style>
</head>
<body>
<div class="content-wrapper">
    <div class="box-header with-border">
        <h3 class="box-title" style="float: center">Publicar nuevo Evento.</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div id='calendar'></div>
    </div>
</div>
</body>
</html>


