<?php

namespace TenQuality\Utility;

/**
 * Emoji class.
 *
 * @author Alejandro Mostajo <info@10quality.com>
 * @package TenQuality\Utility\Emoji
 * @license MIT
 * @version 1.0.0
 */
class Emoji
{
    /**
     * Output format.
     * SVG URL.
     * @since 1.0.0
     *
     * @var string 
     */
    const URL = 'url';

    /**
     * Output format.
     * IMAGE HTML.
     * @since 1.0.0
     *
     * @var string 
     */
    const HTML = 'html';

    /**
     * Converts given text emoji characters into valid emoji icons.
     * @since 1.0.0
     *
     * @param string $text   Text to convert.
     * @param string $output Output format.
     *
     * @return string
     */
    public static function convert($text, $format = self::URL)
    {
        $html = $format === self::HTML;
        // @todo
        return preg_replace(
            [
                '/\<3/'
            ],
            [
                ($html ? '<img alt="emoji-heart" src="' : '').'http://svg.org/heart.svg'.($html ? '"/>' : ''),
            ],
            $text
        );
    }
}