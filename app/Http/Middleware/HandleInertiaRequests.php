<?php

namespace App\Http\Middleware;

use App\Enums\MemberRole;
use App\Enums\MemberStatus;
use App\Enums\TeamState;
use App\Http\Resources\Members\MemberResource;
use Auth;
use Illuminate\Http\Request;
use Inertia\Middleware;
use UnitEnum;

class HandleInertiaRequests extends Middleware
{

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param Request $request
     * @return array
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'appName' => config('app.name'),
            'auth' => [
                'user' => $this->getAuthMember($request)
            ],
            'enum' => [
                'member' => [
                    'roles' => $this->getAssocArrayFrom(MemberRole::cases()),
                    'status' => $this->getAssocArrayFrom(MemberStatus::cases()),
                ],
                'team' => [
                    'states' => $this->getAssocArrayFrom(TeamState::cases()),
                ]
            ],
        ]);
    }

    /**
     * Get the auth member.
     *
     * @param Request $request The request.
     * @return MemberResource|null The auth member or null if not logged in.
     */
    private function getAuthMember(Request $request): ?MemberResource
    {
        return Auth::check() ? new MemberResource($request->user()) : null;
    }

    /**
     * Convert an enum to an associative array.
     *
     * @param UnitEnum[] $enumCases The enum cases.
     * @return array An associative array that maps the enum key to the enum value.
     */
    private function getAssocArrayFrom(array $enumCases): array
    {
        return array_reduce($enumCases, static function (array $assocArray, UnitEnum $enumCase) {
            $assocArray[$enumCase->value] = $enumCase->value;
            return $assocArray;
        }, []);
    }
}
