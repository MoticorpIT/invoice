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
		<li>street: {{ $customer->street }}</li>
		<li>city: {{ $customer->city }}</li>
		<li>state: {{ $customer->state }}</li>
		<li>zip: {{ $customer->zip }}</li>
		<li>active: {{ $customer->active }}</li>
		<li>
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