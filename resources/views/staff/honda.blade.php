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
				  <li role="presentation" ><a href="{{route('staff')}}">Statistic</a></li>
				  <li role="presentation" class="active"><a href="{{route('cars')}}">Cars</a></li>
				  <li role="presentation"><a href="{{route('logout')}}">Logout</a></li>
				</ul>
			</div>
			<div class="col-md-10 well">
				<ul class="nav nav-tabs">
				  <li ><a href="{{route('cars')}}">RUSI</a></li>
				  <li class="active"><a href="{{route('staff_honda')}}">HONDA</a></li>
				  <li><a href="{{route('staff_kawasaki')}}">KAWASAKI</a></li>
				  <li><a href="{{route('staff_yamaha')}}">YAMAHA</a></li>
				</ul>
			</div>
		</div>
	</div>
@endsection


@section('scripts')

@endsection