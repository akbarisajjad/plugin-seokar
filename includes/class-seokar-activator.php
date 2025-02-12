<?php

/**
 * Fired during plugin activation
 *
 * @link       http://sajjadakbari.ir/
 * @since      1.0.0
 *
 * @package    Seokar
 * @subpackage Seokar/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Seokar
 * @subpackage Seokar/includes
 */
class Seokar_Activator {

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function activate() {
        // Set default options for the plugin
        if (!get_option('seokar_options')) {
            $default_options = array(
                'redirect_attachment_urls' => 1,
                'nofollow_external_links' => 1,
                'nofollow_image_links' => 1,
                'open_external_links_in_new_tab' => 1,
                'enable_dynamic_toc' => 1,
                'toc_title' => 'فهرست مطالب',
                'exclude_headings' => array('H1'),
                'noindex_empty_categories' => 1,
                'character_separator' => '|',
                'capitalize_titles' => 1,
                'default_opengraph_image' => '',
                'twitter_card_type' => 'summary_large_image',
                'default_watermark' => 'آیکون پخش',
                'organization_type' => 'organization',
                'organization_logo' => '',
                'organization_name' => '',
                'organization_description' => '',
                'organization_url' => '',
                'organization_email' => '',
                'organization_address' => '',
                'organization_phone' => '',
                'google_maps_api_key' => '',
                'working_hours' => array(),
                'price_range' => '',
                'additional_info' => '',
            );
            update_option('seokar_options', $default_options);
        }
    }
}
