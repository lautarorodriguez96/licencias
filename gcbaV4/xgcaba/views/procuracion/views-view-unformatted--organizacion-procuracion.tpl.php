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
