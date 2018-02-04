<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', ['uses' => 'Controller@index']);
$router->get('/invites/{id}', ['uses' => 'Invite@get']);
$router->get('/invitees', ['uses' => 'Invitee@get']);
