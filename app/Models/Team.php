<?php

namespace App\Models;

use App\Enums\TeamState;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{

    use HasFactory;

    protected $casts = [
        'state' => TeamState::class,
    ];

    /**
     * Retrieve all members associated to the team.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function members(): BelongsToMany
    {
        return $this->belongsToMany(Member::class, 'team_member')->withPivot(
            'is_captain',
            'created_at',
            'updated_at'
        );
    }

    /**
     * Get the team's captain member.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function captain(): Attribute
    {
        return Attribute::get(
            fn() => $this->members()->where('is_captain', true)->first()
        );
    }
}
