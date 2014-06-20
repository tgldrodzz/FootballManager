<?php

class BaseController extends Controller {

    /**
     *
     */
    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));

        $this->beforeFilter(function()
        {
            Event::fire('clockwork.controller.start');
        });

        $this->afterFilter(function()
        {
            Event::fire('clockwork.controller.end');
        });
    }
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
