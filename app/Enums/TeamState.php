<?php

namespace App\Enums;

enum TeamState: string
{

    case WAIT_CHANG = 'WAIT_CHANG';
    case WAIT_VAL = 'WAIT_VAL';
    case VALIDATED = 'VALIDATED';
    case COMMITTED = 'COMMITTED';
    case RECRUITING = 'RECRUITING';
}
