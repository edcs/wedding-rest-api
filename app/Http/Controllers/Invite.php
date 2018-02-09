<?php

namespace App\Http\Controllers;

use App\Invite as InviteModel;
use Illuminate\Http\Request;

class Invite extends Controller
{
    public function get($id) {
        return InviteModel::findOrFail($id);
    }

    public function decline($id, Request $request) {
        $invite = InviteModel::findOrFail($id);

        $invite->update([
            'accepted' => false,
            'notes' => $request->get('notes'),
        ]);

        return [];
    }
}
