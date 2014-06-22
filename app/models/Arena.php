<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 6/22/2014
 * Time: 1:04 PM
 */

class Arena extends \Eloquent
{
    public function team()
    {
        return $this->belongsTo('Team');
    }
} 