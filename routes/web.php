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

$router->post('/invites/{id}/accept', ['uses' => 'Invite@accept']);

$router->post('/invites/{id}/decline', ['uses' => 'Invite@decline']);

$router->get('/invitees', ['uses' => 'Invitee@get']);

$router->get('/ogPipe.aspx', function () {
    $r = new \Illuminate\Http\Response();
    $r->setStatusCode(418);
    $r->setContent(['I\'m a teapot']);
    return $r;
});

$router->get('/ogShow.aspx', function () {
    $r = new \Illuminate\Http\Response();
    $r->setStatusCode(418);
    $r->setContent(['I\'m a teapot']);
    return $r;
});
