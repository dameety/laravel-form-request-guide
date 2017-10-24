@extends('layouts.app')

@section('content')

    <section class="section">

    	<div class="container">
    		<div class="columns">

        		@foreach( $products as $product)

                    <div class="column is-3">
    	                <div class="card">
                          <div class="card-image">
                            <figure class="image is-4by3">
                              <img src="{{ Storage::disk('local')->url($product->image) }}" alt="Placeholder image">
                            </figure>
                          </div>
                          <div class="card-content">
                          	<div class="media">
                              	<div class="media-content">
                                	<p class="title is-4">{{$product->name}}</p>
                              	</div>
                            </div>

                            <div class="content">
                            	{{$product->description}}
                            	<a href="#">#{{$product->category }}</a>
                            </div>

                          </div>

                          <footer class="card-footer">
                            <a href="#" class="card-footer-item">Pay ${{$product->price}}</a>
                       	  </footer>

                        </div>
                  	</div>

                @endforeach

    		</div>


    	</div>


    </section>

@endsection
