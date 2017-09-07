@extends('layout.master')

@section('body')

   	<h2>Edit Invoice</h2>
    <form role="form" method="POST" action="/invoices/{{ $invoice->inv_number }}">
    	{{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label>Customer</label>
            <input name="customer_id" class="form-control" value="{{ $invoice->customer->id }}">
            <input type="hidden" name="user_id" class="form-control" value="{{ $invoice->user_id }}">
        </div>
        <div class="form-group">
            <label>Invoice Number</label>
            <input name="inv_number" class="form-control" value="{{ $invoice->inv_number }}">
        </div>
		<div class="form-group">
            <label>Due</label>
            <input name="due" class="form-control" value="{{ $invoice->due }}">
        </div>
        <div class="form-group">
            <label>Shipping</label>
            <input name="shipping" class="form-control" value="{{ $invoice->shipping }}">
        </div>
        <div class="form-group">
            <label>Terms</label>
            @foreach($terms as $term)
                <div class="radio">
                    <label>
                        <input type="radio" name="term_id" id="termsRadio{{ $term->id }} value="{{$term->id}}"
                        @if ($invoice->term_id == $term->id)
                            checked="checked"
                        @endif
                        ><i style="top:9px;"></i>{{ $term->name }}
                    </label>
                </div>
            @endforeach
        </div>
        <div class="form-group">
            <label>Subtotal</label>
            <input name="subtotal" class="form-control" value="{{ $invoice->subtotal }}">
        </div>
        <div class="form-group">
            <label>Total</label>
            <input name="total" class="form-control" value="{{ $invoice->total }}">
        </div>
        <div class="form-group">
            <label>Status</label>
            @foreach($statuses as $status)
                <div class="radio">
                    <label>
                        <input type="radio" name="status_id" id="termsRadio{{ $status->id }} value="{{ $status->id }}"
                        @if ($invoice->status_id == $status->id)
                            checked="checked"
                        @endif
                        ><i style="top:9px;"></i>{{ $status->status }}
                    </label>
                </div>
            @endforeach
        </div>
        <div class="form-group">
            <h5>Notes:</h5>
            <ul class="list-unstyled">
                @foreach($invoice->notes as $note)
                    <input name="inv_note" class="form-control" value="{{ $note->note }}">
                @endforeach
            </ul>
        </div>
        <footer>
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-default" onclick="window.history.back();">Cancel</button>
        </footer>
    </form>

    @include('layout.validate')

@endsection