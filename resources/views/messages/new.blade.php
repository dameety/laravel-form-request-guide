@extends('layouts.app')
@section('content')

	<section class="section">
		<div class="container">

			<div class="column has-text-centered">
                <h1 class="title is-3">
                    Create Message
                </h1>
            </div>

            <div class="box column center is-7 is-info">

				@if(session('successfulCreate'))
                    <div class="notification is-success">
                        <strong> {{ session('successfulCreate') }} </strong>
                    </div>
                @endif

                @if (count($errors))
                    <div class="notification is-danger">
                        @foreach ($errors -> all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </div>
                @endif

                <form role="form" method="POST" action="{{ route('message.create') }}">
                {{ csrf_field() }}

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="email" name="email" value="{{ Auth::user()->email }}" required autofocus>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Category</label>
                        <div class="control">
                            <div class="select is-fullwidth {{ $errors->has('category') ? ' is-danger' : '' }}">
                                <select name="category" required>
                                    <option value="">Select Category</option>
                                    <option value="Application Support"> Application Support </option>
                                    <option value="Dispute Settling"> Dispute Settling </option>
                                    <option value="Secutiry Concerns"> Security Concerns </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Subject</label>
                        <div class="control">
                            <input class="input {{ $errors->has('subject') ? ' is-danger' : '' }}" type="text" name="subject" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                      	    <textarea class="textarea {{ $errors->has('message') ? ' is-danger' : '' }}" type="text" name="message" required></textarea>
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button type="submit" class="button is-link"> Create </button>
                        </div>
                    </div>

                </form>

            </div>

		</div>
	</section>

@endsection
