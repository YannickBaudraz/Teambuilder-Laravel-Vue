<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Inertia\Response;
use Inertia\ResponseFactory;

class MemberTeamController extends Controller
{

    /**
     * Display a listing of the member's team.
     *
     * @param Member $member
     *
     * @return Response|ResponseFactory
     */
    public function index(Member $member): Response|ResponseFactory
    {
        $teams = $member->teams->load('members');

        return inertia('Members/Teams/Index', compact('teams'));
    }
}
