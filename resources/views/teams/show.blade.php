<x-layout>
    <h1>Details of {{ $team->name }}</h1>

    <article>
        <hgroup>
            <h2>{{ $team->name }}</h2>
            <h3>{{ $team->state->value }}</h3>
        </hgroup>
        <table aria-label="Members list">
            <summary>{{ $team->members->count() }} members</summary>
            <thead>
                <th scope="col">Name</th>
                <th scope="col">Captain</th>
            </thead>
            <tbody>
                @foreach($team->members as $member)
                    <tr>
                        <th>{{ $member->name }}</th>
                        <th>{{ $member->pivot->is_captain ? 'Yes' : 'No' }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </article>
</x-layout>
