<?php
/**
 * @file views-view-row-rss.tpl.php
 * Default view template to display a item in an RSS feed.
 *
 * @ingroup views_templates
 */
?>
  <item>
    <title><?php print $title; ?></title>
    <link><?php print $link; ?></link>
    <description><?php print $description; ?></description>
    <?php
    $item_elements = preg_replace('#(<dc:creator>).*?(</dc:creator>)#', '', $item_elements);
    print_r($item_elements);
    ?>
  </item>