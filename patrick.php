<?php
/**
 * Plugin Name: Simple Admin Notification
 * Description: Displays a custom, bright red notification in the WordPress admin area.
 * Version: 1.0
 * Author: Patrick Coombe
 */

// Exit if accessed directly to prevent security vulnerabilities.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Adds a custom admin notice to the WordPress dashboard.
 * This function is hooked to the 'admin_notices' action.
 */
function simple_admin_notice() {
    // The message to be displayed.
    $message = 'YOUR MESSAGE HERE';

    // Output the HTML for the notice.
    // The 'notice' and 'notice-error' classes are standard WordPress classes for styling,
    // and the inline style is added to make the background bright red as requested.
    // Text color is set to white for readability against the red background.
    echo '<div class="notice notice-error is-dismissible" style="background-color: #ff0000; color: #ffffff; border-left: none; padding: 10px;">';
    echo '<p>' . esc_html($message) . '</p>';
    echo '</div>';
}

// Hook the 'simple_admin_notice' function to the 'admin_notices' action.
// This ensures the function runs when admin notices are being displayed.
add_action('admin_notices', 'simple_admin_notice');
