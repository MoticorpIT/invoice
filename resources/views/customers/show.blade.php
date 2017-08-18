@extends('layout.master')

@section('body')
	<ul>
		<li>company: {{ $customer->company }}</li>
		<li>contact_first: {{ $customer->contact_first }}</li>
		<li>contact_last: {{ $customer->contact_last }}</li>
		<li>phone1: {{ $customer->phone1 }}</li>
		<li>phone2: {{ $customer->phone2 }}</li>
		<li>fax: {{ $customer->fax }}</li>
		<li>email: {{ $customer->email }}</li>
		<li>active: {{ $customer->active }}</li>
		<li><h3>Locations:</h3>
			
			@foreach($customer->locations as $location)
			<ul>
				<li>name: {{ $location->name }}</li>
				<li>street: {{ $location->street }}</li>
				<li>street2: {{ $location->street2 }}</li>
				<li>city: {{ $location->city }}</li>
				<li>state: {{ $location->state }}</li>
				<li>zip: {{ $location->zip }}</li>
				<li>phone: {{ $location->phone }}</li>
				<li>contact_name: {{ $location->contact_name }}</li>
			</ul>
			<br>
			@endforeach
			
		</li>
		<li><h3>Notes:</h3>
			<ul>
				@foreach($customer->notes as $note)
					<li>
						{{ $note->user->name }}
						|
						{{ $note->created_at->diffForHumans() }}
						|
						{{ $note->note }}
					</li>
				@endforeach
			</ul>
		</li>
	</ul>

	<a href="/customers/{{ $customer->id }}/edit">Edit</a>
	<a href="/customers">Back to Customers</a>
@endsection