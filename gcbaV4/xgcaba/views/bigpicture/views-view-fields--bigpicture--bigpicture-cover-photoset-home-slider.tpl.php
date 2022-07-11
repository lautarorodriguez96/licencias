<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($fields as $id => $field): ?>

    <?php print $field->content; ?>
<?php endforeach; ?>
