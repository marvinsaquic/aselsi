<button onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/entradas/add_entradas/');" 
    class="btn btn-primary pull-right"><i class="entypo-list-add"></i>
    <?php echo get_phrase('add_entradas'); ?>
</button>
<div style="clear:both;"></div>
<br>
<table class="table table-bordered table-striped datatable" id="table-2">
    <thead>
        <tr>
            <th><?php echo get_phrase('Fecha Adquisición'); ?></th>
            <th><?php echo get_phrase('Fecha Vencimiento'); ?></th>
            <th><?php echo get_phrase('No. Factura'); ?></th>
            <th><?php echo get_phrase('Costo'); ?></th>
            <th><?php echo get_phrase('cantidad'); ?></th>
            <th><?php echo get_phrase('bonificacion'); ?></th>
            <th><?php echo get_phrase('options'); ?></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($entradas_info as $row) { ?>   
            <tr>
                <td><?php echo $row['en_fecha_add']; ?></td>
                <td><?php echo $row['en_fecha_expiracion']; ?></td>
                <td><?php echo $row['en_num_factura']; ?></td>
                <td><?php echo $row['en_costo']; ?></td>
                <td><?php echo $row['en_cantidad']; ?></td>
                <td><?php echo $row['en_bonificacion']; ?></td>
                <td>
                    <a  onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/entradas/edit_entradas/<?php echo $row['en_id'] ?>');" 
                        class="btn btn-default btn-sm btn-icon icon-left">
                        <i class="entypo-pencil"></i>
                        <?php echo get_phrase('update'); ?>
                    </a>
                    <a href="<?php echo base_url(); ?>index.php?aselsi/entradas/delete/<?php echo $row['en_id'] ?>" 
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