<!doctype html>
<html lang="en"
      data-theme="light"
>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title ?? 'Team Builder' }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script defer src="{{ mix('js/app.js') }}"></script>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}"><strong>CPNV</strong></a></li>
            </ul>
            <ul>
                @auth
                    <li>
                        <a href="#">My teams</a>
                    </li>
                    <li>
                        <a href="#">My teams</a>
                    </li>
                    <li>
                        <a href="#">My teams</a>
                    </li>
                    <li>
                        <a href="#">My teams</a>
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
    </header>

    <main>
        {{ $slot }}
    </main>

</body>
</html>
