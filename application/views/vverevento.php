<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <div class="col-xs-6" id="NomEvento"><?= json_decode($eventos)[0]->nombre_evento ?></div>

            <div class="col-xs-6" id="fecha"><small><?= json_decode($eventos)[0]->fecha ?></small></div>
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
                                <?= json_decode($eventos)[0]->descripcion ?>
                            </div>
                        </div>
                        <div></div>
                        <div class="row" style="margin-top:30px ;">
                            <div class="col-md-4" id="mapa">
                                Integer dui magna, rhoncus a erat semper, ornare laoreet dolor. Phasellus scelerisque nibh nunc, vel pretium ligula dapibus efficitur. Integer sit amet nibh sit amet tortor sagittis mollis. Ut nibh augue, feugiat non rhoncus ac, tincidunt ac magna. Nunc imperdiet, quam sit amet maximus tristique, nulla dui elementum massa, eget vulputate turpis leo sit amet diam. Nam facilisis metus nec hendrerit mattis. Morbi sed blandit justo. Ut lorem ipsum, varius vel fermentum a, viverra non lorem. Fusce pellentesque vestibulum odio, vitae dapibus nibh hendrerit vel. Etiam feugiat velit non lectus ultricies ultrices. Ut id odio enim.</div>
                            <div class="col-md-8" id="direccion">
                                <h3>Direcci&oacute;n</h3>
                                <?= json_decode($eventos)[0]->escuela ?> en el auditorio <?= json_decode($eventos)[0]->auditorio ?>

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
