@extends('layout.master')

@section('body')

   	<h2>Create a Customer</h2>
    <form role="form" method="POST" action="/customers/{{ $customer->id }}">
    	{{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label>Company Name</label>
            <input name="company" class="form-control" value="{{ $customer->company }}">
        </div>
        <div class="form-group">
            <label>Contact First Name</label>
            <input name="contact_first" class="form-control" value="{{ $customer->contact_first }}">
        </div>
        <div class="form-group">
            <label>Contact Last Name</label>
            <input name="contact_last" class="form-control" value="{{ $customer->contact_last }}">
        </div>
        <div class="form-group">
            <label>Street</label>
            <input name="street" class="form-control" value="{{ $customer->street }}">
        </div>
        <div class="form-group">
            <label>City</label>
            <input name="city" class="form-control" value="{{ $customer->city }}">
        </div>
        <div class="form-group">
	        <label>State</label>
	        <select name="state" class="form-control" >
	        	@foreach ($states as $k=>$v)
	            	<option value="{{$k}}"
					@if($customer->state == $k)
						selected="selected"
					@endif
	            	>{{ $v }}</option>
	            @endforeach	
	        </select>

	    </div>
        <div class="form-group">
            <label>Zip</label>
            <input name="zip" class="form-control" value="{{ $customer->zip }}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" class="form-control" value="{{ $customer->email }}">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input name="phone1" class="form-control" value="{{ $customer->phone1 }}">
        </div>
        <div class="form-group">
            <label>Phone 2</label>
            <input name="phone2" class="form-control" value="{{ $customer->phone2 }}">
        </div>
        <div class="form-group">
            <label>Fax</label>
            <input name="phone2" class="form-control" value="{{ $customer->fax }}">
        </div>
        <div class="form-group">
            <label>Current Status</label>
            <div class="radio">
                <label>
                    <input type="radio" name="active" id="optionsRadios1" value="1" 
                    @if ($customer->active == 1)
                    	checked
                    @endif
                    >Active
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="active" id="optionsRadios2" value="0"
                    @if ($customer->active != 1)
                    	checked
                    @endif
                    >Not Active

                </label>
            </div>
        </div>
        <div class="form-group">
        	<button type="submit" class="btn btn-primary">Submit Button</button>
        </div>
    </form>

    @include('layout.validate')

@endsection