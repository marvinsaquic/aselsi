<div class="row">    
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <h3><?php echo get_phrase('add_entradas'); ?></h3>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" class="form-horizontal form-groups-bordered validate" action="<?php echo base_url(); ?>index.php?aselsi/entradas/create" method="post" enctype="multipart/form-data">
                    <!--fecha Add-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Fecha Adquisición'); ?></label>
                        <div class="col-sm-5">
                            <input type="date" name="fecha_add" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_fecha_adquisicion');?>" required>
                        </div>
                    </div>
                    <!--fecha vencimiento-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Fecha vencimiento'); ?></label>
                        <div class="col-sm-5">
                            <input type="date" name="fecha_ven" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_fecha_vencimiento');?>" required>
                        </div>
                    </div>
                    <!--NO. Factura-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('No. Factura'); ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="factura" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_No_factura');?>" required>
                        </div>
                    </div>
                    <!-- costo-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('costo'); ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="costo" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_costo');?>" required>
                        </div>
                    </div>
                        <!-- cantidad-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('cantidad'); ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="cantidad" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_cantidad');?>" required>
                        </div>
                    </div>
                              <!--BONIFICACION -->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Bonificacion'); ?></label>
                        <div class="col-sm-5">
                        <input type="text" name="bonificacion" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_bonificacion');?>">
                        </div>
                    </div>


                    <div class="col-sm-3 control-label col-sm-offset-2">
                        <input type="submit" class="btn btn-success" value="<?php echo get_phrase('save'); ?>">
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>
