<?php

namespace TenQuality\Utility;

/**
 * Emoji class.
 *
 * @author Alejandro Mostajo <info@10quality.com>
 * @package TenQuality\Utility\Emoji
 * @license MIT
 * @version 1.0.1
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
     * @since 1.0.1
     *
     * @param string $text   Text to convert.
     * @param string $output Output format.
     *
     * @return string
     */
    public static function convert($text, $format = self::URL)
    {
        $html = $format === self::HTML;
        return preg_replace(
            [
                '/\<3/',
                '/\ð\Ÿ\’/',
                '/\â\˜\•\ï’/',
                '/\:\)/',
                '/\:D/',
                '/\:\(/',
                '/\:\'\(/',
                '/\:P/',
                '/\O\:\)/',
                '/o\.\O/',
                '/\:\O/',
                '/\-\_\-/',
                '/\>\:\O/',
                '/\:\*/',
                '/\^\_\^/',
                '/\8\-\)/',
                '/\8\|/',
                '/\>\:\(/',
                '/\:\v/',
                '/\☺/',
                '/\(\y\)/',
                '/\➡/',
            ],
            [
                ($html ? '<img class="emoji" alt="emoji-heart" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f497.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-heart" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f497.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-coffee" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/2615.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-smiling-face" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f642.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-smiling" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f603.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-pensive-face" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f614.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-crying-face" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f622.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-savouring-face" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f60b.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-smiling-halo" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f607.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-confused" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f615.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-winking" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f609.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-astonished" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f632.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-expressionless" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f611.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-angry" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f620.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-kissing" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f617.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-cheerful" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f601.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-eyeglasses" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f453.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-sunglasses" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f60e.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-unamused" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f612.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-unamused" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f612.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-flushed" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f633.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-thumbs-up" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/1f44d.svg'.($html ? '"/>' : ''),
                ($html ? '<img class="emoji" alt="emoji-right" src="' : '').'https://s.w.org/images/core/emoji/2.3/svg/27a1.svg'.($html ? '"/>' : ''),
            ],
            $text
        );
    }
}
