@extends('layouts.app')

@section('content')


	<section class="section">
		<div class="container">
			
			<div class="column has-text-centered">
                <h1 class="title is-3">
                    Login To Your Account.
                </h1>
            </div>

            <div class="box column is-6">
            
            	@if (count($errors))
                    <div class="notification is-danger">
                        @foreach ($errors -> all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </div>
                @endif

                <form role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" name="email" required autofocus>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control">
                            <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="password" name="password" required>
                        </div>
                    </div>


                    <div class="field is-grouped uk-margin-top">
                        <div class="control">
                            <button type="submit" class="button is-primary uk-margin-small-right">Proceed</button>
                        </div>
                    </div>

                </form>

            </div>
			
		</div>
	</section>
	
	

@endsection
