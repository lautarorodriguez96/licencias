<?php

/**
 * @file
 * Default theme implementation to display the bar for a single choice in a
 * poll.
 *
 * Variables available:
 * - $title: The title of the poll.
 * - $votes: The number of votes for this choice
 * - $total_votes: The number of votes for this choice
 * - $percentage: The percentage of votes for this choice.
 * - $vote: The choice number of the current user's vote.
 * - $voted: Set to TRUE if the user voted for this choice.
 *
 * @see template_preprocess_poll_bar()
 */
// var_dump($vote);
?>
<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
	<div class="progress">
		<div 
			class="progress-bar progress-bar-default"
			aria-valuenow="<?php echo $percentage; ?>"
			aria-valuemin="0"
			aria-valuemax="100"
			style="width: <?php echo $percentage; ?>%;"
		>
			<strong><?php echo $percentage; ?>%</strong>
			<?php if($vote): ?>
				<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
			<?php endif; ?>
			<p><?php print $title; ?></p>
		</div>
	</div>
</div>