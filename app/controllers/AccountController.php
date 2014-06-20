<?php

use TGLD\Forms\Register as RegisterForm;
use Laracasts\Validation\FormValidationException;

class AccountController extends \BaseController {

    /**
     * @var
     */
    protected $registerForm;

    /**
     * @param RegisterForm $registerForm
     */
    public function __construct(RegisterForm $registerForm)
    {
        $this->registerForm = $registerForm;
    }

	/**
	 * Display a listing of the resource.
	 * GET /account
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /account/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('account.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /account
	 *
	 * @return Response
	 */
	public function store()
	{
        $inputs = Input::only('username', 'email', 'password', 'confirm_password');

        try
        {
            $this->registerForm->validate($inputs);

            return Redirect::to('login')->with('register_message', 'Welcome Thanks for registering, log in below');
        }
        catch(FormValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }

        Member::create($inputs);

        return Redirect::back()->with('register_success', 'Thank you for signing up');
	}

	/**
	 * Display the specified resource.
	 * GET /account/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /account/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /account/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /account/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}