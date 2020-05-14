<?php
/*
 * Copyright (C) 2018  Thomas Churchman
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

add_action('admin_menu', 'katex_add_admin_menu');
add_action('admin_init', 'katex_settings_init');


function katex_add_admin_menu() {
    add_options_page('KaTeX', 'KaTeX', 'manage_options', 'katex', 'katex_options_page');
}


function katex_settings_init() {
    register_setting(
        'pluginPage',
        'katex_use_jsdelivr'
    );

    register_setting(
        'pluginPage',
        'katex_enable_latex_shortcode'
    );

    add_settings_section(
        'katex_pluginPage_section',
        __('Main', 'katex'),
        'katex_settings_section_callback',
        'pluginPage'
    );

    add_settings_field(
        'katex_jsdelivr_setting',
        __('Use jsDelivr to load files', 'katex'),
        'katex_jsdelivr_setting_render',
          'pluginPage',
          'katex_pluginPage_section'
     );

    add_settings_field(
        'katex_latex_shortcode_setting',
        __('Enable the [latex] shortcode', 'katex'),
        'katex_latex_shortcode_setting_render',
        'pluginPage',
        'katex_pluginPage_section'
    );
}


function katex_jsdelivr_setting_render() {
    $option_katex_use_jsdelivr = get_option('katex_use_jsdelivr', KATEX__OPTION_DEFAULT_USE_JSDELIVR);
    ?>
    <input
        type='checkbox'
        name='katex_use_jsdelivr'
        <?php checked($option_katex_use_jsdelivr, 1); ?>
        value='1'>
    <?php
    echo __('Using the <a href="http://www.jsdelivr.com" target="_blank">jsDelivr</a> CDN will make KaTeX load faster.', 'katex');
}


function katex_latex_shortcode_setting_render() {
    $option_katex_enable_latex_shortcode = get_option('katex_enable_latex_shortcode', KATEX__OPTION_DEFAULT_ENABLE_LATEX_SHORTCODE);
    ?>
    <input
        type='checkbox'
        name='katex_enable_latex_shortcode'
        <?php checked($option_katex_enable_latex_shortcode, 1); ?>
        value='1'>
    <?php
    echo __('For compatability with other plugins you can use [latex] shortcodes in addition to [katex].', 'katex');

}


function katex_settings_section_callback() {
     echo __('', 'katex');
}


function katex_options_page() {
     ?>
    <div class="wrap">
        <h1>KaTeX</h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'pluginPage' );
            do_settings_sections( 'pluginPage' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}
