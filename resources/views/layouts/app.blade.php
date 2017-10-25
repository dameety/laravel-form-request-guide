<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">

        <nav class="navbar is-white topNav">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img src="{{ asset('img/message.jpg') }}" width="90" height="28">
                    </a>
                    <div class="navbar-burger burger" data-target="topNav">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div id="topNav" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="#"></a>
                    </div>

                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="field is-grouped">
                                @auth
                                    <p class="control">
                                        <a class="button is-small" href="{{ route('message.index') }}">
                                        	<span> View Messages </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-small" href="{{ route('message.new') }}">
                                        	<span> Create Message </span>
                                        </a>
                                    </p>
                                    <p class="control">

                                        <a class="button is-small is-danger is-outlined this dsd" href="{{ route('logout') }}"
                        					onclick="event.preventDefault();
                        					document.getElementById('logout-form').submit();">
                        					<span>Logout</span>
                    					</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                    </p>
                                @else
                                    <p class="control">
                                        <a class="button is-small"  href="{{ route('register') }}">
                                        	<span> Register </span>
                                        </a>
                                    </p>
                                    <p class="control">
                                        <a class="button is-small is-info is-outlined" href="{{ route('login') }}">
                                        	<span>Login</span>
                                        </a>
                                    </p>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')

	</div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
