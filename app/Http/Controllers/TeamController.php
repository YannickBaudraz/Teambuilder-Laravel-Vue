<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Inertia\Response;
use Inertia\ResponseFactory;

class TeamController extends Controller
{

    /**
     * Display the specified team.
     *
     * @param Team $team
     *
     * @return Response|ResponseFactory
     */
    public function show(Team $team): Response|ResponseFactory
    {
        $team->load('members');

        return inertia('Teams/Show', compact('team'));
    }
}
