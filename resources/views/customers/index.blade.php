@extends('layout.master')

@section('body')
	@foreach($customers as $customer)
		<ul>
			<li><a href="/customers/{{ $customer->id }}">company: {{ $customer->company }}</a></li>
			<li>contact: {{ $customer->contact_first }} {{ $customer->contact_last }}</li>
			<li>phone1: {{ $customer->phone1 }}</li>
			<li>location: 
				@foreach($customer->availableLocations as $location)
					{{ $location->city }}, {{ $location->state }}
				@endforeach
			</li>
			<li><a href="customers/{{  $customer->id  }}">View</a> | <a href="customers/{{  $customer->id  }}/edit">Edit</a></li>
		</ul>
	@endforeach
@endsection

@section('pageLinks')
	<ul>
		<li><a href="/customers/create">Add a New Customer</a></li>
	</ul>
@endsection