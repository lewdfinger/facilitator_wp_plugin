<?php
/**
 * @package  RahnaPlugin
 */
namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;

/**
 *
 */
class Admin extends BaseController
{
    public $settings;

    public $pages = array();

    public $subpages = array();

    public function __construct()
    {
        $this->settings = new SettingsApi();

        $this->pages = array(
            array(
                'page_title' => 'RAHNA',
                'menu_title' => 'Facilitator',
                'capability' => 'manage_options',
                'menu_slug' => 'rahna_facilitator',
                'callback' => function() { echo '<h1>RAHNA Facilitator</h1>'; },
                'icon_url' => 'dashicons-store',
                'position' => 110
            )
        );

        $this->subpages = array(
            array(
                'parent_slug' => 'rahna_facilitator',
                'page_title' => 'Custom Post Types',
                'menu_title' => 'CPT',
                'capability' => 'manage_options',
                'menu_slug' => 'facilitator_cpt',
                'callback' => function() { echo '<h1>CPT Manager</h1>'; }
            ),
            array(
                'parent_slug' => 'rahna_facilitator',
                'page_title' => 'Custom Taxonomies',
                'menu_title' => 'Taxonomies',
                'capability' => 'manage_options',
                'menu_slug' => 'facilitator_taxonomies',
                'callback' => function() { echo '<h1>Taxonomies Manager</h1>'; }
            ),
            array(
                'parent_slug' => 'rahna_facilitator',
                'page_title' => 'Custom Widgets',
                'menu_title' => 'Widgets',
                'capability' => 'manage_options',
                'menu_slug' => 'facilitator_widgets',
                'callback' => function() { echo '<h1>Widgets Manager</h1>'; }
            )
        );
    }

    public function register()
    {
        $this->settings->addPages( $this->pages )->withSubPage( 'Dashboard' )->addSubPages( $this->subpages )->register();
    }
}