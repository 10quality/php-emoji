# PHP Emoji

Library to convert certain emojis to public svgs (html).

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

## License

Copyright (c) 2017 [10Quality](http://www.10quality.com/). Under MIT License.