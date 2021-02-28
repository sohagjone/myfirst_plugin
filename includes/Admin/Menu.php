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
        $parent_slug = 'softechlove';
        $capibility = 'manage_options';
        add_menu_page( __( 'Softechlove', 'softechlove' ), __( 'Sohagjone', 'softechlove' ), $capibility, $parent_slug, [ $this, 'addressbook_page' ], 'dashicons-welcome-learn-more' );
        add_submenu_page($parent_slug, __('Address Book', 'softechlove'), __('Address Book', 'softechlove'), $capibility, $parent_slug, [$this, 'addressbook_page']);
        add_submenu_page($parent_slug, __('Settings', 'softechlove'), __('Settings', 'softechlove'), $capibility, 'softechlove-setting', [$this, 'settings_page']);
    }

    /**
     * Render the plugin page
     *
     * @return void
     */
    public function addressbook_page()
    {
        $addressbook = new Addressbook();
        $addressbook->plugin_page();
    }
    public function settings_page()
    {
        echo "New Settings Page";
    }
}