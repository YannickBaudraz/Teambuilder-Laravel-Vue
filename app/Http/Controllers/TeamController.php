<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Contracts\View\View;

class TeamController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Team $team
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Team $team): View
    {
        return view('teams.show', compact('team'));
    }
}
