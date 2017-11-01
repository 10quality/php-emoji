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
            'https://s.w.org/images/core/emoji/2.3/svg/1f497.svg',
            emoji_to_img('ðŸ’')
        );
    }
    /**
     * Tests emoji_to_img
     */
    public function testFunctionHTML()
    {
        $this->assertEquals(
            '<img class="emoji" alt="emoji-heart" src="https://s.w.org/images/core/emoji/2.3/svg/1f497.svg"/>',
            emoji_to_html('ðŸ’')
        );
    }
}