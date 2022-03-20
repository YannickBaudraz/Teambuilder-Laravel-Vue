<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Enums\MemberRole;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class MemberController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request): View
    {
        $role = $request->query('role');
        $members = $role
            ? Member::whereRole(MemberRole::tryFrom(strtoupper($role)))->get()
            : Member::all();

        return view('members.index', compact('members'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Member $member
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Member $member): View
    {
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Member $member
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Member $member): View
    {
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Member       $member
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Member $member): RedirectResponse
    {
        $member->update($request->all());

        return redirect(route('members.show', compact('member')));
    }
}
