<?php

namespace TGLD\Club;

use Illuminate\Support\Facades\Facade;

/**
 * Class Member
 * @package TGLD\Member
 */
class Club extends Facade {
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Club';
    }
} 