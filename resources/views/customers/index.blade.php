@extends('layout.master')

@section('body')
	@foreach($customers as $customer)
		<ul>
			<li><a href="/customers/{{ $customer->id }}">company: {{ $customer->company }}</a></li>
			<li>contact: {{ $customer->contact_first }} {{ $customer->contact_last }}</li>
			<li>phone1: {{ $customer->phone1 }}</li>
			<li>location: {{ $customer->city }}, {{ $customer->state }}</li>
		</ul>
	@endforeach

	<h3>Gandy the Great</h3>
@endsection