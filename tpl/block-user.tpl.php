<?php
// $Id: block.tpl.php 3 2010-04-02 22:57:10Z tsilva $
//Menu
?>
<!-- block-user.tpl.php -->
<div class="block leftMenu">
 <? if ($block->subject) :?>
	<!-- <h2><?php print $block->subject; ?></h2> -->
<? endif; ?>
<?php print $block->content; ?>
</div>
<!-- End block-user.tpl.php -->
