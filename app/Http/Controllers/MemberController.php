<?php

namespace App\Http\Controllers;

use App\Enums\MemberRole;
use App\Http\Resources\Members\MemberResource;
use App\Models\Member;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

class MemberController extends Controller
{

    /**
     * Display a listing of members.
     *
     * @param Request $request
     *
     * @return Response|ResponseFactory
     */
    public function index(Request $request): Response|ResponseFactory
    {
        $role = $request->query('role');
        $members = $role
            ? Member::whereRole(MemberRole::tryFrom(strtoupper($role)))->get()
            : Member::all();
        $members->load('teams');

        return inertia('Members/Index', [
            'members' => MemberResource::collection($members),
        ]);
    }

    /**
     * Display the specified member.
     *
     * @param Member $member
     *
     * @return Response|ResponseFactory
     */
    public function show(Member $member): Response|ResponseFactory
    {
        $member->load('teams')->setAppends(['captained_teams', 'not_captained_teams']);

        return inertia('Members/Show', compact('member'));
    }

    /**
     * Show the form for editing the specified member.
     *
     * @param Member $member
     *
     * @return Response|ResponseFactory
     */
    public function edit(Member $member): Response|ResponseFactory
    {
        return inertia('Members/Edit', compact('member'));
    }

    /**
     * Update the specified member in storage.
     *
     * @param Request $request
     * @param Member $member
     *
     * @return RedirectResponse
     */
    public function update(Request $request, Member $member): RedirectResponse
    {
        $member->update($request->all());

        return redirect(route('members.show', compact('member')));
    }
}
