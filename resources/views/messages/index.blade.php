@extends('layouts.app')

@section('content')

    <section class="section bg-color">

    	<div class="container">
    		<div class="column is-7 center">

                @if(session('successfulDelete'))
                    <div class="notification is-success">
                        <strong> {{ session('successfulDelete') }} </strong>
                    </div>
                @endif

                @if(session('successfulUpdate'))
                    <div class="notification is-success">
                        <strong> {{ session('successfulUpdate') }} </strong>
                    </div>
                @endif

        		@foreach( $messages as $message)
                    <div class="card round-corner tb-margin">

                        <div class="card-content">
                            <div class="content">
                                <strong> {{$message->subject}} :</strong>
                                {{$message->message}}
                                <br>
                                <br>
                                <span> {{ $message->created_at }} </span>
                                <a href="#">#{{$message->category }}</a>
                                <div class="tags has-addons pull-right">
                                    <span class="tag is-dark">status</span>
                                    <span class="tag is-info">unread</span>
                                </div>
                            </div>
                        </div>

                        <footer class="card-footer">
                            <span class="card-footer-item"> - {{ $message->email }} </span>
                            <a href="{{ route('message.edit', $message->id) }}" class="card-footer-item"> Edit Message </a>
                        </footer>

                    </div>
                @endforeach

    		</div>
    	</div>

    </section>

@endsection
