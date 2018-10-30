<?php
$single_entradas_info = $this->db->get_where('cdp_entradas', array('en_id' => $param2))->result_array();
foreach ($single_entradas_info as $row) {
?>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>Editar entradas</h3>
                    </div>
                </div>

                <div class="panel-body">

                    <form role="form" class="form-horizontal form-groups-bordered validate" action="<?php echo base_url(); ?>index.php?aselsi/entradas/update/<?php echo $row['en_id']; ?>" method="post" enctype="multipart/form-data">

                        <!--Fecha Adquisición-->
                    <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Fecha_Adquisición'); ?></label>
                            <div class="col-sm-5">
                                <input type="date" name="fecha_add" class="form-control" id="field-1" value="<?php echo $row['en_fecha_add']; ?>" required>
                            </div>
                    </div>
                        <!--Fecha Vencimiento-->
                    <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Fecha_vencimiento'); ?></label>
                            <div class="col-sm-5">
                                <input type="date" name="fecha_ven" class="form-control" id="field-1" value="<?php echo $row['en_fecha_expiracion']; ?>" required>
                            </div>
                    </div>

                    <!--Factura-->
                    <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('NO. Factura'); ?></label>
                            <div class="col-sm-5">
                                <input type="text" name="factura" class="form-control" id="field-1" value="<?php echo $row['en_num_factura']; ?>" required>
                            </div>
                    </div>

                    <!--costo-->
                    <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Costo'); ?></label>
                            <div class="col-sm-5">
                                <input type="num" name="costo" class="form-control" id="field-1" value="<?php echo $row['en_costo']; ?>" required>
                            </div>
                    </div>
                    <!--cantidad-->
                    <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('cantidad'); ?></label>
                            <div class="col-sm-5">
                                <input type="num" name="cantidad" class="form-control" id="field-1" value="<?php echo $row['en_cantidad']; ?>" required>
                            </div>
                    </div>
                    <!--bonificacion-->
                    <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('bonificacion'); ?></label>
                            <div class="col-sm-5">
                                <input type="num" name="bonificacion" class="form-control" id="field-1" value="<?php echo $row['en_bonificacion']; ?>" required>
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
