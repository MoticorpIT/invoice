@extends('layout.master')

@section('body')

	<h2>Create a Invoice</h2>
    <form role="form" method="POST" action="/invoices">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Due</label>
            <input name="due" class="form-control" value="{{ old('due') }}">
        </div>
        <div class="form-group">
            <label>Shipping</label>
            <input name="shipping" class="form-control" value="{{ old('shipping') }}">
        </div>
        <div class="form-group">
            <label>Add_1_Text</label>
            <input name="add_1_text" class="form-control" value="{{ old('add_1_text') }}">
        </div>
        <div class="form-group">
            <label>Add_1</label>
            <input name="add_1" class="form-control" value="{{ old('add_1') }}">
        </div>
        <div class="form-group">
            <label>Add_2_Text</label>
            <input name="add_2_text" class="form-control" value="{{ old('add_2_text') }}">
        </div>
        <div class="form-group">
            <label>Add_2</label>
            <input name="add_2" class="form-control" value="{{ old('add_2') }}">
        </div>
        <div class="form-group">
            <label>Subtotal</label>
            <input name="sub_total" class="form-control" value="{{ old('sub_total') }}">
        </div>
        <div class="form-group">
            <label>Total</label>
            <input name="total" class="form-control" value="{{ old('total') }}">
        </div>
        <div class="form-group">
            <label>Status ID</label>
            <input name="status_id" class="form-control" value="{{ old('status_id') }}">
        </div>
        <div class="form-group">
            <label>Customer ID</label>
            <input name="customers_id" class="form-control" value="{{ old('customers_id') }}">
        </div>
        <div class="form-group">
        	<button type="submit" class="btn btn-primary">Submit Button</button>
        </div>
    </form>

	@include('layout.validate')

@endsection