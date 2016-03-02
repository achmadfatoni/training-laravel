@extends('layout')

@section('container')
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
		<form class="form-horizontal" action="{{ url('biodata') }}" method="POST">
			<div class="form-group">
				<label class="col-sm-2">Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control"/>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2">Address</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="address">
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-primary pull-right">Simpan</button>
				</div>
			</div>
		</form>
	</div>
	</div>
@stop