# PHP Emoji

Library to convert certain emojis to public svgs (html).

- [Install](#install)
- [Usage](#usage)
- [Supported Emojis](#supported-emojis)
- [License](#license)

## Install

With composer:
```bash
composer require 10quality/php-emoji
```

## Usage

Using global functions:
```php
// Following example will return an svg url
// -- echos 'https://s.w.org/images/core/emoji/2.3/svg/1f497.svg'
echo emoji_to_img('ðŸ’');

// Following example will return an svg wrapped in an image HTML tag
// -- echos '<img class="emoji" alt="emoji-heart" src="https://s.w.org/images/core/emoji/2.3/svg/1f497.svg"/>'
echo emoji_to_html('ðŸ’');
```

Using `Emoji` class:
```php
use TenQuality\Utility\Emoji;

/**
 * @param string First param is the text you want to convert.
 * @param string Second param is the type of output wanted.
 */
echo Emoji::convert('ðŸ’', Emoji::URL);
echo Emoji::convert('ðŸ’', Emoji::HTML);
```

## Supported Emojis

| Emoji | Characters | Emoji | Characters |
| ----- | ---------- | ----- | ---------- |
| ![Heart](https://s.w.org/images/core/emoji/2.3/svg/1f497.svg) | `<3` | ![Heart](https://s.w.org/images/core/emoji/2.3/svg/1f497.svg) | `ðŸ’` |
| ![Coffee](https://s.w.org/images/core/emoji/2.3/svg/2615.svg) | `â˜•ï¸` | ![Smile face](https://s.w.org/images/core/emoji/2.3/svg/1f642.svg) | `:)` |
| ![Smile](https://s.w.org/images/core/emoji/2.3/svg/1f603.svg) | `:D` | ![Pensive face](https://s.w.org/images/core/emoji/2.3/svg/1f614.svg) | `:(` |
| ![Crying face](https://s.w.org/images/core/emoji/2.3/svg/1f622.svg) | `:'(` | ![Savouring face](https://s.w.org/images/core/emoji/2.3/svg/1f60b.svg) | `:P` |
| ![Smiling halo](https://s.w.org/images/core/emoji/2.3/svg/1f607.svg) | `O:)` | ![Confused](https://s.w.org/images/core/emoji/2.3/svg/1f615.svg) | `o.O` |
| ![Winking](https://s.w.org/images/core/emoji/2.3/svg/1f609.svg) | `;)` | ![Astonished](https://s.w.org/images/core/emoji/2.3/svg/1f632.svg) | `:O` |
| ![Expressionless](https://s.w.org/images/core/emoji/2.3/svg/1f611.svg) | `-_-` | ![Angry](https://s.w.org/images/core/emoji/2.3/svg/1f620.svg) | `>:O` |
| ![Kissing](https://s.w.org/images/core/emoji/2.3/svg/1f617.svg) | `:*` | ![Cheerful](https://s.w.org/images/core/emoji/2.3/svg/1f601.svg) | `^_^` |
| ![Eyeglasses](https://s.w.org/images/core/emoji/2.3/svg/1f453.svg) | `8-)` | ![Sunglasses](https://s.w.org/images/core/emoji/2.3/svg/1f60e.svg) | `8\|` |
| ![Unamused](https://s.w.org/images/core/emoji/2.3/svg/1f612.svg) | `>:(` | ![Flushed](https://s.w.org/images/core/emoji/2.3/svg/1f633.svg) | `☺` |
| ![Thumbs Up](https://s.w.org/images/core/emoji/2.3/svg/1f44d.svg) | `(y)` | ![Right](https://s.w.org/images/core/emoji/2.3/svg/27a1.svg) | `➡` |

## License

Copyright (c) 2017 [10Quality](http://www.10quality.com/). Under MIT License.
