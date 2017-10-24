@extends('layouts.app')

@section('content')

    <section class="section">

    	<div class="container">
    		<div class="column is-7 center">

        		@foreach( $messages as $message)

                    <div class="card round-corner tb-margin">

                        <div class="card-content">
                            <div class="content">
                                {{$message->message}}
                                <br>
                                <br>
                                <span> {{ $message->created_at }} </span>
                                <a href="#">#{{$message->category }}</a>
                            </div>
                        </div>

                        <footer class="card-footer">
                            <span class="card-footer-item"> - {{ $message->email }} </span>
                        </footer>

                    </div>

                @endforeach

    		</div>
    	</div>

    </section>

@endsection
