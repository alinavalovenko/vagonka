<?php

/***
 * This class contains basic settings for site administration like
 * custom post types and custom fields initialization
 */

namespace Admin;

if (! class_exists('ThemeInit')) :
    class ThemeInit
    {
        public function __construct()
        {
            add_action('after_setup_theme', array($this, 'themeSetup'));
            add_action('wp_enqueue_scripts', array($this, 'jsEnqueueScripts'));
            add_action('widgets_init', array($this, 'registerSidebarAreas'));
        }

        public function themeSetup()
        {
            add_theme_support('title-tag');

            add_theme_support('post-thumbnails');

            register_nav_menus(array(
                'main-menu' => 'Main',
            ));
        }

        /* Register styles and javascript */
        public function jsEnqueueScripts()
        {
            wp_enqueue_style('style', THEME_DIR_URI . '/style.css');
            wp_enqueue_style('main', THEME_DIR_URI . '/css/style.css');
            wp_enqueue_script('scripts', THEME_DIR_URI . '/js/scripts.main.js', array(), JS_VERSION, true);
            wp_deregister_script('jquery');
            wp_enqueue_script('jquery', THEME_DIR_URI . '/js/jquery-3.4.1.min.js');
        }

        /* Register custom sidebar areas to be used in the template*/
        public function registerSidebarAreas()
        {
            register_sidebar(
                array(
                    'id' => 'left_side', // Sidebar id
                    'name' => 'Left sidebar', //  Sidebar Name
                    'description' => '',
                    'before_widget' => '<div id="%1$s" class="left-side widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>'
                )
            );

            register_sidebar(
                array(
                    'id' => 'right_side', // Sidebar id
                    'name' => 'Right sidebar', // Sidebar Name
                    'description' => '', // Desc
                    'before_widget' => '<div id="%1$s" class="right-side widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3 class="widget-title">',
                    'after_title' => '</h3>'
                )
            );
        }
    }
endif;
