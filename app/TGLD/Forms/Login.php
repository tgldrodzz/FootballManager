<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 6/22/2014
 * Time: 11:32 AM
 */

namespace TGLD\Forms;

use Laracasts\Validation\FormValidator;

class Login extends FormValidator
{

    /**
     * Validation rules for logging in
     *
     * @var array
     */
    protected $rules = [
        'username' => 'required',
        'password' => 'required',
    ];

}