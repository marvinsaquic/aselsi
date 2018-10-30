<?php
$single_salida_info = $this->db->get_where('crg_salida', array('sal_id' => $param2))->result_array();
foreach ($single_salida_info as $row) {
?>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>Salidas</h3>
                    </div>
                </div>

                <div class="panel-body">

                    <form role="form" class="form-horizontal form-groups-bordered validate" action="<?php echo base_url(); ?>index.php?aselsi/salida/update/<?php echo $row['sal_id']; ?>" method="post" enctype="multipart/form-data">

                         <!-- SELECCIONANDO medicamento-->
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('medicina'); ?></label>
                        <div class="col-sm-5">
                            <select name="medicamento" class="selectboxit">
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
                                <?php $single_programa_info = $this->db->get_where('cdp_programa')->result_array();
                                    foreach ($single_programa_info as $rowp) { ?>
                                    <option value="<?php echo $rowp['com_id']; ?>"> <?php echo $rowp['com_nombre'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div> 

                     <!-- SELECCIONANDO CANTIDAD -->
                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('cantidad'); ?></label>
                            <div class="col-sm-5">
                                <input type="number" name="cantidad" class="form-control" id="field-1" value="<?php echo $row['sal_cantidad']; ?>" readonly>
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
