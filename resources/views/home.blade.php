
                
<!--                     @if (session('status')) -->
<!--                         <div class="alert alert-success"> -->
<!--                             {{ session('status') }} -->
<!--                         </div> -->
<!--                     @endif -->



@extends('layouts.app')

@section('content')

    <section class="hero is-info is-fullheight">
      
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Welcome to shop
          </h1>
          <h2 class="subtitle">
            You are logged in
          </h2>
        </div>
      </div>
      
    </section>


@endsection('content')