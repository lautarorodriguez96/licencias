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

$link_iphone  = !empty($view->field['field_aplicacion_link_iphone']->last_render_text) ? $view->field['field_aplicacion_link_iphone']->last_render_text : '';
$link_android = !empty($view->field['field_aplicacion_link_android']->last_render_text) ? $view->field['field_aplicacion_link_android']->last_render_text : '';
$full_path    = $GLOBALS['base_url'];
?>

<div class="download-links-container">
    <ul class="store-buttons">
        <h3>Descargá la aplicación para:</h3>
            
        <?php if( !empty($link_iphone)): ?><a href="<?php echo $link_iphone; ?>" target="_blank"><img src="<?php echo $full_path; ?>/sites/gcaba/themes/gcbaV4/xgcaba/img/appstore.png" width="20%"></a> <?php endif; ?>

        <?php if(!empty($link_android)): ?><a href="<?php echo $link_android; ?>" target="_blank"><img src="<?php echo $full_path; ?>/sites/gcaba/themes/gcbaV4/xgcaba/img/playstore.png" width="20%"></a> <?php endif; ?>
    </ul>
</div>