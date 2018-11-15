<?php
/**
 * Created by PhpStorm.
 * User: jonat
 * Date: 11/14/2018
 * Time: 2:37 PM
 */
?>

<!-- Content Wrapper. Contains page content -->
<script>
    $(document).ready(function() {
        $.post('<?php echo base_url();?>VerEvento/getEvento/$idEvento',
            function (data) {
                alert(data);
            }
        );
    });

</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <div class="col-xs-6" id="NomEvento">Nombre del evento</div><small> <div class="col-xs-6" id="fecha">(Fecha)</div></small>
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
                            <div class="col-md-4" id="imagen">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ligula purus, venenatis nec mauris vel, accumsan imperdiet metus. Vestibulum aliquet arcu sit amet metus blandit ullamcorper. Proin faucibus sapien sit amet ornare interdum. Duis nec dolor et lorem laoreet pulvinar. Morbi dictum risus sed pretium congue. Aenean posuere et urna non tristique. Vivamus sit amet nunc gravida, posuere magna at, maximus nisi. Aenean lectus elit, fringilla eget magna sit amet, gravida accumsan nisi. Fusce feugiat laoreet tellus, at ullamcorper justo pellentesque non. Morbi vel risus maximus, sagittis massa vel, luctus magna. Proin cursus tortor in ullamcorper varius. Etiam eget sapien felis. Nunc ut ipsum et tellus porta finibus ac et ligula. Nullam a dignissim massa.</div>
                            <div class="col-md-8" id="informacion">
                                <h3>Informaci&oacute;n</h3>
                                Nam tincidunt, erat eu venenatis dictum, sem nulla semper nunc, sed faucibus diam augue ac magna. Donec id urna malesuada nunc suscipit laoreet. Vestibulum tempus, nisi non porta sodales, enim nisi euismod nibh, et convallis dui turpis ac nunc. Cras in ligula neque. In hac habitasse platea dictumst. Vivamus ultrices semper dolor, eget blandit nisi laoreet non. Donec quis imperdiet sem. Suspendisse vitae tellus feugiat, consectetur lacus nec, efficitur odio. Nullam pharetra ex quis orci placerat luctus. Nam at ipsum in metus vulputate blandit quis vitae lectus. Sed iaculis ante volutpat arcu blandit, sit amet auctor nisi aliquam.</div>
                        </div>
                        <div></div>
                        <div class="row" style="margin-top:30px ;">
                            <div class="col-md-4" id="mapa">
                                Integer dui magna, rhoncus a erat semper, ornare laoreet dolor. Phasellus scelerisque nibh nunc, vel pretium ligula dapibus efficitur. Integer sit amet nibh sit amet tortor sagittis mollis. Ut nibh augue, feugiat non rhoncus ac, tincidunt ac magna. Nunc imperdiet, quam sit amet maximus tristique, nulla dui elementum massa, eget vulputate turpis leo sit amet diam. Nam facilisis metus nec hendrerit mattis. Morbi sed blandit justo. Ut lorem ipsum, varius vel fermentum a, viverra non lorem. Fusce pellentesque vestibulum odio, vitae dapibus nibh hendrerit vel. Etiam feugiat velit non lectus ultricies ultrices. Ut id odio enim.</div>
                            <div class="col-md-8" id="direccion">
                                <h3>Direcci&oacute;n</h3>
                                Cras laoreet velit sit amet ligula tempor blandit. Aliquam a libero ac magna faucibus pharetra in a mauris. Suspendisse luctus, mi eget hendrerit euismod, quam nunc ultrices tellus, a iaculis turpis quam eget magna. Ut elementum faucibus ipsum id pellentesque. Curabitur vulputate, eros sed euismod lobortis, nisl ipsum cursus lectus, a bibendum nibh lacus blandit purus. Etiam sit amet arcu nec ipsum auctor imperdiet nec quis augue. Donec in tincidunt lorem, nec faucibus felis. Vestibulum eu eros maximus, vestibulum lorem ac, pulvinar metus. Maecenas porta sapien eget eros iaculis aliquam quis nec sapien.

                            </div>

                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-offset-4">
                                <button type="button" class="btn btn-block btn-primary">Inscribirse a evento</button>
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
