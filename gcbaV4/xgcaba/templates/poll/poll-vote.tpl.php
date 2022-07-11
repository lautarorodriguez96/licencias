<?php

/**
 * @file
 * Default theme implementation to display voting form for a poll.
 *
 * - $choice: The radio buttons for the choices in the poll.
 * - $title: The title of the poll.
 * - $block: True if this is being displayed as a block.
 * - $vote: The vote button
 * - $rest: Anything else in the form that may have been added via
 *   form_alter hooks.
 *
 * @see template_preprocess_poll_vote()
 *
 * @ingroup themeable
 */
?>
<div class="clearfix">
  <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
    <div class="poll">
      <div class="vote-form">
        <div class="choices">
          <div class="title text-center"><?php print $title; ?></div>
          <div class="clearfix">
              <div class="col-md-offset-1 col-md-1">
                <?php print $choice; ?>
              </div>
          </div>
        </div>
        <div class="center-block text-center">
          <?php print $vote; ?>
        </div>
      </div>
      <?php // This is the 'rest' of the form, in case items have been added. ?>
      <?php print $rest ?>
    </div>
  </div>
</div>