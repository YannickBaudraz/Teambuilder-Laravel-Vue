<header>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}"><strong>CPNV</strong></a></li>
        </ul>
        <ul>
            @auth
                <li>
                    <a href="{{ route('members.teams.index', Auth::user()) }}">My teams</a>
                </li>
                <li>
                    <a href="{{ route('members.index') }}">Members</a>
                </li>
                <li>
                    <a href="#">Moderators</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}" style="margin-bottom: 0">
                        @csrf
                        <button type="submit">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </li>
            @else
                <li><a href="{{ route('login-form') }}" role="button">{{ __('Log in') }}</a></li>
            @endauth
        </ul>
    </nav>
    <hgroup>
        <h1>Team Builder</h1>
        <h2>Application pour les joutes du CPNV</h2>
    </hgroup>
    @auth
        <p>Connecté en tant que : <a href="#">{{ Auth::user()->name }}</a></p>
    @endauth
</header>
