<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'main_course',
        'dessert_course',
    ];

    /**
     * The invite that this invitee belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function invite() {
        return $this->belongsTo(Invite::class);
    }
}
