<?php
$I = new TestGuy($scenario);
$I->am('A future member of the site');
$I->wantTo('register for the site');
$I->amOnPage('/register');
$I->submitForm('#signUp', [
    'username' => 'fakerTest',
    'email' => 'test@test.com',
    'password' => 'test',
    'confirm_password' => 'test'
]);
$I->see('Thank you for signing up');

