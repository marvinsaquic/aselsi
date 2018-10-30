<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <h3><?php echo get_phrase('add_salida'); ?></h3>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" class="form-horizontal form-groups-bordered validate" action="<?php echo base_url(); ?>index.php?aselsi/salida/create" method="post" enctype="multipart/form-data">


                   <!-- SELECCIONANDO medicamento-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('medicamento'); ?></label>
                        <div class="col-sm-5">
                            <select name="medicamento" class="selectboxit">
                                <option value="">-- Seleccionar medicamento --</option>
                                <?php $single_medicamento_info = $this->db->get_where('cdp_medicamento')->result_array();
                                    foreach ($single_medicamento_info as $rowm) { ?>
                                    <option value="<?php echo $rowm['me_id']; ?>"> <?php echo $rowm['me_nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div> 

                     <!-- SELECCIONANDO programa-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('programa'); ?></label>
                        <div class="col-sm-5">
                            <select name="programa" class="selectboxit">
                                <option value="">-- Seleccionar programa --</option>
                                <?php $single_programa_info = $this->db->get_where('cdp_programa')->result_array();
                                    foreach ($single_programa_info as $rowc) { ?>
                                    <option value="<?php echo $rowc['progra_id']; ?>"> <?php echo $rowc['progra_nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div> 
                    
                     <!-- cantidad -->
                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('cantidad'); ?></label>
                        <div class="col-sm-9">
                            <input type="number" name="cantidad" class="form-control" id="field-ta">
                        </div>
                    </div>
                    

                    <div class="col-sm-3 control-label col-sm-offset-2">
                        <input type="submit" class="btn btn-success" value="Guardar">
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>
