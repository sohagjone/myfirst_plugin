<?php

namespace Softechlove\Sohagjone\Admin;

/**
 * The Menu handler class
 */
class Menu {

    /**
     * Initialize the class
     */
    function __construct() {
        add_action( 'admin_menu', [ $this, 'admin_menu' ] );
    }

    /**
     * Register admin menu
     *
     * @return void
     */
    public function admin_menu() {
        add_menu_page( __( 'Softechlove', 'softechlove' ), __( 'Sohagjone', 'softechlove' ), 'manage_options', 'softechlove', [ $this, 'plugin_page' ], 'dashicons-welcome-learn-more' );
    }

    /**
     * Render the plugin page
     *
     * @return void
     */
    public function plugin_page() {
        echo 'Hello World';
    }
}