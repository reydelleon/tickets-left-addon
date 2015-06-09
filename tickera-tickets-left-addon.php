<?php
/*
  Plugin Name:      Tickera - Tickets Left Add-On
  Plugin URI:       https://github.com/reydelleon/tickets-left-addon
  Description:      Show how many tickets are left for your event - Tickera Add-On
  Version:          0.1.0
  Author:           Reydel Leon Machado [Surpassweb]
  Author URI:       https://www.linkedin.com/in/reydelleon
  License:          MIT (Included with the plugin)
  Domain Path:      /languages
  Text Domain:      tickets-left-addon

  Copyright 2015 Reydel Leon Machado (https://www.linkedin.com/in/reydelleon)
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

//TODO Delete if no bootstrapping necessary
//register_activation_hook(__FILE__, 'tickera_tickets_left_addon_install');

//function tickera_invitations_addon_install() {
//    include('php/install.php');
//}

add_action('admin_menu', 'tickera_init_create_menu_tickets_left_addon');

function tickera_init_create_menu_tickets_left_addon() {
    add_submenu_page('tickera_payment_settings', 'Tickera - Tickets Left Add-On Options', 'Tickets Left Options', 'manage_options', 'tickera_tickets_left', 'tickera_tickets_left_options');
}

function tickera_tickets_left_options() {
    include("php/tickera_tickets_left_options.php");
}