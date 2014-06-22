<?php
$I = new TestGuy($scenario);
$I->am('A  member of the site');
$I->wantTo('logout of the site');
$I->amOnPage('/logout');
$I->see('login');

