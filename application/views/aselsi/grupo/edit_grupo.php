<?php
$single_grupo_info = $this->db->get_where('cdp_grupo', array('gru_id' => $param2))->result_array();
foreach ($single_grupo_info as $row) {
?>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>Editar Grupos</h3>
                    </div>
                </div>

                <div class="panel-body">

                    <form role="form" class="form-horizontal form-groups-bordered validate" action="<?php echo base_url(); ?>index.php?aselsi/grupo/update/<?php echo $row['gru_id']; ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('nombre'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="nombre" class="form-control" id="field-1" value="<?php echo $row['gru_nombre']; ?>" required>
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
