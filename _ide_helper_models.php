<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Member
 *
 * @property int $id
 * @property string $name
 * @property string $password
 * @property \App\Enums\MemberRole $role
 * @property \App\Enums\MemberStatus $status
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection $captained_teams
 * @property-read \Illuminate\Database\Eloquent\Collection $not_captained_teams
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team[] $teams
 * @property-read int|null $teams_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\MemberFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Member newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Member query()
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Member whereUpdatedAt($value)
 */
	class Member extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\State
 *
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 */
	class State extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Team
 *
 * @property int $id
 * @property string $name
 * @property \App\Enums\TeamState $state
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Member[] $members
 * @property-read int|null $members_count
 * @method static \Database\Factories\TeamFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedAt($value)
 */
	class Team extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TeamMember
 *
 * @property int $id
 * @property int $member_id
 * @property int $team_id
 * @property int $is_captain
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TeamMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamMember query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamMember whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamMember whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamMember whereIsCaptain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamMember whereMemberId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamMember whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamMember whereUpdatedAt($value)
 */
	class TeamMember extends \Eloquent {}
}

