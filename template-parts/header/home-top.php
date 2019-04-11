<div class="container header-top">

	<?php
	/**
	 * This action is called before the site logo wrapper.
	 *
	 * @since 1.0.2
	 */
	do_action( 'dt_before_site_logo' ); ?>

	<?php
	get_template_part( 'template-parts/header/logo');
	get_template_part( 'template-parts/header/search');
	get_template_part( 'template-parts/menu/home','middle');

	?>

	


	<?php
	if ( has_nav_menu( 'primary-menu' ) ) {
		/**
		 * Filter the mobile navigation button html.
		 *
		 * @since 1.0.2
		 */
		echo apply_filters( 'dt_mobile_menu_button', '<div class="dt-nav-toggle  dt-mobile-nav-button-wrap"><a href="#primary-nav"><i class="fas fa-bars"></i></a></div>' );

	}
	?>


</div>
