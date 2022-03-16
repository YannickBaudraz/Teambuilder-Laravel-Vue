<?php

namespace App\Models;

use App\Enums\MemberRole;
use App\Enums\MemberStatus;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Member extends Authenticatable
{

    use HasFactory;
    use Notifiable;
    use HasApiTokens;

    protected $casts = [
        'role'   => MemberRole::class,
        'status' => MemberStatus::class,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Retrieve all teams associated to the member.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'team_member')
                    ->withPivot('is_captain', 'created_at', 'updated_at');
    }
}
