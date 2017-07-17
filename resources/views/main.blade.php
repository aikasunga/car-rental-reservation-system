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
				  <li role="presentation" class="active"><a href="{{route('rusi')}}">RUSI</a></li>
				   <li role="presentation"><a href="{{route('honda')}}">Honda</a></li>
				  <li role="presentation"><a href="{{route('kawasaki')}}">Kawasaki</a></li>
				  <li role="presentation"><a href="{{route('yamaha')}}">Yamaha</a></li>
				   <li role="presentation"><a href="{{route('login')}}">Staff</a></li>
				</ul>
			</div>
			<div class="col-md-10 well">
				@if($cars->count() > 0)
					@foreach($cars as $car)
						<div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						      <img src="#" alt="image here">
						      <div class="caption">
						        <h3>{{$car->name}} : P{{$car->price->price}}</h3>
						        <p>{{$car->description}}</p>
						        <p>
						        <a href="{{route('rent', ['car_id'=> $car->id])}}" class="btn btn-primary" role="button">Rent</a> 
						        <a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#car_info">View</a></p>
						      </div>
						    </div>
						  </div>
					@endforeach
				@endif	
			</div>
		</div>
	</div>

	<div class="modal fade" id="car_info">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="text-center">Car Information</h2>
				</div>
				<div class="modal-body">
					
				</div>
			</div>
		</div>
	</div>
@endsection


@section('scripts')

@endsection