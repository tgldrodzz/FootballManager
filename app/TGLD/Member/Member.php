<?php

namespace TGLD\Member;

use Illuminate\Support\Facades\Facade;

/**
 * Class Member
 * @package TGLD\Member
 */
class Member extends Facade {
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Member';
    }
} 