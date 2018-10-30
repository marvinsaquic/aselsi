<div class="row">    
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <h3><?php echo get_phrase('add_donante'); ?></h3>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" class="form-horizontal form-groups-bordered validate" action="<?php echo base_url(); ?>index.php?aselsi/donante/create" method="post" enctype="multipart/form-data">
                    <!--nombre-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('nombre'); ?></label>
                        <div class="col-sm-5">
                        <input type="text" name="nombre" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_nombre');?>" required>
                        </div>
                    </div>
                    <!--direccion-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('direccion'); ?></label>
                        <div class="col-sm-5">
                        <input type="text" name="direccion" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_direccion');?>" required>
                        </div>
                    </div>
                    <!--telefono-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('telefono'); ?></label>
                        <div class="col-sm-5">
                        <input type="text" name="telefono" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_telefono');?>" required>
                        </div>
                    </div>
                    <!--fecha-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('fecha'); ?></label>
                        <div class="col-sm-5">
                        <input type="date" name="fecha" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_fecha');?>" required>
                        </div>
                    </div>
                    <!--cantidad-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('cantidad'); ?></label>
                        <div class="col-sm-5">
                        <input type="text" name="cantidad" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_cantidad');?>" required>
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
