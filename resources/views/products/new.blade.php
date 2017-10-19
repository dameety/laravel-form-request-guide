

<!--                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"> -->
<!--                             <label for="name" class="col-md-4 control-label">Name</label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus> -->

<!--                                 @if ($errors->has('name')) -->
<!--                                     <span class="help-block"> -->
<!--                                         <strong>{{ $errors->first('name') }}</strong> -->
<!--                                     </span> -->
<!--                                 @endif -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="form-group"> -->
<!--                             <label for="name" class="col-md-4 control-label">Product image</label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <input type="file" name="image" class="form-control"> -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}"> -->
<!--                             <label for="price" class="col-md-4 control-label">Price</label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" required> -->

<!--                                 @if ($errors->has('price')) -->
<!--                                     <span class="help-block"> -->
<!--                                         <strong>{{ $errors->first('price') }}</strong> -->
<!--                                     </span> -->
<!--                                 @endif -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}"> -->
<!--                             <label for="description" class="col-md-4 control-label">Description</label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <textarea name="description" class="form-control" rows="4" value="{{ old('description') }}" required></textarea> -->

<!--                                 @if ($errors->has('description')) -->
<!--                                     <span class="help-block"> -->
<!--                                         <strong>{{ $errors->first('description') }}</strong> -->
<!--                                     </span> -->
<!--                                 @endif -->
<!--                             </div> -->
<!--                         </div> -->

<!--                         <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}"> -->
<!--                             <label for="category" class="col-md-4 control-label">Category</label> -->

<!--                             <div class="col-md-6"> -->
<!--                                 <input id="category" type="text" class="form-control" name="category" value="{{ old('category') }}" required> -->

<!--                                 @if ($errors->has('category')) -->
<!--                                     <span class="help-block"> -->
<!--                                         <strong>{{ $errors->first('category') }}</strong> -->
<!--                                     </span> -->
<!--                                 @endif -->
<!--                             </div> -->
<!--                         </div> -->



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
