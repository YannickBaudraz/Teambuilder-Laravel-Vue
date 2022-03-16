<x-layout>
    <article>
        <div>
            <h1>{{ __('Login') }}</h1>
            <form method="post" action="{{ route('login') }}" name="login">
                @csrf

                @error('login')
                <p style="color:red">{{ $error }}</p>
                @enderror

                <input type="text"
                       name="name"
                       placeholder="Name"
                       aria-label="Name"
                       autocomplete="name"
                       required
                       autofocus
                >

                <input type="password"
                       name="password"
                       placeholder="Password"
                       aria-label="Password"
                       required
                >
                <fieldset>
                    <legend></legend>
                    <label for="remember_me">
                        <input type="checkbox" id="remember_me" name="remember_me">
                        Remember me
                    </label>
                </fieldset>
                <button type="submit"> {{ __('Log in') }}</button>
            </form>
        </div>
        <div></div>
    </article>
</x-layout>
