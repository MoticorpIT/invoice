@extends('layout.master')

@section('body')
	@foreach($customers as $customer)
		<ul>
			<li><a href="/customers/{{ $customer->id }}">company: {{ $customer->company }}</a></li>
			<li>contact: {{ $customer->contact_first }} {{ $customer->contact_last }}</li>
			<li>phone1: {{ $customer->phone1 }}</li>
			<li>location: 
				@foreach($customer->locations as $location)
					{{ $location->city }}, {{ $location->state }}
				@endforeach
			</li>
		</ul>
	@endforeach
@endsection