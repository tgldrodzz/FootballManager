<?php
use Laracasts\Validation\FormValidationException;
class SessionsController extends \BaseController {

/**
* @var
*/
protected $loginForm;

public function __construct(\TGLD\Forms\Login $loginForm)
{
    $this->loginForm = $loginForm;
}
	/**
	 * Display a listing of the resource.
	 * GET /sessions
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('session.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::only('username', 'password');

        try
        {
            $this->loginForm->validate($input);
        }

        catch (FormValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }

        $username = Input::get('username');
        $password = Input::get('password');
        $remember = Input::has('remember') ? true : false;

        if (!Auth::attempt(['username' => $username, 'password' => $password], $remember))
        {
            return Redirect::back()->withInput()->with('login_form_error', 'Invalid Credentials');
        }

        return Redirect::to('/'.$username);
	}

	/**
	 * Display the specified resource.
	 * GET /sessions/{id}
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
	 * GET /sessions/{id}/edit
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
	 * PUT /sessions/{id}
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
	 * DELETE /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}