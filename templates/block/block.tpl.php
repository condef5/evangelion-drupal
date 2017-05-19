<?php

/**
 * @file
 * Override of Bootstrap block.tpl.php.
 */
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?> > 
	<?php print render($title_prefix); ?> 
	<?php if ($block->subject): ?>
		<h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
	<?php endif;?>
	<?php print render($title_suffix); ?>

	<div class="block-content"><?php print $content ?></div>

</div> <!-- /.block -->
