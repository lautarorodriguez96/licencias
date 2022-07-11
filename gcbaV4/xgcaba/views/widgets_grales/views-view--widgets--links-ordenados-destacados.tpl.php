<?php
/**
 * @file views-view.tpl.php
 * Main view template
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */

?>

<?php 

$title = $variables["view"]->args[1];

$icon = $variables["view"]->args[2];

if(!file_exists('sites/gcaba/files/short-'. $icon .'.png')) {
  $icon = "link";
}


?>

<div class="pagina-enlaces">
  <span>
    <em style="background-image:url('/sites/gcaba/files/short-<?php echo $icon;?>.png')"></em>
  </span>
  <h3>
    <?php echo $title ?>
  </h3>
</div>


<div class="<?php print $classes; ?>">

  <?php if ($rows): ?>
    <div class="view-content">
      <?php print $rows; ?>
    </div>
  <?php endif; ?>

</div>

<?php /* class view */ ?>