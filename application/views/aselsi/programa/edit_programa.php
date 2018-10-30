<?php
$single_programa_info = $this->db->get_where('cdp_programa', array('progra_id' => $param2))->result_array();
foreach ($single_programa_info as $row) {
?>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>Editar programas</h3>
                    </div>
                </div>

                <div class="panel-body">

                    <form role="form" class="form-horizontal form-groups-bordered validate" action="<?php echo base_url(); ?>index.php?aselsi/programa/update/<?php echo $row['progra_id']; ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name'); ?></label>

                            <div class="col-sm-5">
                                <input type="text" name="nombre" class="form-control" id="field-1" value="<?php echo $row['progra_nombre']; ?>" required>
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
