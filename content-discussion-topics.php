<?php

/**
 * content-discussion-topics.php
 * Template for discussion-topics.
 */

?>

<?php
	/**
	 * Individual Posts
	 */
	if ( is_single() ) :
?>

	<article class="container">

		<header>
			<h1 class="no-margin-bottom">
				<?php the_title(); ?>
			</h1>

			<aside class="text-muted">
				<p>
					<?php _e( 'Posted by', 'keel' ); ?> <?php the_author(); ?> | <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ) ?></time> | <?php echo keel_just_comments_count() . ' ' . __( 'Replies', 'keel' ); ?> <?php edit_post_link( __( 'Edit', 'keel' ), ' | ', '' ); ?>
				</p>
			</aside>
		</header>

		<?php
			// The page or post content
			the_content();
		?>

		<?php
			// Comments
			comments_template();
		?>

	</article>

<?php
	/**
	 * All Posts
	 */
	else :
?>

	<tr>
		<td data-label="<?php _e( 'Topic', 'keel' ); ?>">
			<h2 class="h5 text-normal no-padding-top no-margin-bottom">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>
			<span class="text-small text-muted"><?php _e( 'Posted by', 'keel' ); ?> <?php the_author(); ?></span>
		</td>
		<td data-label="<?php _e( 'Replies', 'keel' ); ?>"><?php echo keel_just_comments_count(); ?></td>
		<td data-label="<?php _e( 'Since', 'keel' ); ?>"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ) ?></time></td>
	</tr>

<?php endif; ?>