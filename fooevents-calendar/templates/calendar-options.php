<?php
/**
 * Template for FooEvents Calendar options
 *
 * @file    FooEvents Calendar global options
 * @link    https://www.fooevents.com
 * @package fooevents-calendar
 */

?>
<?php settings_fields( 'fooevents-calendar-settings-calendar' ); ?>
<?php do_settings_sections( 'fooevents-calendar-settings-calendar' ); ?>
<tr valign="top" class="fooevents-settings-title">
	<th scope="row"><h2><?php esc_html_e( 'Calendar', 'fooevents-calendar' ); ?></h2></th>
	<td></td>
	<td></td>
</tr>
<tr valign="top">
	<th scope="row"><?php esc_html_e( 'Enable 24-hour time format', 'fooevents-calendar' ); ?></th>
	<td>
		<input type="checkbox" name="globalFooEventsTwentyFourHour" id="globalFooEventsTwentyFourHour" value="yes" <?php checked( 'yes', $global_fooevents_twentyfour_hour ); ?>>
		<img class="help_tip fooevents-tooltip" title="<?php esc_attr_e( 'Uses the 24-hour time format on the calendar instead of 12-hour format.', 'fooevents-calendar' ); ?>" src="<?php echo esc_url( plugins_url( '../images/help.png', __FILE__ ) ); ?>" height="16" width="16" />
	</td>
</tr>
<tr valign="top">
	<th scope="row"><?php esc_html_e( 'Only display start date', 'fooevents-calendar' ); ?></th>
	<td>
		<select name="globalFooEventsStartDay" id="globalFooEventsStartDay">
			<option value="" <?php selected( $global_fooevents_start_day, '' ); ?>><?php esc_html_e( 'Disabled', 'fooevents-calendar' ); ?></option>
			<option value="calendar" <?php selected( $global_fooevents_start_day, 'calendar' ); ?>><?php esc_html_e( 'Calendar', 'fooevents-calendar' ); ?></option>
			<option value="eventlist" <?php selected( $global_fooevents_start_day, 'eventlist' ); ?>><?php esc_html_e( 'Event List', 'fooevents-calendar' ); ?></option>
			<option value="both" <?php selected( $global_fooevents_start_day, 'both' ); ?>><?php esc_html_e( 'Both', 'fooevents-calendar' ); ?></option>
		</select>
		<img class="help_tip fooevents-tooltip" title="<?php esc_attr_e( 'When the FooEvents Multi-day plugin is active the calendar and/or event list will only display the start date for multi-day events.', 'fooevents-calendar' ); ?>" src="<?php echo esc_url( plugins_url( '../images/help.png', __FILE__ ) ); ?>" height="16" width="16" />
	</td>
</tr>
<tr valign="top">
	<th scope="row"><?php esc_html_e( 'Enable full-day events', 'fooevents-calendar' ); ?></th>
	<td>
		<input type="checkbox" name="globalFooEventsAllDayEvent" id="globalFooEventsAllDayEvent" value="yes" <?php checked( 'yes', $global_fooevents_all_day_event ); ?>>
		<img class="help_tip fooevents-tooltip" title="<?php esc_attr_e( 'Removes the event time from calendar event titles.', 'fooevents-calendar' ); ?>" src="<?php echo esc_url( plugins_url( '../images/help.png', __FILE__ ) ); ?>" height="16" width="16" />
	</td>
</tr>
<tr valign="top">
	<th scope="row"><?php esc_html_e( 'Display number of tickets left', 'fooevents-calendar' ); ?></th>
	<td>
		<input type="checkbox" name="globalFooEventsDisplayStock" id="globalFooEventsDisplayStock" value="yes" <?php checked( 'yes', $global_fooevents_display_stock ); ?>>
		<img class="help_tip fooevents-tooltip" title="<?php esc_attr_e( 'Displays the stock of the event or booking slot next to the title', 'fooevents-calendar' ); ?>" src="<?php echo esc_url( plugins_url( '../images/help.png', __FILE__ ) ); ?>" height="16" width="16" />
	</td>
