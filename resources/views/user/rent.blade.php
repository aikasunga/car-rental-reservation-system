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
				  <li role="presentation"><a href="{{route('rusi')}}">RUSI</a></li>
				   <li role="presentation"><a href="{{route('honda')}}">Honda</a></li>
				  <li role="presentation"><a href="{{route('kawasaki')}}">Kawasaki</a></li>
				  <li role="presentation"><a href="{{route('yamaha')}}">Yamaha</a></li>
				</ul>
			</div>
			<div class="col-md-10 well">
				<div class="panel panel-primary row">
					<div class="panel-heading">
						<h2 class="text-center">Fill-up the Forms</h2>
					</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form class="form-horizontal" role="form" action="{{route('rent_request', ['car_id' => $car->id])}}" method="POST">

							  <div class="form-group {{$errors->has('lname') ? 'has-error': ''}}">
							    <label class="control-label col-sm-3" for="lname">Last :</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
							    </div>
							  </div>

							  <div class="form-group">
							    <label class="control-label col-sm-3" for="mname">Middle :</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control" id="mname" placeholder="Enter Middle Name" name="mname">
							    </div>
							  </div>

							  <div class="form-group">
							    <label class="control-label col-sm-3" for="fname">First :</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
							    </div>
							  </div>
							 
							 
							 <div class="form-group">
							    <label class="control-label col-sm-3" for="dob">DOB :</label>
							    <div class="col-sm-9">
							      <input type="date" class="form-control" id="dob" name="dob">
							    </div>
							  </div>

							  <div class="form-group">
							    <label class="control-label col-sm-3" for="fname">Email :</label>
							    <div class="col-sm-9">
							      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
							    </div>
							  </div>

							  <div class="form-group">
							    <label class="control-label col-sm-3" for="contact">Contact # :</label>
							    <div class="col-sm-9">
							      <input type="number" class="form-control" id="contact"  name="contact">
							    </div>
							  </div>

							  <div class="form-group">
							    <label class="control-label col-sm-3" for="contact">Address :</label>
							    <div class="col-sm-9">
							    <textarea class="form-control" id="addr" placeholder="Enter Address" name="addr"></textarea>
							     
							    </div>
							  </div>

							  <div class="form-group"> 
							    <div class="col-sm-offset-3 col-sm-9">
							      <button type="submit" class="btn btn-primary">Submit</button>
							      {{csrf_field()}}
							    </div>
							  </div>

							  </form>
							
						</div>
						<div class="col-md-6">
						<div class="alert alert-warning">
							<h1>NOTE:</h1>
						</div>
							<h1>Car Information Here</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection


@section('scripts')

@endsection