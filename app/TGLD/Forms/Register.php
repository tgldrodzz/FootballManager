<?php namespace TGLD\Forms;

use Laracasts\Validation\FormValidator;

class Register extends FormValidator {

    /**
     * Validation rules for logging in
     *
     * @var array
     */
    protected $rules = [
        'username' 			=> 'required|alpha_num|max:20|unique:users',
        'email' 			=> 'required|email|unique:users',
        'password' 			=> 'required',
        'confirm_password' 	=> 'required|same:password'
    ];

}