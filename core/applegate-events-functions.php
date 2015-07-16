<?php
/**
 * Provides helper functions.
 *
 * @since      0.1.0
 *
 * @package    ApplegateEvents
 * @subpackage ApplegateEvents/core
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Returns the main plugin object
 *
 * @since 0.1.0
 *
 * @return ApplegateEvents
 */
function ApplegateEvents() {
	return ApplegateEvents::getInstance();
}