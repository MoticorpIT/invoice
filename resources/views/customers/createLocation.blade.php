@extends('layout.master')

@section('body')
	
   	<h2>Add a Location</h2>

	<ul>
	   	<li>Customer: {{ $customer->company  }}</li>
	   	<li>Contact: {{  $customer->contact_first  }} {{  $customer->contact_last  }}</li>
	</ul>
   	
    <form role="form" method="POST" action="/customers/{{  $customer->id  }}/locations">
        {{ csrf_field() }}
        <input type="hidden" name="customerId" value="{{  $customer->id  }}">
        <div class="form-group">
            <label>Location Name</label>
            <input name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label>Contact at Location</label>
            <input name="contact_name" class="form-control" value="{{ old('contact_name') }}">
        </div>
        <div class="form-group">
            <label>Street Address</label>
            <input name="street" class="form-control" value="{{ old('street') }}">
        </div>
        <div class="form-group">
            <label>Street Address 2</label>
            <input name="street2" class="form-control" value="{{ old('street2') }}">
        </div>
        <div class="form-group">
            <label>City</label>
            <input name="city" class="form-control" value="{{ old('city') }}">
        </div>
        <div class="form-group">
            <label>State</label>
            <input name="state" class="form-control" value="{{ old('state') }}">
        </div>
        <div class="form-group">
            <label>Zip</label>
            <input name="zip" class="form-control" value="{{ old('zip') }}">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input name="phone" class="form-control" value="{{ old('phone') }}">
        </div>

        
        <div class="form-group">
        	<button type="submit" class="btn btn-primary">Submit Button</button>
        </div>
    </form>

    @include('layout.validate')

@endsection

@section('pageLinks')
	
@endsection