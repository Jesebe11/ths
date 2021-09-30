<div class="branding">
	<?php
		the_custom_logo();
			if ( is_front_page() && is_home() ) :
	?>
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h1>
	<?php endif; ?>
</div>