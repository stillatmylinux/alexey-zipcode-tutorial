@extends('layouts.boot4')
@section('title', 'Zipcodes')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<div class="card">
				<div class="card-header">
					Zipcodes
				</div>
				<div class="card-body">

					<a href="{{ route('zipcodes.new') }}" class="btn btn-info">New Zipcode</a>
				</div>
			</div>


		</div>
	</div>
</div>


@endsection

@section('footer-scripts')

@endsection