<x-layout>
    <h1>{{ $members->first()->role->value }}s list</h1>
    <table>
        <caption>{{ $members->count() }} {{ $members->first()->role->value }}s</caption>
        <thead>
            <th scope="col" style="width: 1%;">#</th>
            <th scope="col">Name</th>
        </thead>
        <tbody>
            @foreach($members as $member)
                <tr>
                    <th scope="row">{{ $member->id }}</th>
                    <td>{{ $member->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
