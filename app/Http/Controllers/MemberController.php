<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Contracts\View\View;

class MemberController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('members.index', ['members' => Member::all()]);
    }
}
