@extends('layout.master')

@section('body')

	<ul>
		<li>company: {{ $customer->company }}</li>
		<li>contact_first: {{ $customer->contact_first }}</li>
		<li>contact_last: {{ $customer->contact_last }}</li>
		<li>phone1: {{ format_phone($customer->phone1) }}</li>
		<li>phone2: @if($customer->phone2) {{ format_phone($customer->phone2) }} @endif </li>
		<li>fax: @if($customer->fax) {{ format_phone($customer->fax) }} @endif </li>
		<li>email: {{ $customer->email }}</li>
		<li>active: {{ $customer->active }}</li>
		<li><h3>Locations:</h3>
			
			@foreach($customer->availableLocations as $location)
			<ul>
				<li>name: {{ $location->name }}</li>
				<li>street: {{ $location->street }}</li>
				<li>street2: {{ $location->street2 }}</li>
				<li>city: {{ $location->city }}</li>
				<li>state: {{ $location->state }}</li>
				<li>zip: {{ $location->zip }}</li>
				<li>phone: {{ format_phone($location->phone) }}</li>
				<li>contact_name: {{ $location->contact_name }}</li>
				<li>
					<form action="/customers/{{ $customer->id  }}/locations/{{  $location->id  }}" method="POST" >
						{{ method_field('DELETE') }}
        				{{ csrf_field() }}
        				<input type="hidden" name="active" value="0">
        				<input type="submit" name="submit" value="Remove Location" />
					</form>
				</li>
				<li><a href="/customers/{{ $customer->id  }}/locations/{{  $location->id  }}/edit">Edit Location</a></li>
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

@endsection

@section('pageLinks')

	<ul>
		<li><a href="/customers/{{ $customer->id }}/edit">Edit</a></li>
		<li><a href="/customers/{{ $customer->id }}/locations/create">Add Location</a></li>
		<li><a href="/customers">Back to Customers</a></li>
	</ul>
@endsection