<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 6/22/2014
 * Time: 6:18 PM
 */

class Player extends \Eloquent
{
    public function user()
    {
        return $this->belongsTo('User');
    }
} 