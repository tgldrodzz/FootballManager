<?php

class SeasonGame extends \Eloquent
{
	public function season()
    {
        return $this->belongsTo('Season');
    }
}