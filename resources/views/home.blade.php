@extends('layouts.app')
@section('content')
    <section class="hero is-fullheight">

        <div class="hero-body">
            <div class="container">

                <h1 class="title">  Welcome to shop </h1>

                @auth
                    <h2 class="subtitle">
                        You are logged in
                    </h2>
                @else
                    <h2 class="subtitle">
                        You are not logged in
                    </h2>
                @endauth

            </div>
        </div>

    </section>
@endsection('content')