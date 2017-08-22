@extends('layout.master')

@section('body')
	<h2>Invoices</h2>

	@foreach($invoices as $invoice)
		<ul>
			<li>Due:{{ $invoice->due }}</li>
			<li>Shipping: ${{ $invoice->shipping }}</li>
			<li>Add_1_Text: {{ $invoice->add_1_text }}</li>
			<li>Add_1: {{ $invoice->add_1 }}</li>
			<li>Add_2_Text: {{ $invoice->add_2_text }}</li>
			<li>Add_2: {{ $invoice->add_2 }}</li>
			<li>Subtotal: {{ $invoice->sub_total }}</li>
			<li>Total: {{ $invoice->total }}</li>
			<li>Status_Id: {{ $invoice->status_id }}</li>
			<li>Customer_Id: {{ $invoice->customers_id }}</li>
			<li><a href="invoices/{{  $invoice->id  }}">View</a> | <a href="invoices/{{  $invoice->id  }}/edit">Edit</a></li>
		</ul>
		<hr />
	@endforeach
	
@endsection


@section('pageLinks')
<ul>
	<li><a href="invoices/create">Add invoice</a></li>
</ul>
@endsection