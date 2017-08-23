@extends('layout.master')

@section('body')

   	<h2>Edit Invoice</h2>
    <form role="form" method="POST" action="/invoices/{{ $invoice->id }}">
    	{{ method_field('PATCH') }}
        {{ csrf_field() }}
		<div class="form-group">
            <label>Due</label>
            <input name="due" class="form-control" value="{{ $invoice->due }}">
        </div>
        <div class="form-group">
            <label>Shipping</label>
            <input name="shipping" class="form-control" value="{{ $invoice->shipping }}">
        </div>
        <div class="form-group">
            <label>Add_1_Text</label>
            <input name="add_1_text" class="form-control" value="{{ $invoice->add_1_text }}">
        </div>
        <div class="form-group">
            <label>Add_1</label>
            <input name="add_1" class="form-control" value="{{ $invoice->add_1 }}">
        </div>
        <div class="form-group">
            <label>Add_2_Text</label>
            <input name="add_2_text" class="form-control" value="{{ $invoice->add_2_text }}">
        </div>
        <div class="form-group">
            <label>Add_2</label>
            <input name="add_2" class="form-control" value="{{ $invoice->add_2 }}">
        </div>
        <div class="form-group">
            <label>Subtotal</label>
            <input name="sub_total" class="form-control" value="{{ $invoice->sub_total }}">
        </div>
        <div class="form-group">
            <label>Total</label>
            <input name="total" class="form-control" value="{{ $invoice->total }}">
        </div>
        <div class="form-group">
            <label>Status</label>
            <div class="radio">
                <label>
                    <input type="radio" name="status_id" id="optionsRadios1" value="1" 
                    @if ($invoice->status->status == 'Quote')
                        checked
                    @endif
                    >Quote
                </label>
                
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status_id" id="optionsRadios2" value="2"
                    @if ($invoice->status->status == 'Paid')
                        checked
                    @endif
                    >Paid
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status_id" id="optionsRadios3" value="3"
                    @if ($invoice->status->status == 'Unpaid')
                        checked
                    @endif
                    >Unpaid
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status_id" id="optionsRadios4" value="4"
                    @if ($invoice->status->status == 'Past Due')
                        checked
                    @endif
                    >Past Due
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>Customer</label>
            <input name="customer_id" class="form-control" value="{{ $invoice->customer->id }}">
        </div>
        <div class="form-group">
        	<button type="submit" class="btn btn-primary">Submit Button</button>
            <button><a href="/invoices">Cancel</a></button>
        </div>
    </form>

    <div>
        <h4>Notes:</h4>
        <ul>
            <li>Customer field shows customer_id and not the customer name - if customer name is shown, the form errors when submitted, as a string is being submitted and not the id (integer)</li>
        </ul>
    </div>

    @include('layout.validate')

@endsection