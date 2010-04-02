<?php
// $Id: comment.tpl.php,v 1.7 2008/01/04 19:24:23 goba Exp $
?>
<!-- comments.tpl.php -->
<h3>Comments</h3>
<div class="comment<?php print ' '. $status; ?>">
	<?php if ($picture) print $picture; ?>
	<h4 class="title"><?php print $title; ?></h4>
	<?php if ($new != '') { ?><span class="new"><?php print $new; ?></span><?php } ?>
		<?php //print $submitted; ?>
		<?php print $content; ?>
		<?php if ($signature): ?>
			<div class="clear-block">
			<div>—</div>
			<?php print $signature ?>
			</div>
		<?php endif; ?>
	<?php print $links; ?>
</div>
<!-- end of comments.tpl.php -->