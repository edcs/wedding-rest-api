<?php

namespace App\Http\Controllers;

use App\Invite as InviteModel;
use Illuminate\Http\Request;

class Invite extends Controller
{
    public function get($id) {
        return InviteModel::findOrFail($id);
    }

    public function accept($id, Request $request) {
        $invite = InviteModel::findOrFail($id);

        foreach ($request->get('invitees') as $id => $response) {
            $invite->invitees()->findOrFail($id)->update([
                'name' => $response['name'],
                'main_course' => $response['main'],
                'dessert_course' => $response['dessert'],
                'favourite_drink' => $response['favouriteDrink'],
                'dietary_requirements' => $response['dietaryRequirements'],
            ]);
        }

        $invite->update([
            'accepted' => true,
            'transport' => $request->get('transport'),
        ]);

        return [];
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
