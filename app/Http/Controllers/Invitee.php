<?php

namespace App\Http\Controllers;

use App\Invitee as InviteeModel;
use Illuminate\Http\Request;

class Invitee extends Controller
{
    public function get(Request $request) {
        return InviteeModel::search($request->get('query'))->get();
    }
}
