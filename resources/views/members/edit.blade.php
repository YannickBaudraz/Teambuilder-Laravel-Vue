<x-layout>
    <h1>Member profil edition</h1>

    <article>
        <h2>Edition Form</h2>
        <form method="post" action="{{ route('members.update', $member) }}">
            @csrf
            @method('put')

            <div class="grid">
                <label for="name">
                    Name
                    <input type="text"
                           id="name"
                           name="name"
                           value="{{ $member->name }}"
                           required
                        {{ Auth::id() !== $member->id ? 'disabled' : '' }}
                    >
                </label>
            </div>

            <div class="grid">
                <label for="role">Role
                    <select
                        id="role"
                        name="role"
                        required
                        {{ Gate::denies('moderate') ? 'disabled' : '' }}
                    >
                        @foreach(\App\Enums\MemberRole::cases() as $role)
                            <option value="{{ $role->value }}"
                                {{ $role === $member->role ? 'selected' : '' }}
                            >
                                {{ $role->value }}
                            </option>
                        @endforeach
                    </select>
                </label>

                <label for="status">Status
                    <select
                        id="status"
                        name="status"
                        required
                        {{ Gate::denies('moderate') ? 'disabled' : '' }}
                    >
                        @foreach(\App\Enums\MemberStatus::cases() as $status)
                            <option value="{{ $status->value }}"
                                {{ $status === $member->status ? 'selected' : '' }}
                            >
                                {{ $status->value }}
                            </option>
                        @endforeach
                    </select>
                </label>
            </div>

            <button type="submit">Save</button>
        </form>
    </article>
</x-layout>
