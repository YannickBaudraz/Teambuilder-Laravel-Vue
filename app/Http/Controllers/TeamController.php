<?php

namespace App\Http\Controllers;

use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param \App\Models\Team $team
     *
     * @return never
     */
    public function show(Team $team): never
    {
        abort(500);
    }
}
