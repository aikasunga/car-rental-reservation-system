@extends('template.default')

@section('styles')

@endsection


@section('contents')
	<div class="container">
		<div class="jumbotron">
			<h1>Car Rental Reservation System</h1>
		</div>
		<div>
			<div class="col-md-2 well">
				<ul class="nav nav-pills nav-stacked">
				  <li role="presentation" ><a href="{{route('rusi')}}">RUSI</a></li>
				   <li role="presentation"><a href="{{route('honda')}}">Honda</a></li>
				  <li role="presentation"><a href="{{route('kawasaki')}}">Kawasaki</a></li>
				  <li role="presentation"><a href="{{route('yamaha')}}">Yamaha</a></li>
				   <li role="presentation" class="active"><a href="{{route('login')}}">Staff</a></li>
				</ul>
			</div>
			<div class="col-md-10 well">
				<div class="col-md-6 col-md-offset-3">
					@if(Session::has('error'))
						<div class="alert alert-danger">
							<p class="text-center">{{Session::get('error')}}</p>
						</div>
					@endif
					<form action="{{route('login_check')}}" method="POST">

						<div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
							<label for="email">Email</label>
							<input type="text" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control">
						</div>
						<div class="form-group">
							{{csrf_field()}}	
							<input type="submit" value="Submit" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	
@endsection


@section('scripts')

@endsection