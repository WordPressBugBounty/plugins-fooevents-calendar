<?php
/**
 * Template for FooEvents Calendar Event Shortcode
 *
 * @file    FooEvents Calendar event shortcode output
 * @link    https://www.fooevents.com
 * @package fooevents-calendar
 */

?>
<?php if ( ! empty( $thumbnail ) ) : ?>
<img src="<?php echo esc_url( $thumbnail ); ?>" />
<?php endif; ?>
<a href="<?php echo esc_url( $permalink ); ?>"><h3><?php echo esc_html( $event->post_title ); ?></h3></a>
<?php if ( ! empty( $event->post_excerpt ) ) : ?>
	<?php echo wp_kses_post( $event->post_excerpt ); ?>
<?php endif; ?>
<p><a class="button" href="<?php echo esc_url( $permalink ); ?>" rel="nofollow"><?php echo esc_html( $ticket_term ); ?></a></p>
