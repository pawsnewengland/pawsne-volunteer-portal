<?php

/**
 * nav-secondary.php
 * Template for secondary site navigation.
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */

?>


<?php if ( is_user_logged_in() ) : ?>
	<?php if ( has_nav_menu( 'secondary-logged-in' ) ) : ?>
		<nav class="margin-bottom">
			<?php
				wp_nav_menu(
					array(
						'menu'           => 'Secondary',
						'theme_location' => 'secondary',
						'container'      => false,
						'depth'          => -1,
						'menu_class'     => 'list-inline list-inline-responsive no-margin-bottom',
					)
				);
			?>
		</nav>
	<?php endif; ?>
<?php else : ?>
	<?php if ( has_nav_menu( 'secondary-logged-out' ) ) : ?>
		<nav class="margin-bottom">
			<?php
				wp_nav_menu(
					array(
						'menu'           => 'Secondary',
						'theme_location' => 'secondary',
						'container'      => false,
						'depth'          => -1,
						'menu_class'     => 'list-inline list-inline-responsive no-margin-bottom',
					)
				);
			?>
		</nav>
	<?php endif; ?>
<?php endif; ?>