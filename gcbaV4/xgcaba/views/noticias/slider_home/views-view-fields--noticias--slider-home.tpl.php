<?php

/**
 * Template que se usa para la vista que muestra noticias en el home
 */

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */

$path = !empty($fields['nid']) ? url('node/' . $fields['nid']->content) : '#';
$image = !empty($fields['field_image']) ? $fields['field_image']->content : '';
$title = !empty($fields['title_1']) ? $fields['title_1']->content : '';
$tags = !empty($fields['term_node_tid']) ? $fields['term_node_tid']->content : '';

?>
<figure>
  <a href="<?php echo $path; ?>">
    <div>
      <?php echo $image; ?>
    </div>
  </a>
  <div class="tags-noticias"><?php echo $tags; ?></div>
  <figcaption>
    <a href="<?php echo $path; ?>">
      <h4><?php echo $title; ?></h4>
    </a>
  </figcaption>
</figure>