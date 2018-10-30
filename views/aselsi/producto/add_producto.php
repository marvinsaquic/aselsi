<div class="row">    
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <h3><?php echo get_phrase('add_product'); ?></h3>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" class="form-horizontal form-groups-bordered validate" action="<?php echo base_url(); ?>index.php?credigamma/producto/create" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('producto'); ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="pnombre" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_producto');?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('monto_maximo'); ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="pmontom" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_monto_maximo');?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('plazo_maximo'); ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="pplazom" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_plazo_maximo');?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('tasa'); ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="ptasa" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_tasa');?>" required>
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
