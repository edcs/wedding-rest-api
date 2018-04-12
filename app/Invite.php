<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invite extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'accepted',
        'invite_class',
        'notes',
        'transport',
    ];

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
            'invite_class' => $this->invite_class,
        ];
    }
}
