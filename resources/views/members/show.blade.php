<x-layout>
    <h1>Member profil</h1>

    <article>
        <header>
            <h2>{{ $member->name }}</h2>
            @if($member->teams->isNotEmpty())
                @if ($member->captained_teams->isNotEmpty())
                    <dl>
                        <dt>Captain of</dt>
                        {!! $member->captained_teams->map(fn($team) => ViewHelper::wrapInsideTag('dd', ViewHelper::wrapInsideLinkTag($team->name, route('teams.show', $team))))->join('') !!}
                    </dl>
                @endif

                @if ($member->not_captained_teams->isNotEmpty())
                    <dl>
                        <dt>Member of</dt>
                        {!! $member->not_captained_teams->map(fn($team) => ViewHelper::wrapInsideTag('dd', ViewHelper::wrapInsideLinkTag($team->name, route('teams.show', $team))))->join('') !!}
                    </dl>
                @endif
            @else
                <p>Ce membre ne fait partie d'aucune équipe</p>
            @endif
        </header>
        <table>
            <caption style="text-align: left">Member details</caption>
            <tr>
                <th scope="row">Role</th>
                <td>{{ $member->role->value }}</td>
            </tr>
            <tr>
                <th scope="row">Status</th>
                <td>{{ $member->status->value }}</td>
            </tr>
        </table>
        <footer>
            <div class="flex flex-end">
                <a href="#" role="button">Passer en mode édition</a>
            </div>
        </footer>
    </article>
</x-layout>
