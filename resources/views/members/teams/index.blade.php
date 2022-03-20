<x-layout>
    <h1>My teams</h1>

    <figure>
        <table aria-label="Teams list">
            <summary>{{ $teams->count() }} teams</summary>
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Number of members</th>
                    <th scope="col">Captain</th>
                    <th scope="col">State</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $team)
                    <tr>
                        <td><a href="{{ route('teams.show', $team) }}">{{ $team->name }}</a></td>
                        <td>{{ $team->members->count() }}</td>
                        <td>{{ $team->captain->name }}</td>
                        <td>{{ $team->state->value }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </figure>
</x-layout>
