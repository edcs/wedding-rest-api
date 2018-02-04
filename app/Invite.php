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
}
