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
                if ($invitee->invite->accepted !== null) {
                    return [];
                }

                return array_merge($invitee->toArray(), [
                    'invite' => $invitee->invite->toArray(),
                ]);
            });

        return array_values(array_filter($invitees->toArray()));
    }
}
