<?php

/**
 * Plugin Name: Disable WP Widget Block Editor
 * Description: Activate this plugin to disable the Widget Block Editor.
 * Contributors: xmic
 * Tags: widget, block, editor, gutenberg, disable
 * Author: Michael Sumner
 * Author URI: https://www.sumner.co.uk/
 * Donate link: https://ko-fi.com/michaelsumner
 * Requires at least: 5.8
 * Tested up to: 6.1.1
 * Stable tag: 1.0.0
 * Version: 1.0.0
 * Requires PHP: 5.6.20
 * Text Domain: disable-wp-widget-block-editor
 * Domain Path: /languages
 * License: GPL v2 or later
 */

/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version
 * 2 of the License, or (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * with this program. If not, visit: https://www.gnu.org/licenses/
 * Copyright 2022 Bioneer Limited. All rights reserved.
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );
