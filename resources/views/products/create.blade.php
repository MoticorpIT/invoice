@extends('layout.master')

@section('body')

	<h2>Create a Product</h2>
    <form role="form" method="POST" action="/products">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Product Name</label>
            <input name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label>MSRP</label>
            <input name="msrp" class="form-control" value="{{ old('msrp') }}">
        </div>
        <div class="form-group">
            <label>Retailer Price</label>
            <input name="retailer_price" class="form-control" value="{{ old('retailer_price') }}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input name="description" class="form-control" value="{{ old('description') }}">
        </div>
        <div class="form-group">
            <label>Short Description</label>
            <input name="short_descript" class="form-control" value="{{ old('short_descript') }}">
        </div>
        <div class="form-group">
        	<button type="submit" class="btn btn-primary">Submit Button</button>
        </div>
    </form>

	@include('layout.validate')

@endsection