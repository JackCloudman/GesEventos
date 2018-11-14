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
              <h3 class="box-title">Lista de usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id='calendar'></div>
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
<link href="<?=base_url()?>/assets/bower_components/fullcalendar/dist/fullcalendar.css" rel="stylesheet"/>
<link href="<?=base_url()?>/assets/bower_components/fullcalendar/dist/fullcalendar.print.min.css" rel="stylesheet" media="print"/>
<script src="<?=base_url()?>/assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url()?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>/assets/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script>
  $(document).ready(function() {
    $.post('<?php echo base_url();?>Calendar/getEventos',
    function (data) {
      //alert(data);
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
        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }

    </style>
