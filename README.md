# userlike.com for Laravel

<p>
    <a href="https://packagist.org/packages/emtiazzahid/userlike-laravel"><img src="https://img.shields.io/packagist/l/emtiazzahid/userlike-laravel" alt="License"></a>
    <a href="https://packagist.org/packages/emtiazzahid/userlike-laravel"><img src="https://img.shields.io/packagist/v/emtiazzahid/userlike-laravel" alt="Latest Version"></a>
    <a href="https://packagist.org/packages/emtiazzahid/userlike-laravel"><img src="https://img.shields.io/packagist/dt/emtiazzahid/userlike-laravel" alt="Total Downloads"></a>
</p>

userlike.com has a lot of [integrations](https://www.userlike.com/en/addons), but not for Laravel. This is an userlike chat widget for Laravel.

<p>
    <a href="https://www.userlike.com" target="_blank">
        <img src="https://user-images.githubusercontent.com/10188029/135655361-2185e15b-5944-44bf-8cd6-ecfbd13596a8.png" height="461">
    </a>
</p>

## Minimum Requirements

- PHP 7.0+
- Laravel 5.5+

## Installation

1. `composer require emtiazzahid/userlike-laravel`
2. `php artisan vendor:publish --provider="EmtiazZahid\UserLike\UserLikeServiceProvider"`
3. Add your chat link to your `.env` file:

```
USERLIKE_KEY="**84ea169c8b4049a*******ec2f982d58fca8b147184ea6a6d356154036****"
```
####To get your widget key:
- Visit: [your dashboard](https://www.userlike.com/en/dashboard/um/config/um_widget/overview)
- Select your website
- Select **Install** from right side
- Select **Credentials for Applications**

## Usage

Just echo the widget code in your app layout blade inside the body tag:

```html
        ...
        {{ \EmtiazZahid\UserLike\UserLike::widgetCode() }}
    </body>
</html>
```

Or, if you don't want to use a config file, you can set your link directly like this:

```html
        ...
        {{ \EmtiazZahid\UserLike\UserLike::widgetCode('your_widget_key') }}
    </body>
</html>
```

## License

userlike-laravel is released under the MIT license. See [LICENSE](https://github.com/emtiazzahid/userlike-laravel/blob/master/LICENSE) for details.
