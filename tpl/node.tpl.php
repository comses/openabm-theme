<?php
// $Id$
?>
<!-- node.tpl.php -->
<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
	<?php if ($picture) print $picture; ?>
	<?php if ($page == 0) { ?><h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>
	<?php //print $submitted?>
	<?php print $content?>
	<p class="taxonomy"><?php print $terms?><?php //print $links?></p>

</div>
<!-- end of node.tpl.php -->