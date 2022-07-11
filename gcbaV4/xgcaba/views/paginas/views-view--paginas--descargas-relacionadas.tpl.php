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
<?php if ($rows): ?>
<div class="separador_descargas"></div>
<h2 class="pane-title contenido_relacionado">Descargas Relacionadas</h2>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <td style="width:475px">Nombre</td>
            <td style="width:90px">Tamaño</td>
            <td>Descargas</td>
        </tr>
    </thead>
    <tbody>
        <?php print $rows; ?>
    </tbody>
</table>
<?php elseif ($empty): ?>
  <div class="view-empty">
    <?php print $empty; ?>
  </div>
<?php endif; ?>
