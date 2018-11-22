<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <div class="col-xs-6" id="NomEvento"><?= $evento->nombre_evento ?></div>

            <div class="col-xs-6" id="fecha"><small><?= $evento->fecha ?></small></div>
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
                            <div class="col-md-4"><img src="<?=base_url()?>assets/eventos/fotos/<?php echo $evento->foto ?>" style="max-height: 100%; max-width: 100%"></div>
                            <div class="col-md-8" id="informacion">
                                <div class="row form-group" style="...">
                                    <div class="col-md-12" id="informacion">
                                        <h3>Informaci&oacute;n</h3>
                                        <?= $evento->descripcion ?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12" id="direccion" style="...">
                                        <h3>Direcci&oacute;n</h3>
                                        <?= $evento->escuela ?> en el auditorio <?= $evento->auditorio ?>

                                    </div>
                                </div>
                        </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-offset-4">
                                <button type="button" class="btn btn-block btn-primary" data-evento="<?=$evento->id_evento?>">Inscribirse a evento</button>
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
