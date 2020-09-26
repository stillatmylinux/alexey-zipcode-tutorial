@extends('layouts.boot4')
@section('title', 'Deliveries')

@section('content')

	<ul>
		@foreach($zipcodes as $zipcode)
			<li>{{ $zipcode }}</li>
		@endforeach
	</ul>

@endsection

@section('footer-scripts')

@endsection