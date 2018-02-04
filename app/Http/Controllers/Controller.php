<?php

namespace App\Http\Controllers;

use App\Invitee;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index() {
        return ['name' => 'Sam and Ed Get Wed API'];
    }
}
