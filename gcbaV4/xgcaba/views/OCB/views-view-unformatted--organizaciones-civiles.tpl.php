<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="container">
    <?php
        $columnas = 3;
        $formatted_rows = array_chunk($rows,$columnas, false);
    ?>
    <?php foreach ($formatted_rows as $items): ?>
        <div class="row">
            <?php foreach ($items as $id => $row): ?>
                <div class="<?php print $classes_array[$id]; ?> col-4 col-sm-4 col-xs-12">
                    <?php print $row; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>
 <div class="clear"></div>
<div class="container btn_verTodas">
    <div class="actions col-md-6 col-md-offset-3">
        <div class="search btn btn-default btn-lg btn-block"><a href="#">Ver Todas</a></div>
        <div class="clear"></div>
    </div>
</div>
