<?php
/**
 * @package ftravel-holiday-lite
 */
?>
	<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php the_title(); ?>
		</h2>

	<ol class="comment-list">
			<?php
				
				wp_list_comments('type=comment');

			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<div class="nav-previous"><?php previous_comments_link( esc_html__('&larr; Older Comments','ftravel-holiday-lite')); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__('Newer Comments &rarr;','ftravel-holiday-lite')); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>
	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
