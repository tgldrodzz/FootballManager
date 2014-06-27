<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 6/26/2014
 * Time: 10:15 AM
 */

class Season extends \Eloquent
{
    public function user()
    {
        return $this->belongsToMany('User');
    }

    public function seasonStanding()
    {
        return  $this->hasMany('SeasonStanding');
    }

    public function seasonGame()
    {
        return  $this->hasMany('SeasonGame');
    }
} 