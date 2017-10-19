@extends('layouts.app')

@section('content')


	<section class="section">
		<div class="container">
			
			<div class="column has-text-centered">
                <h1 class="title is-3">
                    Create An Account.
                </h1>
            </div>

            <div class="box column is-7">
            	
            	@if (count($errors))
                    <div class="notification is-danger">
                        @foreach ($errors -> all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </div>
                @endif

                <form role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

					<div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" type="text" name="name" required autofocus>
                        </div>
                    </div>
                    
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" name="email" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control">
                            <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Confirm Password</label>
                        <div class="control">
                            <input class="input" type="password" name="password_confirmation" required>
                        </div>
                    </div>					

                    <div class="field is-grouped uk-margin-top">
                        <div class="control">
                            <button type="submit" class="button is-primary uk-margin-small-right">Register</button>
                        </div>
                        <div class="control uk-margin-small-top">
                        </div>
                    </div>

                </form>

            </div>
			
		</div>
	</section>


@endsection
