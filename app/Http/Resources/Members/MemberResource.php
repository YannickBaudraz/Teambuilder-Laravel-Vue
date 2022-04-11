<?php

namespace App\Http\Resources\Members;

use App\Models\Member;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Gate;
use JetBrains\PhpStorm\ArrayShape;
use JsonSerializable;

/**
 * @mixin Member
 */
class MemberResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return array_merge($this->resource->toArray(), [
            'can' => $this->getPermissions()
        ]);
    }

    #[ArrayShape([
        'moderate' => 'bool'
    ])]
    private function getPermissions(): array
    {
        foreach (Gate::abilities() as $ability => $useless) {
            $permissions[$ability] = $this->can($ability);
        }

        return $permissions ?? [];
    }
}
