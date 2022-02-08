<?php

declare(strict_types=1);

/**
 * Main plugin file for jascha030/wpg-recent-posts
 *
 * Gutenberg Block - Display recent posts.
 *
 * @version 0.0.1
 *
 * @author  Jascha030 <contact@jaschavanaalst.nl>
 *
 * @wordpress-plugin
 * Plugin Name:       Gutenberg Block - Recent posts.
 * Plugin URI:        https://github.com/jascha030
 * Description:       Gutenberg block, to display recent posts.
 * Version:           0.0.1
 * Requires PHP:      8.0
 * Author:            Jascha030
 * Author URI:        https://github.com/jascha030
 * Update URI:        false
 */

namespace Jascha030\Gutenberg\RecentPosts;

defined('ABSPATH') || exit;

if (! function_exists('add_action')) {
    return;
}

function init(): void
{
    if (! function_exists('register_block_type')) {
        throw new \RuntimeException('Make sure WordPress is loaded.');
    }

    \register_block_type(__DIR__);
}

\add_action('init', __NAMESPACE__ . '\\init');
