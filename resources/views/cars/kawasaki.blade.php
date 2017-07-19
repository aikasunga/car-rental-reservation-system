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
				  <li role="presentation" class="active"><a href="{{route('kawasaki')}}">Kawasaki</a></li>
				  <li role="presentation"><a href="{{route('yamaha')}}">Yamaha</a></li>
				</ul>
			</div>
			<div class="col-md-10 well">
				@if($cars->count() > 0)
					@foreach($cars as $car)
						<div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						      <img src="#" alt="image here">
						      <div class="caption">
						        <h3>{{$car->name}}</h3>
						       
						        <p><a href="{{route('rent', ['car_id'=> $car->id])}}" class="btn btn-primary" role="button">Rent</a> <a href="#" class="btn btn-default" role="button">View</a></p>
						      </div>
						    </div>
						  </div>
					@endforeach
				@endif	
			</div>
		</div>
	</div>
@endsection


@section('scripts')

@endsection