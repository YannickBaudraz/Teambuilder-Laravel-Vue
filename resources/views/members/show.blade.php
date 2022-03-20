<x-layout>
    <h1>Member profil</h1>

    <article>
        <header>
            <hgroup>
                <h2>{{ $member->name }}</h2>
                <h3>Ce membre ne fait partie d'aucune équipe</h3>
            </hgroup>
        </header>
        <table>
            <caption>Member details</caption>
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
