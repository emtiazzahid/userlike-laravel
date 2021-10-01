<?php

namespace EmtiazZahid\UserLike;

use Illuminate\Support\Facades\Facade;

class UserLike extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return \EmtiazZahid\UserLike\UserLikeAPI::class;
    }
}
