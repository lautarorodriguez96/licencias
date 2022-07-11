<?php

/**
 * @file
 * Default theme implementation to display the poll results in a block.
 *
 * Variables available:
 * - $title: The title of the poll.
 * - $results: The results of the poll.
 * - $votes: The total results in the poll.
 * - $links: Links in the poll.
 * - $nid: The nid of the poll
 * - $cancel_form: A form to cancel the user's vote, if allowed.
 * - $raw_links: The raw array of links.
 * - $vote: The choice number of the current user's vote.
 *
 * @see template_preprocess_poll_results()
 *
 * @ingroup themeable
 */
?>
<div class="clearfix">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
        <div class="poll">
            <div class="title text-center">
                <?php echo $title ?>
            </div>
            <div class="row">
                <?php print $results; ?>
            </div>
                <div class="center-block text-center">
                  <small class="total text-muted">
                    <?php print t('Total votes: @votes', array('@votes' => $votes)); ?>
                  </small>
                  <?php if (!empty($cancel_form)): ?>
                      <?php print $cancel_form; ?>
                  <?php endif; ?>
                </div>
        </div>
    </div>
</div>
