<?php

namespace App\Models;

use App\Enums\TeamState;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{

    use HasFactory;

    protected $casts = [
        'state' => TeamState::class,
    ];
}
