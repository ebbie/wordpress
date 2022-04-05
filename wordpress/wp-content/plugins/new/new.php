<?php
/**
 * Plugin Name: Ebbie Custom Plugin
 * Description: Handles the custom functions for Ebbie's site.
 */

 // Remove the admin bar from the frontend
 add_filter('show_admin_bar','__return_false');