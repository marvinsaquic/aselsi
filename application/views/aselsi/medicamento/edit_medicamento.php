<?php
$single_medicamento_info = $this->db->get_where('cdp_medicamento', array('me_id' => $param2))->result_array();
foreach ($single_medicamento_info as $row) {
?>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>Editar datos medicamento</h3>
                    </div>
                </div>

                <div class="panel-body">

                    <form role="form" class="form-horizontal form-groups-bordered validate" action="<?php echo base_url(); ?>index.php?aselsi/medicamento/update/<?php echo $row['me_id']; ?>" method="post" enctype="multipart/form-data">
                            <!-- codigo -->
                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('codigo'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="codigo" class="form-control" id="field-1" value="<?php echo $row['me_codigo']; ?>">
                        </div>
                    </div>
                        <!-- nombre -->
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('nombre'); ?></label>

                            <div class="col-sm-5">
                                <input type="text" name="nombre" class="form-control" id="field-1" value="<?php echo $row['me_nombre']; ?>" readonly>
                            </div>
                        </div>

                   <!-- SELECCIONANDO composicion-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('composicion'); ?></label>
                        <div class="col-sm-5">
                            <select name="composicion" class="selectboxit">
                                <?php $single_composicion_info = $this->db->get_where('cdp_composicion')->result_array();
                                    foreach ($single_composicion_info as $rowc) { ?>
                                    <option value="<?php echo $rowc['com_id']; ?>"> <?php echo $rowc['com_nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div> 
                   <!-- SELECCIONANDO grupo-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('grupo'); ?></label>
                        <div class="col-sm-5">
                            <select name="grupo" class="selectboxit">
                                <?php $single_grupo_info = $this->db->get_where('cdp_grupo')->result_array();
                                    foreach ($single_grupo_info as $rowg) { ?>
                                    <option value="<?php echo $rowg['com_id']; ?>"> <?php echo $rowg['gru_nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div> 

                    <!-- SELECCIONANDO proveedor-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('proveedor'); ?></label>
                        <div class="col-sm-5">
                            <select name="proveedor" class="selectboxit">
                                <?php $single_proveedor_info = $this->db->get_where('cdp_proveedor')->result_array();
                                    foreach ($single_proveedor_info as $rowp) { ?>
                                    <option value="<?php echo $rowp['com_id']; ?>"> <?php echo $rowp['pro_nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div> 
                    <!-- SELECCIONANDO entradas-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('entradas'); ?></label>
                        <div class="col-sm-5">
                            <select name="entradas" class="selectboxit">
                                <?php $single_entradas_info = $this->db->get_where('cdp_entradas')->result_array();
                                    foreach ($single_entradas_info as $rowe) { ?>
                                    <option value="<?php echo $rowe['com_id']; ?>"> <?php echo $rowe['en_fecha_add'] ?></option>
                                <?php } ?>
                            </select>
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
