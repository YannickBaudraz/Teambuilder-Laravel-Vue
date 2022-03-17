<x-layout>
    <h1>Members list</h1>

    <figure>
        <table>
            <caption>{{ $members->count() }} members</caption>
            <thead>
                <th scope="col">Member</th>
                <th scope="col">Team(s)</th>
                <th scope="col">Actions</th>
            </thead>
            <tbody>
                @foreach($members as $member)
                    <tr>
                        <td>
                            <a href="#">{{ $member->name }}</a>
                        </td>
                        <td>
                            {!! $member->teams->map(function($team) {
                                return \App\Helpers\ViewHelper::wrapInsideLinkTag($team->name, route('teams.show', $team));
                            })->join(', ') !!}
                        </td>
                        <td>
                            @if($member->cannot('moderate') && Auth::user()->can('moderate'))
                                <a href="#">Nominate moderator</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </figure>
</x-layout>
