<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Enums\MemberRole;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

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
}
