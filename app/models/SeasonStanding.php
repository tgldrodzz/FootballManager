<?php

class SeasonStanding extends \Eloquent
{
	public function season()
    {
        return $this->belongsTo('Season')->select('id');
    }

    public function user()
    {
        return $this->belongsTo('User')->select('id', 'username');
    }
}