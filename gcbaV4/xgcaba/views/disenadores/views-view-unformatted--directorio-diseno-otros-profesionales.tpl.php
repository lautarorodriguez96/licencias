<?php
drupal_add_css(path_to_theme().'/views/disenadores/css/disenadores.css');

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="container mt-2 mb-2">
    <?php foreach ($rows as $id => $row): ?>
        <div<?php if ($classes_array[$id]): ?> class="<?php print $classes_array[$id]; ?>"<?php endif; ?>>
            <?php print $row; ?>
        </div>
    <?php endforeach; ?>
    <div style="width: 37%; margin-left: auto; margin-right: auto;"><a href="<?php echo $GLOBALS['base_url'].'/directorio-de-servicios-de-diseno'; ?>"><button class="mt-1 btn btn-xl btn-primary btn btn-default form-submit nueva_busqueda" name="op" value="Realizar nueva búsqueda" type="button" data-loading-text="<i class=\'fa fa-circle-o-notch fa-spin\'></i> Processing Order">Realizar nueva búsqueda <i class="glyphicon glyphicon-refresh glyphicon-spin" style="display: none;"></i></button></a></div>
</div>
