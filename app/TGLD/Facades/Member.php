<?php

namespace TGLD\Facades;

use Illuminate\Support\Facades\Facade;

class Member extends Facade {
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Member';
    }
} 