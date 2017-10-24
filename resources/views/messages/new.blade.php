
@extends('layouts.app')

@section('content')

	<section class="section">
		<div class="container">

			<div class="column has-text-centered">
                <h1 class="title is-3">
                    Create Product
                </h1>
            </div>

            <div class="box column is-7">

				@if(session('productCreationSuccessful'))
                    <div class="notification is-success">
                        <strong> {{ session('productCreationSuccessful') }} </strong>
                    </div>
                @endif


                @if(session('maxProduct'))
                    <div class="notification is-danger">
                        <strong> {{ session('maxProduct') }} </strong>
                    </div>
                @endif

                @if (count($errors))
                    <div class="notification is-danger">
                        @foreach ($errors -> all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </div>
                @endif




                <form role="form" method="POST" action="{{ route('product.create') }}" enctype="multipart/form-data">
                {{ csrf_field() }}



                    <div class="field">
                        <label class="label">Prouct Image</label>
                        <div class="control">
        	                <input class="input" type="file" name="image">
                        </div>
                    </div>


                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" type="text" name="name" required autofocus>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Price</label>
                        <div class="control">
                            <input class="input {{ $errors->has('price') ? ' is-danger' : '' }}" type="text" name="price" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Category</label>
                        <div class="control">
                            <input class="input {{ $errors->has('category') ? ' is-danger' : '' }}" type="text" name="category" required>
                        </div>
                    </div>
                    <div class="field">
                      <label class="label">Description</label>
                      <div class="control">
                      	<textarea class="textarea {{ $errors->has('category') ? ' is-danger' : '' }}" type="text" name="description" required></textarea>
                      </div>
                    </div>


                    <div class="field is-grouped uk-margin-top">
                        <div class="control">
                            <button type="submit" class="button is-primary uk-margin-small-right">Create Product</button>
                        </div>
                        <div class="control uk-margin-small-top">
                        </div>
                    </div>

                </form>

            </div>

		</div>
	</section>
@endsection
