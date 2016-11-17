<?php

/**
 * nav-main.php
 * Template for site navigation.
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */

?>

<nav class="nav-wrap-navbar <?php if ( is_user_logged_in() ) { echo 'nav-collapse'; } ?> <?php if ( !keel_has_hero() ) { echo 'margin-bottom'; } ?>">
	<div class="container container-large">
		<a class="logo-navbar" href="<?php echo site_url(); ?>/">
			<?php
				$logo = get_theme_mod( 'keel_logo' );
				if ( empty( $logo ) ) :
			?>
				<?php bloginfo( 'name' ); ?>
			<?php else : ?>
				<?php if ( substr( $logo, -4 ) === '.svg' ) : ?>
					<?php echo file_get_contents( $logo ); ?>
					<span class="icon-text"><?php bloginfo( 'name' ); ?></span>
				<?php else : ?>
					<img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>">
					<span class="icon-text"><?php bloginfo( 'name' ); ?></span>
				<?php endif; ?>
			<?php endif; ?>
		</a>
		<?php if ( is_user_logged_in() ) : ?>
			<?php if ( has_nav_menu( 'primary-logged-in' ) ) : ?>
				<a class="nav-toggle-navbar" data-nav-toggle="#nav-menu" href="#">Menu</a>
				<div class="nav-menu-navbar" id="nav-menu">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary-logged-in',
								'container'      => false,
								'menu_class'     => 'nav-navbar',
							)
						);
					?>
				</div>
			<?php endif; ?>
		<?php else : ?>
			<?php if ( has_nav_menu( 'primary-logged-out' ) ) : ?>
				<div class="nav-menu-navbar" id="nav-menu">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary-logged-out',
								'container'      => false,
								'menu_class'     => 'nav-navbar',
							)
						);
					?>
				</div>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</nav>