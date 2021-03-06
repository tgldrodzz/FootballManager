<?php


use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {


	use UserTrait, RemindableTrait;

    /**
     * Only allow $fillbale fields to be inserted in database
     *
     * @var array
     */
    protected $fillable = ['username', 'email', 'password'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    /**
     * @param $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public  function  team()
    {
        return $this->hasOne('Team');
    }

    public function season()
    {
        return  $this->belongsToMany('Season');
    }

    public function seasonStanding()
    {
        return  $this->hasMany('SeasonStanding');
    }
}
