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

    use Eloquent;
    use Database\Factories\MemberFactory;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Models\Member
 *
 * @property int $id
 * @property string $name
 * @property string $password
 * @property string $role
 * @property string $status
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static MemberFactory factory(...$parameters)
 * @method static Builder|Member newModelQuery()
 * @method static Builder|Member newQuery()
 * @method static Builder|Member query()
 * @method static Builder|Member whereCreatedAt($value)
 * @method static Builder|Member whereId($value)
 * @method static Builder|Member whereName($value)
 * @method static Builder|Member wherePassword($value)
 * @method static Builder|Member whereRememberToken($value)
 * @method static Builder|Member whereRole($value)
 * @method static Builder|Member whereStatus($value)
 * @method static Builder|Member whereUpdatedAt($value)
 */
	class Member extends Eloquent {}
}

namespace App\Models{

    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Models\State
 *
 * @method static Builder|State newModelQuery()
 * @method static Builder|State newQuery()
 * @method static Builder|State query()
 */
	class State extends Eloquent {}
}

namespace App\Models{

    use Eloquent;
    use Database\Factories\TeamFactory;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Models\Team
 *
 * @property int $id
 * @property string $name
 * @property \App\Enums\TeamState $state
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static TeamFactory factory(...$parameters)
 * @method static Builder|Team newModelQuery()
 * @method static Builder|Team newQuery()
 * @method static Builder|Team query()
 * @method static Builder|Team whereCreatedAt($value)
 * @method static Builder|Team whereId($value)
 * @method static Builder|Team whereName($value)
 * @method static Builder|Team whereState($value)
 * @method static Builder|Team whereUpdatedAt($value)
 */
	class Team extends Eloquent {}
}

namespace App\Models{

    use Eloquent;
    use Illuminate\Database\Eloquent\Builder;

    /**
 * App\Models\TeamMember
 *
 * @property int $id
 * @property int $member_id
 * @property int $team_id
 * @property int $is_captain
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|TeamMember newModelQuery()
 * @method static Builder|TeamMember newQuery()
 * @method static Builder|TeamMember query()
 * @method static Builder|TeamMember whereCreatedAt($value)
 * @method static Builder|TeamMember whereId($value)
 * @method static Builder|TeamMember whereIsCaptain($value)
 * @method static Builder|TeamMember whereMemberId($value)
 * @method static Builder|TeamMember whereTeamId($value)
 * @method static Builder|TeamMember whereUpdatedAt($value)
 */
	class TeamMember extends Eloquent {}
}

