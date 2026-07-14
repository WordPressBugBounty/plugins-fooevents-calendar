<?php
/**
 * Template for FooEvents Calendar Eventbrite option
 *
 * @file    FooEvents Calendar eventbrite option
 * @link    https://www.fooevents.com
 * @package fooevents-calendar
 */

?>
<div class="options_group">
	<p class="form-field">
		<label><?php esc_html_e( 'Add event to Eventbrite', 'fooevents-calendar' ); ?></label>
		<input type="checkbox" id="WooCommerceEventsMetaBoxAddEventbrite" name="WooCommerceEventsAddEventbrite" value="1" <?php checked( 1, $event_add_eventbrite ); ?> />
		<img class="help_tip" data-tip="<?php esc_attr_e( 'Checking this option will submit the event to Eventbrite.', 'fooevents-calendar' ); ?>" src="<?php echo esc_url( plugins_url( 'woocommerce/assets/images/help.png', __FILE__ ) ); ?>" height="16" width="16" />
	</p>
</div>
