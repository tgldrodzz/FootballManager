<?php
$I = new TestGuy($scenario);
$I->am('A future member of the site');
$I->wantTo('be able to register for the site');
$I->amOnPage('/register');
$I->submitForm('#signUp', [
    'username' => 'rodzzlessa',
    'email' => 'ro@ro.com',
    'password' => 'ro',
    'confirm_password' => 'ro'
]);
$I->see('Thank you for signing up');
$I->seeInDatabase('users', ['username' => 'rodzzlessa']);

