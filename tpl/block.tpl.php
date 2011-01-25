<?php
// $Id: block.tpl.php 3 2010-04-02 22:57:10Z tsilva $
?>
<!-- Block.tpl.php -->
 <div class="block block-<?php print $block->module; ?>" id="block-<?php print $block->module; ?>-<?php print $block->delta; ?>">
    <? if ($block->subject) :?>
		<h2 class="title"><?php print $block->subject; ?></h2>
	<? endif; ?>
    <?php print $block->content; ?>
 </div>
 <!-- End Block.tpl.php -->
