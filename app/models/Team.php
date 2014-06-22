<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 6/22/2014
 * Time: 1:03 PM
 */

class Team extends \Eloquent
{
    public function user()
    {
        return $this->belongsTo('User');
    }

    public function arena()
    {
        return $this->hasOne('Arena');
    }
} 