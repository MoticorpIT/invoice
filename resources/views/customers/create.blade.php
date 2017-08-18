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
            <input name="phone2" class="form-control" value="{{ old('fax') }}">
        </div>
        <div class="form-group">
        	<button type="submit" class="btn btn-primary">Submit Button</button>
        </div>
    </form>

    @include('layout.validate')

@endsection