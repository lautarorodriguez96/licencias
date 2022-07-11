<?php
/**
 * @file
 * Rate widget theme
 *
 * This is the default template for rate widgets. See section 3 of the README
 * file for information on theming widgets.
 *
 * Available variables:
 * - $links: Array with vote links
 *     array(
 *       array(
 *         'text' => 'Button label',
 *         'href' => 'Link href',
 *         'value' => 20,
 *         'votes' => 6,
 *       ),
 *     )
 * - $results: Array with voting results
 *     array(
 *       'rating' => 12, // Average rating
 *       'options' => array( // Votes per option. Only available when value_type == 'options'
 *         1 => 234,
 *         2 => 34,
 *       ),
 *       'count' => 23, // Number of votes
 *       'up' => 2, // Number of up votes. Only available for thumbs up / down.
 *       'down' => 3, // Number of down votes. Only available for thumbs up / down.
 *       'up_percent' => 40, // Percentage of up votes. Only available for thumbs up / down.
 *       'down_percent' => 60, // Percentage of down votes. Only available for thumbs up / down.
 *       'user_vote' => 80, // Value for user vote. Only available when user has voted.
 *     )
 * - $mode: Display mode.
 * - $just_voted: Indicator whether the user has just voted (boolean).
 * - $content_type: "node" or "comment".
 * - $content_id: Node or comment id.
 * - $buttons: Array with themed buttons (built in preprocess function).
 * - $info: String with user readable information (built in preprocess function).
 */
?>

<?php if(!$results['user_vote']): ?>
  <?php print '<h2 class="text-center title">¿Te sirvió esta información?</h2>' ?>
  <?php print '<div class="text-center description">Elegí una opción y ayudanos a seguir mejorando</div>' ?>
  <?php print theme('item_list', array('items' => $buttons)); ?>
<?php endif; ?>

<?php print '<p class="lead rate-status text-center" style="margin-top: 34px !important;"></p>'; ?>

<?php if ($info): ?>
  <?php print '<div class="rate-voted text-center"><h3>¡Gracias por tu opinión! <br /> Nos ayuda a seguir mejorando.</h3></div>'; ?>
<?php endif; ?>

<?php if ($display_options['description']): ?>
  <?php print '<div class="rate-description">' . $display_options['description'] . '</div>'; ?>
<?php endif; ?>
