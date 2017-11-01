<?php

use TenQuality\Utility\Emoji;

/**
 * Emoji unit testing.
 *
 * @author Alejandro Mostajo <info@10quality.com>
 * @package TenQuality\Utility\Emoji
 * @license MIT
 * @version 1.0.0
 */
class EmojiTest extends PHPUnit_Framework_TestCase
{
    /**
     * Tests emoji_to_img
     */
    public function testFunctionImage()
    {
        $this->assertEquals(
            'http://svg.org/heart.svg',
            emoji_to_img('<3')
        );
    }
    /**
     * Tests emoji_to_img
     */
    public function testFunctionHTML()
    {
        $this->assertEquals(
            '<img alt="emoji-heart" src="http://svg.org/heart.svg"/>',
            emoji_to_html('<3')
        );
    }
}