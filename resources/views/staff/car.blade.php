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
				  <li class="active"><a href="{{route('cars')}}">RUSI</a></li>
				  <li><a href="{{route('staff_honda')}}">HONDA</a></li>
				  <li><a href="{{route('staff_kawasaki')}}">KAWASAKI</a></li>
				  <li><a href="{{route('staff_yamaha')}}">YAMAHA</a></li>
				</ul>
				@if(Session::has('info'))
					<div class="alert alert-success">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>OoPs!</strong>{{Session::get('info')}}
					</div>
				@endif
				<button type="button" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#add">Add</button>
				<table class="table">
					<thead>
						<tr>
							<th>Car Model</th>
							
							<th>Price</th>
							<th>Availability</th>
							<th>Time</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@if($cars->count() > 0)
							@foreach($cars as $car)
								<tr>
									<td>{{$car->name}}</td>
									
									<td>{{$car->price->price}}</td>
									<td>
										@if($car->status == 0)
											<button class="btn btn-success btn-xs">Available</button>
										@elseif($car->status == 1)
											<button class="btn btn-info btn-xs">Reserve</button>
										@elseif($car->status == 2)
											<button class="btn btn-danger btn-xs">Rented</button>
										@endif
									</td>
									<td>{{$car->updated_at->diffForHumans()}}</td>
									<td>
										<a href="#" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
										<a href="#" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
									</td>
								</tr>
							@endforeach
						@endif	
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="modal fade" id="add">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
       				 <h4 class="modal-title">Car Information</h4>
				</div>
				<div class="modal-body">
					<form action="{{route('rusi_new')}}" method="POST">
						<div class="form-group">
							<label for="model">Model</label>
							<input type="text" name="model" class="form-control" placeholder="Enter Car Model" required="">
						</div>
						<div class="form-group">
							<label for="price">Price</label>
							<input type="number" name="price" class="form-control" required="">
						</div>
						<div class="form-group">
							<label for="des">Description</label>
							<textarea class="form-control" name="desc" required=""></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Submit</button>
							{{csrf_field()}}
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection


@section('scripts')

@endsection