<button onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/producto/add_producto/');" 
    class="btn btn-primary pull-right"><i class="entypo-list-add"></i>
    <?php echo get_phrase('add_request'); ?>
</button>
<div style="clear:both;"></div>
<br>
<table class="table table-bordered table-striped datatable" id="table-2">
    <thead>
        <tr>
            <th><?php echo get_phrase('producto'); ?></th>
            <th><?php echo get_phrase('monto_maximo'); ?></th>
            <th><?php echo get_phrase('plazo_maximo'); ?></th>
            <th><?php echo get_phrase('tasa'); ?></th>
            <th><?php echo get_phrase('options'); ?></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($producto_info as $row) { ?>   
            <tr>
                <td><?php echo $row['pro_nombre']; ?></td>
                <td><?php echo $row['pro_monto_maximo']; ?></td>
                <td><?php echo $row['pro_plazo_maximo']; ?></td>
                <td><?php echo $row['pro_tasa']; ?></td>
                <td>
                    <a  onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/producto/edit_producto/<?php echo $row['pro_id'] ?>');" 
                        class="btn btn-default btn-sm btn-icon icon-left">
                        <i class="entypo-pencil"></i>
                        <?php echo get_phrase('update'); ?>
                    </a>
                    <a href="<?php echo base_url(); ?>index.php?credigamma/producto/delete/<?php echo $row['pro_id'] ?>" 
                       class="btn btn-danger btn-sm btn-icon icon-left" onclick="return checkDelete();">
                        <i class="entypo-cancel"></i>
                        <?php echo get_phrase('delete'); ?>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script type="text/javascript">
    jQuery(window).load(function ()
    {
        var $ = jQuery;

        $("#table-2").dataTable({
            "sPaginationType": "bootstrap",
            "sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>"
        });

        $(".dataTables_wrapper select").select2({
            minimumResultsForSearch: -1
        });

        // Highlighted rows
        $("#table-2 tbody input[type=checkbox]").each(function (i, el)
        {
            var $this = $(el),
                    $p = $this.closest('tr');

            $(el).on('change', function ()
            {
                var is_checked = $this.is(':checked');

                $p[is_checked ? 'addClass' : 'removeClass']('highlight');
            });
        });

        // Replace Checboxes
        $(".pagination a").click(function (ev)
        {
            replaceCheckboxes();
        });
    });
</script>