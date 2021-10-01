<?php

namespace EmtiazZahid\UserLike;

class UserLikeAPI
{
    /**
     * Echo out the userlike widget script
     *
     * @param  string|null  $link
     * @return void
     * @throws \Exception
     */
    public function widgetCode(string $link = null)
    {
        $link = $link ?? config('userlike.link');

        if (empty($link)) {
            throw new \Exception('Your userlike widget key can not be empty.');
        }

        echo self::script($link);
    }

    /**
     * Create UserLike JavaScript code.
     *
     * @param  string  $key
     * @return string
     */
    private static function script(string $key) : string
    {
        $embed_link = 'https://userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/' . $key . '.js';

        return '<script async type="text/javascript" src="'.$embed_link.'"></script>';
    }
}
