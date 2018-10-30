<div class="row">
    <div class="col-md-12">
<?php echo form_open(base_url() . 'index.php?aselsi/system_settings/do_update', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top'));
?>
        <div class="panel panel-primary" >

            <div class="panel-heading">
                <div class="panel-title">
                    <?php echo get_phrase('system_settings'); ?>
                </div>
            </div>

            <div class="panel-body">

                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('system_name'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="system_name"
                               value="<?php echo $this->db->get_where('crg_settings', array('se_type' => 'system_name'))->row()->se_descripcion; ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('system_title'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="system_title"
                               value="<?php echo $this->db->get_where('crg_settings', array('se_type' => 'system_title'))->row()->se_descripcion; ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('address'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="address"
                               value="<?php echo $this->db->get_where('crg_settings', array('se_type' => 'address'))->row()->se_descripcion; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('phone'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="phone"
                               value="<?php echo $this->db->get_where('crg_settings', array('se_type' => 'phone'))->row()->se_descripcion; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('paypal_email'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="paypal_email"
                               value="<?php echo $this->db->get_where('crg_settings', array('se_type' => 'paypal_email'))->row()->se_descripcion; ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('currency'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="currency"
                               value="<?php echo $this->db->get_where('crg_settings', array('se_type' => 'currency'))->row()->se_descripcion; ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('system_email'); ?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="system_email"
                               value="<?php echo $this->db->get_where('crg_settings', array('se_type' => 'system_email'))->row()->se_descripcion; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('language'); ?></label>
                    <div class="col-sm-5">
                        <select name="language" class="selectboxit">
                            <?php
                            $fields = $this->db->list_fields('crg_language');
                            foreach ($fields as $field) {
                                if ($field == 'la_id' || $field == 'la_frase')
                                    continue;

                                $current_default_language = $this->db->get_where('crg_settings', array('se_type' => 'language'))->row()->se_descripcion;
                                ?>
                                <option value="<?php echo $field; ?>"
                                        <?php if ($current_default_language == $field) echo 'selected'; ?>> <?php echo $field; ?> </option>
                                        <?php
                                    }
                                    ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-3 control-label"><?php echo get_phrase('text_align'); ?></label>
                    <div class="col-sm-5">
                        <select name="text_align" class="selectboxit">
                            <?php $text_align = $this->db->get_where('crg_settings', array('se_type' => 'text_align'))->row()->se_descripcion; ?>
                            <option value="left-to-right" <?php if ($text_align == 'left-to-right') echo 'selected'; ?>> left-to-right (LTR)</option>
                            <option value="right-to-left" <?php if ($text_align == 'right-to-left') echo 'selected'; ?>> right-to-left (RTL)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" class="btn btn-info"><?php echo get_phrase('save'); ?></button>
                    </div>
                </div>

            </div>

        </div>
<!--</form>-->
<!-- Updater -->
  <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <?php echo get_phrase('update_product');?>
                </div>
            </div>


            <div class="panel-body form-horizontal form-groups-bordered">
                <?php echo form_open(base_url().'index.php?updater/update' , array('class' => 'form-horizontal form-groups-bordered', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><?php echo get_phrase('file'); ?></label>

                        <div class="col-sm-5">

                            <input type="file" name="file_name" class="form-control file2 inline btn btn-primary" data-label="<i class='glyphicon glyphicon-file'></i> Browse" />

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <input type="submit" class="btn btn-info" value="<?php echo get_phrase('install_update'); ?>" />
                        </div>
                    </div>

                <?php echo form_close(); ?>
            </div>
        </div>
</div>
</div>
