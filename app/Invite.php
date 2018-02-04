<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    /**
     * The invitees which belong to this invite.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invitees() {
        return $this->hasMany(Invitee::class);
    }

    /**
     * Convert the model instance to an array.
     *
     * @return array
     */
    public function toArray() {
        return [
            'id' => $this->id,
            'invitees' => $this->invitees,
        ];
    }
}
