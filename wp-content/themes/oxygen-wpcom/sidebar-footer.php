<?php
/**
 * The Sidebar containing the footer widget areas.
 *
 * @package Oxygen
 * @since Oxygen 0.2.2
 */
?>
<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'sidebar-3' )
		&& ! is_active_sidebar( 'sidebar-4' )
		&& ! is_active_sidebar( 'sidebar-5' )
		&& ! is_active_sidebar( 'sidebar-6' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>
<div id="supplementary" <?php oxygen_footer_sidebar_class(); ?>>
	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div id="footer-sidebar-one" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- #first .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	<div id="footer-sidebar-two" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div><!-- #second .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
	<div id="footer-sidebar-three" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-5' ); ?>
	</div><!-- #third .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
	<div id="footer-sidebar-four" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-6' ); ?>
	</div><!-- #fourth .widget-area -->
	<?php endif; ?>
</div><!-- #supplementary -->