@extends('layout.master')


@section('body')
	
	{{ $customer }}
   	<h2>Edit a Location</h2>
   	<strong>Customer:</strong>
   	<ul>
   		<li>{{  $customer->company  }}</li>
   		<li>{{  $customer->contact_first  }} {{  $customer->contact_last  }}</li>
   	</ul>
   	
    <form role="form" method="POST" action="/customers/{{ $customer->id  }}/locations/{{  $location->id  }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <input type="hidden" name="customer_id" value="{{  $customer->id  }}">
        <div class="form-group">
            <label>Location Name *</label>
            <input name="name" class="form-control" value="{{ $location->name }}">
        </div>
        <div class="form-group">
            <label>Contact at Location</label>
            <input name="contact_name" class="form-control" value="{{ $location->contact_name }}">
        </div>
        <div class="form-group">
            <label>Street Address *</label>
            <input name="street" class="form-control" value="{{ $location->street }}">
        </div>
        <div class="form-group">
            <label>Street Address 2</label>
            <input name="street2" class="form-control" value="{{ $location->street2 }}">
        </div>
        <div class="form-group">
            <label>City *</label>
            <input name="city" class="form-control" value="{{ $location->city }}">
        </div>
        <div class="form-group">
            <label>State *</label>
            <input name="state" class="form-control" value="{{ $location->state }}">
        </div>
        <div class="form-group">
            <label>Zip *</label>
            <input name="zip" class="form-control" value="{{ $location->zip }}">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input name="phone" class="form-control" value="{{ $location->phone }}">
        </div>
        <div class="form-group">
        	<button type="submit" class="btn btn-primary">Edit Location</button>
        </div>
    </form>

    @include('layout.validate')

@endsection

@section('pageLinks')
@endsection