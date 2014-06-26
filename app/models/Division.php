<?php

class Division extends \Eloquent
{
	protected $fillable = [];

    public function user()
    {
        return $this->hasMany('User');
    }
}