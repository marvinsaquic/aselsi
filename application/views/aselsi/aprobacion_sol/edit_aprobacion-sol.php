<?php
$single_cliente_info = $this->db->get_where('crg_solicitud', array('sol_id' => $param2))->result_array();
foreach ($single_cliente_info as $row) {
?>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>Editar datos Clientes</h3>
                    </div>
                </div>

                <div class="panel-body">

                    <form role="form" class="form-horizontal form-groups-bordered validate" action="<?php echo base_url(); ?>index.php?credigamma/solicitud/update/<?php echo $row['sol_id']; ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('DPI'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="cdpi" class="form-control" id="field-1" value="<?php echo $row['cl_dpi']; ?>" required>
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name'); ?></label>

                            <div class="col-sm-5">
                                <input type="text" name="cname" class="form-control" id="field-1" value="<?php echo $row['cl_nombre']; ?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('apellido'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="capellido" class="form-control" id="field-1" value="<?php echo $row['cl_apellido']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('nit'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="cnit" class="form-control" id="field-1" value="<?php echo $row['cl_nit']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('edad'); ?></label><!-- falta recuperar año de la DB-->
                        <div class="col-sm-5">
                            <input type="date" name="cfnac" class="form-control" id="field-1" value="<?php echo $row['cl_edad']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('phone'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="ctel" class="form-control" id="field-1" value="<?php echo $row['cl_telefono']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('salario'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="csalario" class="form-control" id="field-1" value="<?php echo $row['cl_salario']; ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('tiempo_laboral'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="ctlaboral" class="form-control" id="field-1" value="<?php echo $row['cl_tiempo_laboral']; ?>" required>
                        </div>
                    </div>

                        <div class="col-sm-3 control-label col-sm-offset-2">
                            <input type="submit" class="btn btn-success" value="Actualizar">
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
<?php } ?>
