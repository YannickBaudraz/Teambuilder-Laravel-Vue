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
    use Illuminate\Database\Eloquent\Builder;

    /**
     * App\Models\State
     *
     * @method static Builder|State newModelQuery()
     * @method static Builder|State newQuery()
     * @method static Builder|State query()
     */
    class State extends Eloquent
    {

    }
}

namespace App\Models
{

    use Eloquent;
    use Database\Factories\TeamFactory;
    use Illuminate\Database\Eloquent\Builder;

    /**
     * App\Models\Team
     *
     * @property int                             $id
     * @property string                          $name
     * @property \App\Enums\TeamState            $state
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
    class Team extends Eloquent
    {

    }
}

namespace App\Models
{

    use Eloquent;
    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Builder;

    /**
     * App\Models\User
     *
     * @property int
     *                   $id
     * @property string
     *                   $name
     * @property string
     *                   $email
     * @property \Illuminate\Support\Carbon|null
     *                   $email_verified_at
     * @property string
     *                   $password
     * @property string|null
     *                   $remember_token
     * @property \Illuminate\Support\Carbon|null
     *                   $created_at
     * @property \Illuminate\Support\Carbon|null
     *                   $updated_at
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[]
     *                $notifications
     * @property-read int|null
     *                        $notifications_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[]
     *                        $tokens
     * @property-read int|null
     *                        $tokens_count
     * @method static UserFactory factory(...$parameters)
     * @method static Builder|User newModelQuery()
     * @method static Builder|User newQuery()
     * @method static Builder|User query()
     * @method static Builder|User whereCreatedAt($value)
     * @method static Builder|User whereEmail($value)
     * @method static Builder|User whereEmailVerifiedAt($value)
     * @method static Builder|User whereId($value)
     * @method static Builder|User whereName($value)
     * @method static Builder|User wherePassword($value)
     * @method static Builder|User whereRememberToken($value)
     * @method static Builder|User whereUpdatedAt($value)
     */
    class User extends Eloquent
    {

    }
}

