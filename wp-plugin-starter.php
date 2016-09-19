<?php
/*
  Plugin Name: WordPress Plugin Starter
  Description: Basic WordPress Plugin Starter / Boilerplate.
  Version:     20160919
  Author:      Tomas Stark
  Author URI:  http://tomasstark.rocks
  Text Domain: wpps
*/

if (!class_exists('WPPS_Plugin')) {
    abstract class WPPS_Plugin {
        public static function init() {
            register_activation_hook(__FILE__, array('WPPS_Plugin', 'activation_hook'));
            register_deactivation_hook(__FILE__, array('WPPS_Plugin', 'deactivation_hook'));
        }

        function activation_hook() {
            // enqueue scripts / styles here, create directories etc.
        }

        function deactivation_hook() {
            // clean up database / files created in wp-content or elsewhere on deactivation
        }
    }

    WPPS_Plugin::init();
}
?>