<?php

namespace TGLD\Facades;

use Illuminate\Support\Facades\Facade;

class Team extends Facade {
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Teams';
    }
} 