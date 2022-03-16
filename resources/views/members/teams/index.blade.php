<x-layout>
    <h1>My teams</h1>

    <figure>
        <table>
            <caption>List of my teams</caption>
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
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->members->count() }}</td>
                        <td>{{ $team->captain->name }}</td>
                        <td>{{ $team->state->value }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </figure>
</x-layout>
