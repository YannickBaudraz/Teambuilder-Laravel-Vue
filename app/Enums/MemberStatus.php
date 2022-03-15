<?php

namespace App\Enums;

enum MemberStatus: string
{

    case ACTIVE = 'ACTIVE';
    case INACTIVE = 'INACTIVE';
    case BANNED = 'BANNED';
}
