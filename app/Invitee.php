<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Sofa\Eloquence\Eloquence;

class Invitee extends Model
{
    use Eloquence, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'drinks',
        'main_course',
        'dessert_course',
        'dietary_requirements',
    ];

    /**
     * The attributes that are mass searchable.
     *
     * @var array
     */
    protected $searchableColumns = ['name'];

    /**
     * The invite that this invitee belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function invite() {
        return $this->belongsTo(Invite::class);
    }

    public function toArray() {
        return [
          'id' => $this->id,
          'invite_id' => $this->invite_id,
          'name' => $this->name,
        ];
    }
}
