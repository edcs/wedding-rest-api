<?php

namespace App\Http\Controllers;

use App\Invite as InviteModel;

class Invite extends Controller
{
    public function get($id) {
        return InviteModel::findOrFail($id);
    }
}
