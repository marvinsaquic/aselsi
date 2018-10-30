<div class="row">    
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <h3><?php echo get_phrase('add_medicamento'); ?></h3>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" class="form-horizontal form-groups-bordered validate" action="<?php echo base_url(); ?>index.php?aselsi/medicamento/create" method="post" enctype="multipart/form-data">

                            <!--  código del medicamento-->

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('codigo'); ?></label>
                        <div class="col-sm-5">
                        <input type="text" name="codigo" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_codigo');?>" required>
                        </div>
                    </div>

                                <!--nombre-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('nombre'); ?></label>
                        <div class="col-sm-5">
                        <input type="text" name="nombre" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_nombre');?>" required>
                        </div>
                    </div>
                    
                     <!-- SELECCIONANDO composicion-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('composicion'); ?></label>
                        <div class="col-sm-5">
                            <select name="composicion" class="selectboxit">
                                <option value="">-- Seleccionar composicion --</option>
                                <?php $single_composicion_info = $this->db->get_where('cdp_composicion')->result_array();
                                    foreach ($single_composicion_info as $rowc) { ?>
                                    <option value="<?php echo $rowc['com_id']; ?>"> <?php echo $rowc['com_nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div> 
                     <!-- SELECCIONANDO grupo -->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('grupo'); ?></label>
                        <div class="col-sm-5">
                            <select name="grupo" class="selectboxit">
                                <option value="">-- Seleccionar grupo--</option>
                                <?php $single_grupo_info = $this->db->get_where('cdp_grupo')->result_array();
                                    foreach ($single_grupo_info as $rowg) { ?>
                                    <option value="<?php echo $rowg['gru_id']; ?>"> <?php echo $rowg['gru_nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <!-- SELECCIONANDO proveedor-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('proveedor'); ?></label>
                        <div class="col-sm-5">
                            <select name="proveedor" class="selectboxit">
                                <option value="">-- Seleccionar proveedor --</option>
                                <?php $single_proveedor_info = $this->db->get_where('cdp_proveedor')->result_array();
                                    foreach ($single_proveedor_info as $rowp) { ?>
                                    <option value="<?php echo $rowp['pro_codigo']; ?>"> <?php echo $rowp['pro_nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div> 
                    <!-- SELECCIONANDO entrada-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Fecha_adquisicion'); ?></label>
                        <div class="col-sm-5">
                            <select name="entradas" class="selectboxit">
                                <option value="">-- Seleccionar Fecha add--</option>
                                <?php $single_entradas_info = $this->db->get_where('cdp_entradas')->result_array();
                                    foreach ($single_entradas_info as $rowe) { ?>
                                    <option value="<?php echo $rowe['en_id']; ?>"> <?php echo $rowe['en_fecha_add'] ?></option>
                                <?php } ?>
                            </select>
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
