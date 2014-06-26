<?php

use \Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

class TeamManagementController extends \BaseController {

    /**
     * @param $username
     * @return \Illuminate\View\View
     */
    public function index($username)
	{
        try
        {
            $user_id = Member::getUserIdByUsername($username);
        }
        catch(UsernameNotFoundException $e)
        {
            dd('username not found');
        }

        $players = Club::getAllPlayersByUserId($user_id);
        return View::make('teamManagement.index', compact('players'));
	}


}