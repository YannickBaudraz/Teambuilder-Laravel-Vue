<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Contracts\View\View;

class MemberTeamController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param \App\Models\Member $member
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Member $member): View
    {
        $teams = $member->teams;
        return view('members.teams.index', [
            'teams' => $teams,
        ]);
    }
}
