<div class="row">
    <div class="col-md-12">

        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <h3 align="center"><?php echo get_phrase('add_programa'); ?></h3>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" class="form-horizontal form-groups-bordered validate" action="<?php echo base_url(); ?>index.php?aselsi/programa/create" method="post" enctype="multipart/form-data">
                    

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Nombre'); ?></label>

                        <div class="col-sm-5">
                            <input type="text" name="nombre" class="form-control" id="field-1" placeholder="<?php echo get_phrase('ingrese_nombre_programa');?>" required>
                        </div>
                    </div>
                   

                    <div class="col-sm-5 control-label col-sm-offset-2">
                        <input type="submit" class="btn btn-success" value=" <?php echo get_phrase('save'); ?> ">
                    </div>
                </form>

            </div>

        </div>

    </div>
</div>
