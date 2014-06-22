<?php
$I = new TestGuy($scenario);
$I->am('A  member of the site');
$I->wantTo('login to the site');
$I->amOnPage('/login');
$I->submitForm('#login', [
    'username' => 'rodzzlessa',
    'password' => 'ro',
]);
$I->see('rodzzlessa');

