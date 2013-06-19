<?php
$I = new WebGuy($scenario);
$I->wantTo('Abstract class manage the set and get of given name via object');
$I->amOnPage('/');
$I->see("danny");