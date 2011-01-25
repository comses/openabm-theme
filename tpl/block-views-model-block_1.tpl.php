<?php
// $Id: block.tpl.php 3 2010-04-02 22:57:10Z tsilva $
?>
<!-- Block-views-model-block_1.tpl.php -->
 <div class="featuredmodel block">
	<? if ($block->subject) :?>
		<h2 class="title"><?php print $block->subject; ?></h2>
	<? endif; ?>
	<div>
		<?php print $block->content; ?>
	</div>
	<p class="featuredfooter"></p>
 </div>
 <!-- End Block-views-model-block_1.tpl.php -->
