<?php

use \Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

class ProfileController extends \BaseController
{

    /**
     * Display a listing of the resource.
     * GET /profile
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * GET /profile/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /profile
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * @param $username
     * @return \Illuminate\View\View
     */
    public function show($username)
    {
        try
        {
            $user = Member::getAllByUsername($username);
            # Here I'm using the $user variable that gets returned by the function on top
            # to not have to call the same query twice
            # so this facade method is only available if the user object is being called
            # prior to it
            $arena = Club::getArenaByUser($user);

        } catch (UsernameNotFoundException $e)
        {
            dd('username not found');
        }

        return View::make('profile.show', compact('user', 'arena'));
    }

    /**
     * Show the form for editing the specified resource.
     * GET /profile/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /profile/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /profile/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}