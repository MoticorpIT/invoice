@extends('layout.master')

@section('body')
	
   	<h2>Create a Customer</h2>
    <form role="form" method="POST" action="/customers">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Company Name</label>
            <input name="company" class="form-control" value="{{ old('company') }}">
        </div>
        <div class="form-group">
            <label>Contact First Name</label>
            <input name="contact_first" class="form-control" value="{{ old('contact_first') }}">
        </div>
        <div class="form-group">
            <label>Contact Last Name</label>
            <input name="contact_last" class="form-control" value="{{ old('contact_last') }}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input name="phone1" class="form-control" value="{{ old('phone1') }}">
        </div>
        <div class="form-group">
            <label>Phone 2</label>
            <input name="phone2" class="form-control" value="{{ old('phone2') }}">
        </div>
        <div class="form-group">
            <label>Fax</label>
            <input name="fax" class="form-control" value="{{ old('fax') }}">
        </div>


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