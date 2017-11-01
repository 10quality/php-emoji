<?php

use TenQuality\Utility\Emoji;

/**
 * Global package functions.
 *
 * @author Alejandro Mostajo <info@10quality.com>
 * @package TenQuality\Utility\Emoji
 * @license MIT
 * @version 1.0.0
 */

/**
 * Emoji characters to image source.
 * @since 1.0.0
 *
 * @param string $text Text containing emoji characters to convert.
 *
 * @return string
 */
function emoji_to_img($text)
{
    return Emoji::convert($text, Emoji::URL);
}

/**
 * Emoji characters to image tag html.
 * @since 1.0.0
 *
 * @param string $text Text containing emoji characters to convert.
 *
 * @return string
 */
function emoji_to_html($text)
{
    return Emoji::convert($text, Emoji::HTML);
}