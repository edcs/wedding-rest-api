<?php

namespace App\Http\Controllers;

use App\Invitee as InviteeModel;
use Illuminate\Http\Request;

class Invitee extends Controller
{
    public function get(Request $request) {
        $invitees = InviteeModel
            ::search($request->get('query'))
            ->get()
            ->map(function ($invitee) {
                return array_merge($invitee->toArray(), [
                    'invite' => $invitee->invite,
                ]);
            });

        return $invitees;
    }
}
