<?php
$single_producto_info = $this->db->get_where('crg_producto', array('pro_id' => $param2))->result_array();
foreach ($single_producto_info as $row) {
?>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>Editar Datos Producto</h3>
                    </div>
                </div>

                <div class="panel-body">

                    <form role="form" class="form-horizontal form-groups-bordered validate" action="<?php echo base_url(); ?>index.php?credigamma/producto/update/<?php echo $row['pro_id']; ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('product'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="pnombre" class="form-control" id="field-1" value="<?php echo $row['pro_nombre']; ?>" required>
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('monto_maximo'); ?></label>

                            <div class="col-sm-5">
                                <input type="text" name="pmontom" class="form-control" id="field-1" value="<?php echo $row['pro_monto_maximo']; ?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('plazo_maximo'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="pplazom" class="form-control" id="field-1" value="<?php echo $row['pro_plazo_maximo']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Tasa'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="ptasa" class="form-control" id="field-1" value="<?php echo $row['pro_tasa']; ?>" required>
                        </div>
                    </div>

                        <div class="col-sm-3 control-label col-sm-offset-2">
                            <input type="submit" class="btn btn-success" value="<?php echo get_phrase('update'); ?>">
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
<?php } ?>
