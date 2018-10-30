<div class="row">    
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <h3><?php echo get_phrase('add_request'); ?></h3>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" class="form-horizontal form-groups-bordered validate" action="<?php echo base_url(); ?>index.php?credigamma/solicitud/create" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('client'); ?></label>
                        <div class="col-sm-5">
                            <select name="siduser" class="selectboxit">
                                <?php $single_estado_info = $this->db->get_where('crg_estado')->result_array();
                                    foreach ($single_estado_info as $row) { ?>
                                    <option value="">-- Seleccionar estado --</option>
                                    <option value="<?php echo $row['cl_id']; ?>"> <?php echo $row['cl_nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                        <!-- SELECCIONANDO PRODUCTO -->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('producto'); ?></label>
                        <div class="col-sm-5">
                            <select name="sidpro" class="selectboxit">
                                <?php $single_producto_info = $this->db->get_where('crg_producto')->result_array();
                                    foreach ($single_producto_info as $row) { ?>
                                    <option value="">-- Seleccionar Producto --</option>
                                    <option value="<?php echo $row['pro_id']; ?>"> <?php echo $row['pro_nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('monto'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="smonto" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_monto');?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('date_request'); ?></label>
                        <div class="col-sm-5">
                            <input type="date" name="sfsol" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_fecha');?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('monto_solicitado'); ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="smontosol" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_monto_solicitado');?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('monto_aprobado'); ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="smontoap" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_monto_aprobado');?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('plazo'); ?></label>
                        <div class="col-sm-5">
                            <input type="text" name="splazo" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_plazo');?>" required>
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