</tr>
<tr valign="top">
	<th scope="row"><?php esc_html_e( 'Calendar theme', 'fooevents-calendar' ); ?></th>
	<td>
		<select name="globalFooEventsCalendarTheme" id="globalFooEventsCalendarTheme">
			<option value="default" <?php selected( $global_fooevents_calendar_theme, 'default' ); ?>><?php esc_html_e( 'Default', 'fooevents-calendar' ); ?></option>
			<option value="light" <?php selected( $global_fooevents_calendar_theme, 'light' ); ?>><?php esc_html_e( 'Light', 'fooevents-calendar' ); ?></option>
			<option value="dark" <?php selected( $global_fooevents_calendar_theme, 'dark' ); ?>><?php esc_html_e( 'Dark', 'fooevents-calendar' ); ?></option>
			<option value="flat" <?php selected( $global_fooevents_calendar_theme, 'flat' ); ?>><?php esc_html_e( 'Flat', 'fooevents-calendar' ); ?></option>
			<option value="minimalist" <?php selected( $global_fooevents_calendar_theme, 'minimalist' ); ?>><?php esc_html_e( 'Minimalist', 'fooevents-calendar' ); ?></option>
		</select>
		<img class="help_tip fooevents-tooltip" title="<?php esc_attr_e( 'Select the calendar theme to be used on your website.', 'fooevents-calendar' ); ?>" src="<?php echo esc_url( plugins_url( '../images/help.png', __FILE__ ) ); ?>" height="16" width="16" />
	</td>
</tr>
<tr valign="top">
	<th scope="row"><?php esc_html_e( 'Events list theme', 'fooevents-calendar' ); ?></th>
	<td>
		<select name="globalFooEventsCalendarListTheme" id="globalFooEventsCalendarListTheme">
			<option value="default" <?php selected( $global_fooevents_calendar_list_theme, 'default' ); ?>><?php esc_html_e( 'Default', 'fooevents-calendar' ); ?></option>
			<option value="light-card" <?php selected( $global_fooevents_calendar_list_theme, 'light-card' ); ?>><?php esc_html_e( 'Light Card', 'fooevents-calendar' ); ?></option>
			<option value="dark-card" <?php selected( $global_fooevents_calendar_list_theme, 'dark-card' ); ?>><?php esc_html_e( 'Dark Card', 'fooevents-calendar' ); ?></option>
		</select>
		<img class="help_tip fooevents-tooltip" title="<?php esc_attr_e( 'Select the events list theme to be used on your website.', 'fooevents-calendar' ); ?>" src="<?php echo esc_url( plugins_url( '../images/help.png', __FILE__ ) ); ?>" height="16" width="16" />
	</td>
</tr>
<tr valign="top">
	<th scope="row"><?php esc_html_e( 'Associate with post types', 'fooevents-calendar' ); ?></th>
	<td>
		<select multiple name="globalFooEventsCalendarPostTypes[]" id="globalFooEventsCalendarPostTypes">
			<?php foreach ( $associated_post_types as $associated_post_type ) : ?>
			<option value="<?php echo esc_attr( $associated_post_type ); ?>" <?php selected( in_array( $associated_post_type, $global_fooevents_calendar_post_types, true ) || empty( $global_fooevents_calendar_post_types ), true ); ?>><?php echo esc_html( $associated_post_type ); ?></option>
			<?php endforeach; ?>
		</select>
		<img class="help_tip fooevents-tooltip" title="<?php esc_attr_e( 'Select which post types will be associated with events.', 'fooevents-calendar' ); ?>" src="<?php echo esc_url( plugins_url( '../images/help.png', __FILE__ ) ); ?>" height="16" width="16" />
	</td>
</tr>
