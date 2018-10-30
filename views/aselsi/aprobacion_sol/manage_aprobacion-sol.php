<button onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/aprobacion/add_sol_aprob/');" 
    class="btn btn-primary pull-right"><i class="entypo-list-add"></i>
    <?php echo get_phrase('add_approval'); ?>
</button>
<div style="clear:both;"></div>
<br>
<table class="table table-bordered table-striped datatable" id="table-2">
    <thead>
        <tr>
            <th><?php echo get_phrase('Cliente'); ?></th>
            <th><?php echo get_phrase('Producto'); ?></th>
            <th><?php echo get_phrase('Monto'); ?></th>
            <th><?php echo get_phrase('fecha_aprobacion'); ?></th>
            <th><?php echo get_phrase('monto_aprobacion'); ?></th>
            <th><?php echo get_phrase('monto_aprovado'); ?></th>
            <th><?php echo get_phrase('plazo'); ?></th>
            <th><?php echo get_phrase('options'); ?></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($aprobsol_info as $row) { ?>   
            <tr>
                <td><?php echo $row['sol_cl_id']; ?></td>
                <td><?php echo $row['sol_pro_id']; ?></td>
                <td><?php echo $row['sol_monto']; ?></td>
                <td><?php echo $row['sol_fecha_soli']; ?></td>
                <td><?php echo $row['sol_monto_soli']; ?></td>
                <td><?php echo $row['sol_monto_aprob']; ?></td>
                <td><?php echo $rowm['sol_plazo']; ?></td>
                <td>
                    <a  onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/aprobacion/edit_sol_aprob/<?php echo $row['de_id'] ?>');" 
                        class="btn btn-default btn-sm btn-icon icon-left">
                        <i class="entypo-pencil"></i>
                        Editar
                    </a>
                    <a href="<?php echo base_url(); ?>index.php?credigamma/aprobacion/delete/<?php echo $row['sol_id'] ?>" 
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